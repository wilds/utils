<html>
<head>
<title>RPICopter - LOGS</title>
</head>
<body>
<a href="index.php">BACK</a><br/><br/>
<?php

@include("config.php");

function substrAfter($str, $last) {
	return substr( $str, strrpos( $str, $last )+2 );
}

echo "<a href='delete_logs.php?f=*.log'> DELETE ALL LOGS </a><br/><br/><br/><br/>";

$c = [];
$files = glob($log_path.'*.log');
for ($i=0;$i<count($files);$i++) {
	$fs = filesize($files[$i]);
	$time = time() - filemtime($files[$i]);
	$bname = basename($files[$i]);
	$l_type = substrAfter(basename($bname,'.log'),'.t');
	array_push($c,array($time,$fs,$bname,$l_type));
}

function cmp($a, $b) {
	if ($a[0]<$b[0]) return -1;
	if ($a[0]==$b[0]) return 0;
	if ($a[0]>$b[0]) return 1;

}

usort($c, 'cmp');

echo "<table>";
for ($i=0;$i<count($c);$i++) {
echo "<tr>";
echo "<td style='padding-right: 25px'>";
echo "<a href='chart.php?t=".$c[$i][3]."&f=".$c[$i][2]."'>  ".$c[$i][2]." T:". $c[$i][0]." S:".$c[$i][1]."  </a><br/><br/>";
echo "</td>";
echo "<td style='padding-right: 25px'>";
	echo "<a href='delete_logs.php?f=".$c[$i][2]."'> DELETE ".$c[$i][2]."  </a><br/><br/>";
echo "</td>";
echo "<td>";
	echo "<a href='displaytxt.php?f=".$c[$i][2]."'> GET ".$c[$i][2]."  </a><br/><br/>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
