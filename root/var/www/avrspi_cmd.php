<?php
$cmd = '/usr/local/bin/avrspi_cmd';
error_reporting(E_ALL);
ini_set('display_errors', True);

//Function to check if the request is an AJAX request
function is_ajax() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

if (!is_ajax()) {
	echo "Not an AJAX call!";
	exit(0);
}
$err = false;
$data = json_decode($_POST['data'],true);
if ($data === NULL)
{
	echo '{"success": "false", "error":"Failed on json_decode"}';
	exit(0);
}
$ret = '{';

for ($i=0;$i<count($data);$i++) {
	$strout = array();
	unset($strout);
        $out = exec(sprintf("%s -t %s -v %s", $cmd, $data[$i]['t'], $data[$i]['v']),$strout,$retval);
	$ret = $ret . '"ret": "'.$retval.'",';
	if ($ret != 0) {
		$err = true;
		break;
	}
	
}

if ($err) $ret = $ret.'"success": "false"';
else $ret = $ret.'"success": "true"';

$ret = $ret.'}';

echo $ret;
?>
