<?php
if (!isset($_POST['save']))
	movePage(301,"error.php");

@include("load.php");
$c[5][0] = $_POST['rmax'];
$c[6][0] = $_POST['rmax'];
$c[5][1] = $_POST['rimax'];
$c[6][1] = $_POST['rimax'];
$c[5][2] = $_POST['rp'];
$c[6][2] = $_POST['rp'];
$c[5][3] = $_POST['ri'];
$c[6][3] = $_POST['ri'];
$c[5][4] = $_POST['rd'];
$c[6][4] = $_POST['rd'];
$c[8][0] = $_POST['smax'];
$c[9][0] = $_POST['smax'];
$c[8][1] = $_POST['simax'];
$c[9][1] = $_POST['simax'];
$c[8][2] = $_POST['sp'];
$c[9][2] = $_POST['sp'];
$c[8][3] = $_POST['si'];
$c[9][3] = $_POST['si'];
$c[8][4] = $_POST['sd'];
$c[9][4] = $_POST['sd'];
$c[12][0] = $_POST['ap'];

$c[4][0] = $_POST['yrmax'];
$c[4][1] = $_POST['yrimax'];
$c[4][2] = $_POST['ryp'];
$c[4][3] = $_POST['ryi'];
$c[4][4] = $_POST['ryd'];
$c[7][0] = $_POST['ysmax'];
$c[7][1] = $_POST['ysimax'];
$c[7][2] = $_POST['syp'];
$c[7][3] = $_POST['syi'];
$c[7][4] = $_POST['syd'];

@include("save.php");

shell_exec("killall avrcontroller");

header("Location: pid.php");
?>
