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
<p>0 - off<br/>
1 - accel (x_max, y_max, z_max, x_min, y_min, z_min)<br/>
2 - mpu (gyro x,y,z, y, p, r, yt) <br/>
3 - motors (fl, bl, fr, br)<br/>
4 - motors + quat<br/>
5 - alt (alt, v_est, h_est)<br/>
Log type: <input type="text" name="log_type" value="<?php echo $c[0][1]; ?>"/><br/><br/><br/>

Rec Y0: <input type="text" name="rec0_y" value="<?php echo $c[2][0]; ?>"/><br/>
Rec P0: <input type="text" name="rec0_p" value="<?php echo $c[2][1]; ?>"/><br/>
Rec R0: <input type="text" name="rec0_r" value="<?php echo $c[2][2]; ?>"/><br/>
Rec Y1: <input type="text" name="rec1_y" value="<?php echo $c[3][0]; ?>"/><br/>
Rec P1: <input type="text" name="rec1_p" value="<?php echo $c[3][1]; ?>"/><br/>
Rec R1: <input type="text" name="rec1_r" value="<?php echo $c[3][2]; ?>"/><br/><br/><br/>

ALT_H PID: <input type="text" name="alt_h" value="<?php echo $c[10][2]; ?>"/><br/>
MAX: <input type="text" name="alt_h_max" value="<?php echo $c[10][0]; ?>"/>
IMAX: <input type="text" name="alt_h_imax" value="<?php echo $c[10][1]; ?>"/>
<br/><br/>
ALT_V PID: <input type="text" name="alt_v" value="<?php echo $c[11][2]; ?>"/><br/>
MAX: <input type="text" name="alt_v_max" value="<?php echo $c[11][0]; ?>"/>
IMAX: <input type="text" name="alt_v_imax" value="<?php echo $c[11][1]; ?>"/>
<br/><br/>
MPU addr<br/>
<input type="radio" name="mpu" value="0" <?php if ($c[15][0]==0) echo 'checked'; ?> >0x68</input><br/>
<input type="radio" name="mpu" value="1" <?php if ($c[15][0]==1) echo 'checked'; ?> >0x69</input><br/>
<br/>
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
