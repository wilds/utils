<html>
<head>
<title>RPICopter - MOTOR</title>
</head>
<body>
<a href="index.php">BACK</a><br/><br/>
<?php
@include("load.php");
?>

Note: changed data needs to be saved before testing<br/><br/>
<form method="post" action="save_motor.php">
<input type="hidden" name="save" value="1"/>
Motor min (when throttle at 0%): <input type="text" name="motor_min" value="<?php echo $c[1][0]; ?>"/><br/>
Motor max (when throttle at 100%): <input type="text" name="motor_max" value="<?php echo $c[1][1]; ?>"/><br/><br/><br/>
Inflight threshold (just above min ESC value): <input type="text" name="inflight_threshold" value="<?php echo $c[1][2]; ?>"/><br/>
<p><b>Motor pins</b></p>
Front-Left: <input type="text" name="fl" value="<?php echo $c[13][0]; ?>"/><br/>
Back-Left: <input type="text" name="bl" value="<?php echo $c[13][1]; ?>"/><br/>
Front-Right: <input type="text" name="fr" value="<?php echo $c[13][2]; ?>"/><br/>
Back-Right: <input type="text" name="br" value="<?php echo $c[13][3]; ?>"/><br/>

<br/>

<input type="reset" value="Reset"/>
<input type="submit" value="Submit"/><br/>
</form>
<Br/><br/>
<B>PWM Test</B><br/>
<p>Disconnect controller and restart Arduino before testing</p>
<form method="get" action="motor_test.php">
<input type="hidden" name="attach" value="1"/>
<select name="motor">
	<option value="0">Front-Left</option>
	<option value="1">Back-Left</option>
	<option value="2">Front-Right</option>
	<option value="3">Back-Right</option>
</select>
<input type="submit" value="Re-attach"/>
</form>

<form method="get" action="motor_test.php">
<input type="hidden" name="test" value="1"/>
<select name="motor">
	<option value="0">Front-Left</option>
	<option value="1">Back-Left</option>
	<option value="2">Front-Right</option>
	<option value="3">Back-Right</option>
</select>
PWM width (us) <input type="text" name="pwm" value="<?php echo $c[1][0]; ?>"/>
<input type="submit" value="Send"/>
</form>

<pre>
<?php
readfile("/var/local/rpicopter.config");
?>
</pre>

</body>
</html>
