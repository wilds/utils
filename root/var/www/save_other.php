<?php
if (!isset($_POST['save']))
	movePage(301,"error.php");

@include("load.php");
$c[0][0] = $_POST['log_seq'];
$c[0][1] = $_POST['log_type'];
$c[2][0] = $_POST['rec0_y'];
$c[2][1] = $_POST['rec0_p'];
$c[2][2] = $_POST['rec0_r'];
$c[3][0] = $_POST['rec1_y'];
$c[3][1] = $_POST['rec1_p'];
$c[3][2] = $_POST['rec1_r'];
$c[10][0] = $_POST['alt_h_max'];
$c[10][1] = $_POST['alt_h_imax'];
$c[10][2] = $_POST['alt_h'];
$c[11][0] = $_POST['alt_v_max'];
$c[11][1] = $_POST['alt_v_imax'];
$c[11][2] = $_POST['alt_v'];
$c[15][0] = $_POST['mpu'];

@include("save.php");

shell_exec("killall avrcontroller");

header("Location: other.php");
?>
