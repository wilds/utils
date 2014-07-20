<html>
<head>
<title>RPICopter - CAMERA</title>
</head>
<body>
<a href="index.php">BACK</a><br/><br/>
<?php

@include("config.php");

echo "<a href='delete_logs.php?f=*.jpg'> DELETE ALL IMAGES </a><br/><br/><br/><br/>";
echo "<a href='delete_logs.php?f=*.h264'> DELETE ALL VIDEOS </a><br/><br/><br/><br/>";

$c = [];
$files = glob($log_path.'*.jpg');
for ($i=0;$i<count($files);$i++) {
	$fs = filesize($files[$i]);
	$time = time() - filemtime($files[$i]);
	array_push($c,array($time,$fs,basename($files[$i]),0));
}

$files = glob($log_path.'*.h264');
for ($i=0;$i<count($files);$i++) {
	$fs = filesize($files[$i]);
	$time = time() - filemtime($files[$i]);
	array_push($c,array($time,$fs,basename($files[$i]),1));
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
if ($c[$i][3] == '0')
	echo "<a href='displayjpg.php?f=".$c[$i][2]."'>  ".$c[$i][2]." T:". $c[$i][0]." S:".$c[$i][1]."  </a><br/><br/>";
if ($c[$i][3] == '1')
	echo "<a href='displayh264.php?f=".$c[$i][2]."'>  ".$c[$i][2]." T:". $c[$i][0]." S:".$c[$i][1]."  </a><br/><br/>";
echo "</td>";
echo "<td>";
	echo "<a href='delete_logs.php?f=".$c[$i][2]."'> DELETE ".$c[$i][2]."  </a><br/><br/>";
echo "</td>";

echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
