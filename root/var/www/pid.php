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
Rate_P <input type="text" name="rp" value="<?php echo $c[5][2]; ?>"/><br/>
Rate_I <input type="text" name="ri" value="<?php echo $c[5][3]; ?>"/><br/>
Rate_D <input type="text" name="rd" value="<?php echo $c[5][4]; ?>"/><br/><br/><br/>
Stab_P <input type="text" name="sp" value="<?php echo $c[8][2]; ?>"/><br/>
Stab_I <input type="text" name="si" value="<?php echo $c[8][3]; ?>"/><br/>
Stab_D <input type="text" name="sd" value="<?php echo $c[8][4]; ?>"/><br/><br/><br/>
Rate_Y P <input type="text" name="ryp" value="<?php echo $c[4][2]; ?>"/><br/>
Rate_Y_I <input type="text" name="ryi" value="<?php echo $c[4][3]; ?>"/><br/>
Rate_Y_D <input type="text" name="ryd" value="<?php echo $c[4][4]; ?>"/><br/><br/><br/>
Stab_Y_P <input type="text" name="syp" value="<?php echo $c[7][2]; ?>"/><br/>
Stab_Y_I <input type="text" name="syi" value="<?php echo $c[7][3]; ?>"/><br/>
Stab_Y_D <input type="text" name="syd" value="<?php echo $c[7][4]; ?>"/><br/>
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
