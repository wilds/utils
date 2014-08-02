<?php
if (!isset($_POST['save']))
	movePage(301,"error.php");

@include("load.php");
$c[14][0] = $_POST['fl'];
$c[14][1] = $_POST['bl'];
$c[14][2] = $_POST['fr'];
$c[14][3] = $_POST['br'];
$c[1][0] = $_POST['motor_min'];
$c[1][1] = $_POST['motor_max'];
$c[1][2] = $_POST['inflight_threshold'];

@include("save.php");

shell_exec("killall avrcontroller");

header("Location: motor.php");
?>
