<html>
<head>
<title>RPICopter - PID</title>
</head>
<body>
<a href="index.php">BACK</a><br/><br/>
<?php
@include("load.php");
?>

<form method="post" action="save_pid.php">
<input type="hidden" name="save" value="1"/>
RATE<br/>
P: <input type="text" name="rp" value="<?php echo $c[5][2]; ?>"/> 
I: <input type="text" name="ri" value="<?php echo $c[5][3]; ?>"/>
D: <input type="text" name="rd" value="<?php echo $c[5][4]; ?>"/><br/><br/>
MAX: <input type="text" name="rmax" value="<?php echo $c[5][0]; ?>"/>
IMAX: <input type="text" name="rimax" value="<?php echo $c[5][1]; ?>"/>
<br/><br/>
<hr/>
STAB<br/>
P: <input type="text" name="sp" value="<?php echo $c[8][2]; ?>"/>
I: <input type="text" name="si" value="<?php echo $c[8][3]; ?>"/>
D: <input type="text" name="sd" value="<?php echo $c[8][4]; ?>"/><br/><br/>
MAX: <input type="text" name="smax" value="<?php echo $c[8][0]; ?>"/>
IMAX: <input type="text" name="simax" value="<?php echo $c[8][1]; ?>"/>
<br/><br/>
<hr/>
Acro_P <input type="text" name="ap" value="<?php echo $c[12][0]; ?>"/><br/><br/>
<hr/>
Yaw Rate<br/>
P: <input type="text" name="ryp" value="<?php echo $c[4][2]; ?>"/>
I: <input type="text" name="ryi" value="<?php echo $c[4][3]; ?>"/>
D: <input type="text" name="ryd" value="<?php echo $c[4][4]; ?>"/<br/><br/>
MAX: <input type="text" name="yrmax" value="<?php echo $c[4][0]; ?>"/>
IMAX: <input type="text" name="yrimax" value="<?php echo $c[4][1]; ?>"/>
<br/><br/>
<hr/>
Yaw Stab<br/>
P: <input type="text" name="syp" value="<?php echo $c[7][2]; ?>"/>
I: <input type="text" name="syi" value="<?php echo $c[7][3]; ?>"/>
D: <input type="text" name="syd" value="<?php echo $c[7][4]; ?>"/><br/><br/>
MAX: <input type="text" name="ysmax" value="<?php echo $c[7][0]; ?>"/>
IMAX: <input type="text" name="ysimax" value="<?php echo $c[7][1]; ?>"/>
<br/><br/>
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
