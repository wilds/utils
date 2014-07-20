<html>
<head>
<title>RPICopter - LOGS</title>
</head>
<body>
<a href="index.php">BACK</a><br/><br/>
<?php

@include("config.php");
$files1 = scandir($log_path);

echo "<a href='delete_logs.php?f=*.log'> DELETE ALL LOGS </a><br/><br/><br/><br/>";

$c = [];
for ($i=0;$i<count($files1);$i++) {
if (!(substr_compare($files1[$i],"flight-",0,7))) { 
$fs = filesize($log_path.$files1[$i]);
$time = time() - filemtime($log_path.$files1[$i]);
array_push($c,array($time,$fs,$files1[$i]));
}}

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
	echo "<a href='chart.php?f=".$c[$i][2]."'>  ".$c[$i][2]." T:". $c[$i][0]." S:".$c[$i][1]."  </a><br/><br/>";
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
