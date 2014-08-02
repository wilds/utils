<?php
error_reporting(E_ALL);
ini_set('display_errors', True);
@include('load.php');

if  (isset($_GET['attach']))  {
	$m = $_GET['motor'];
	$p = $c[14][$m];
	$v = $m | $p << 4;
	shell_exec('/usr/local/bin/avrspi -t 250 -v '.$v);
}

if  (isset($_GET['test']))  {
	$p = $_GET['pwm'];
	$m = $_GET['motor'];
	$v = $m | $p << 4;
	shell_exec('/usr/local/bin/avrspi -t 251 -v '.$v);
}

header("Location: motor.php");

?>
