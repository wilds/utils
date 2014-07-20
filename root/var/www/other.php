<html>
<head>
<title>RPICopter - OTHER</title>
</head>
<body>
<a href="index.php">BACK</a><br/><br/>
<?php
@include("load.php");
?>

<form method="post" action="save_other.php">
<input type="hidden" name="save" value="1"/>
Log seq: <input type="text" name="log_seq" value="<?php echo $c[0][0]; ?>"/><br/>
Log type: <input type="text" name="log_type" value="<?php echo $c[0][1]; ?>"/><br/><br/><br/>

Motor min: <input type="text" name="motor_min" value="<?php echo $c[1][0]; ?>"/><br/>
Motor max: <input type="text" name="motor_max" value="<?php echo $c[1][1]; ?>"/><br/><br/><br/>

Rec Y0: <input type="text" name="rec0_y" value="<?php echo $c[2][0]; ?>"/><br/>
Rec P0: <input type="text" name="rec0_p" value="<?php echo $c[2][1]; ?>"/><br/>
Rec R0: <input type="text" name="rec0_r" value="<?php echo $c[2][2]; ?>"/><br/>
Rec Y1: <input type="text" name="rec1_y" value="<?php echo $c[3][0]; ?>"/><br/>
Rec P1: <input type="text" name="rec1_p" value="<?php echo $c[3][1]; ?>"/><br/>
Rec R1: <input type="text" name="rec1_r" value="<?php echo $c[3][2]; ?>"/><br/><br/><br/>

ALT_H PID: <input type="text" name="alt_h" value="<?php echo $c[10][2]; ?>"/><br/>
ALT_V PID: <input type="text" name="alt_v" value="<?php echo $c[11][2]; ?>"/><br/><br/><br/>

<input type="reset" value="Reset"/>
<input type="submit" value="Submit"/><br/>
</form>

<pre>
<?php
readfile("/var/local/rpicopter.config");
?>
</pre>

</body>
</html>
