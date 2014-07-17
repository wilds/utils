<?php
if (!isset($_POST['save']))
	movePage(301,"error.php");

@include("load.php");
$c[5][2] = $_POST['rp'];
$c[6][2] = $_POST['rp'];
$c[5][3] = $_POST['ri'];
$c[6][3] = $_POST['ri'];
$c[5][4] = $_POST['rd'];
$c[6][4] = $_POST['rd'];
$c[8][2] = $_POST['sp'];
$c[9][2] = $_POST['sp'];
$c[8][3] = $_POST['si'];
$c[9][3] = $_POST['si'];
$c[8][4] = $_POST['sd'];
$c[9][4] = $_POST['sd'];

$c[4][2] = $_POST['ryp'];
$c[4][3] = $_POST['ryi'];
$c[4][4] = $_POST['ryd'];
$c[7][2] = $_POST['syp'];
$c[7][3] = $_POST['syi'];
$c[7][4] = $_POST['syd'];

$handle = fopen("/var/local/rpicopter.config", "w");
for ($i=0;$i<12;$i++) {
    for ($j=0;$j<count($c[$i]);$j++) 
        fprintf($handle,"%s\t",$c[$i][$j]);
    fprintf($handle,"\n");
}

fclose($handle);
shell_exec("killall avrcontroller");

header("Location: index.php");
?>
