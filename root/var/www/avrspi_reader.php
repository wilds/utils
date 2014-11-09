<?php
error_reporting(E_ALL);
ini_set('display_errors', True);
$pidof = '/bin/pidof';
$buf_prog = 'avrspi_buf';
$buf_cmd = '/usr/local/bin/'.$buf_prog;
$cmd = $buf_cmd.' -a 127.0.0.1 -p 1030 -l 1031';
$out = "";
$outputfile = "/tmp/avrspi_buf_php.log";
if (!extension_loaded('sockets')) {
	echo '{"error": "PHP socket extension is not loaded."}';
	exit(0);
}

function unpacki16($b0,$b1)
{
	$ret=unpack('s',$b1.$b0);
	return $ret[1];
}

function readMsg1($sock) {
	$stop = FALSE;
	$c = 0;
	$ret = '';
	do {
		$fd = array($sock);
		$v = socket_select($fd, $null, $null, 1);
		if ($v === FALSE) {
			$stop = TRUE;
		} else {
			$data = socket_read($sock, 3-$c);
			if ($data === FALSE) {
				$stop = TRUE;
			} else if (strlen($data)==0) {
				$stop = TRUE;
			} else {
				$c = $c + strlen($data);
				$ret = $ret.$data;
				if ($c == 3) $c = 0;
			}
		}
	} while ($stop === FALSE);

        return $ret;
}

function readMsg($sock)
{
	$stop = FALSE;
	$c = 0;
	$ret = '';
	while(($stop === FALSE) && ($c!=3)) {
		$data = fread($sock, 3-$c);
		if ($data === FALSE) {
			$stop=TRUE;
			echo "Error reading. Closing connection.\n";
		} else {
			echo "x";
			$c = $c + strlen($data);
			$ret = $ret.$data;
		}
	}
	if ($stop) return FALSE;
	else return $ret;
}

function isRunning(){
    global $buf_prog;
    global $pidof;
    try{
	$c = sprintf("%s %s",$pidof,$buf_prog);
        $result = shell_exec($c);
        $lines = count(preg_split("/\n/", $result)); 

	if ($lines>1) {
            return true;
        }
    }catch(Exception $e){
	echo '{"error": "Couldn\'t run pidof"}';
	exit(0);
    }

    return false;
}

if (!isRunning()) { 
	global $cmd;
	global $out;
	global $outputfile;
	$out = exec(sprintf("%s > %s 2>&1 & echo $!", $cmd, $outputfile),$pidArr); 
} 

if (!isRunning()) {
	echo '{"error": "Couldn\'t start avrspi_buf"}';
	exit(0);
}

$sock = socket_create(AF_INET, SOCK_STREAM, 0);
if (!$sock) {
	$errno = socket_last_error($sock);
	$errstr = socket_strerror ( $errno );
	echo '{"error": "Couldn\'t create socket: ['.$errno.'] '.$errstr.'"}';
	exit(0);
}

if (!socket_connect($sock, "127.0.0.1", 1031)) {
	$errno = socket_last_error($sock);
	$errstr = socket_strerror ( $errno );
	echo '{"error": "Couldn\'t connect socket: ['.$errno.'] '.$errstr.'"}';
	exit(0);
}

socket_set_nonblock($sock); //non-blocking

$ret = '{ "data": [';
$data = readMsg1($sock);
for ($i=0;$i<strlen($data);$i+=3) {
	//$ret = $ret.' "'.($i/3).'": {"t": '.ord($data[$i]).', "v": '.unpacki16($data[$i+1],$data[$i+2]).'},';
	$ret = $ret.'{"t": '.ord($data[$i]).', "v": '.unpacki16($data[$i+1],$data[$i+2]).'},';
}
$ret=rtrim($ret, ",");
$ret = $ret . ']}';
socket_close($sock);
echo $ret;
?>
