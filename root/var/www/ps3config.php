<!doctype html>
<?php
session_start();
@include "ps3load.php";
?>
<html>
<head>
<title>PS3 Config</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="jquery/jquery.mobile-1.4.3.min.css" />
<script src="jquery/jquery-1.11.1.min.js"></script>
<script src="jquery/jquery.mobile-1.4.3.min.js"></script>
</script>
</head>
<body>

<div data-role="page" id="wsdebug">
<div data-role="header">
<a href="index.php" data-ajax="false" data-rel="back" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline">Go Back</a>
<h1>PS3Config</h1>
</div>

<form data-ajax="false" method="post" action="ps3save.php">
<div role="main" class="ui-content">

<div class="ui-field-contain">
<label for="name"><a href="#p_pwm_min" data-rel="popup">ESC min:</a></label>
<input type="number" name="c1_0" id="c1_0" value="<?php echo $c[1][0];?>"/>
<label for="name"><a href="#p_pwm_max" data-rel="popup">ESC max:</a></label>
<input type="number" name="c1_1" id="c1_1" value="<?php echo $c[1][1];?>"/>

<label for="c2_0">Yaw - A:</label>
<input type="number" name="c2_0" id="c2_2" value="<?php echo $c[2][0];?>"/>
<label for="c2_1">Pitch - A:</label>
<input type="number" name="c2_1" id="c2_2" value="<?php echo $c[2][1];?>"/>
<label for="c2_2">Roll - A:</label>
<input type="number" name="c2_2" id="c2_2" value="<?php echo $c[2][2];?>"/>
<label for="c3_0">Yaw - B:</label>
<input type="number" name="c3_0" id="c3_2" value="<?php echo $c[3][0];?>"/>
<label for="c3_1">Pitch - B:</label>
<input type="number" name="c3_1" id="c3_2" value="<?php echo $c[3][1];?>"/>
<label for="c3_2">Roll - B:</label>
<input type="number" name="c3_2" id="c3_2" value="<?php echo $c[3][2];?>"/>

<div data-role="collapsible" data-collapsed="true">
<h3>LOG</h3>
<label for="cam_seq">Reset cam sequencing</label>
<select name="cam_seq" id="cam_seq" data-role="slider">
<option value="no">No</option>
<option value="cam_reset">Reset</option>
</select>
<label for="log_seq">Reset log sequencing</label>
<select name="log_seq" id="log_seq" data-role="slider">
<option value="no">No</option>
<option value="log_reset">Reset</option>
</select>
<fieldset data-role="controlgroup">
<input type="radio" name="c0_1" id="c0_1-0" value="0" <?php if ($c[0][1]==0) echo 'checked'; ?> />
<label for="c0_1-0">Off</label>
<input type="radio" name="c0_1" id="c0_1-1" value="1" <?php if ($c[0][1]==1) echo 'checked'; ?>  />
<label for="c0_1-1">Accelerometer</label>
<input type="radio" name="c0_1" id="c0_1-2" value="2" <?php if ($c[0][1]==2) echo 'checked'; ?>  />
<label for="c0_1-2">Gyro + Motors</label>
<input type="radio" name="c0_1" id="c0_1-3" value="3" <?php if ($c[0][1]==3) echo 'checked'; ?>  />
<label for="c0_1-3">Quaternions + Motors</label>
<input type="radio" name="c0_1" id="c0_1-4" value="4" <?php if ($c[0][1]==4) echo 'checked'; ?>  />
<label for="c0_1-4">Altitude</label>
</fieldset>
</div>
</div>
<input type="submit" value="Save"/>

<div data-role="collapsible" data-collapsed="true">
<h3>Config view</h3>
<pre>
<?php
readfile("/var/local/ps3.config");
?>
</pre>
</div>
</div>
</form>
</div>
</body>
</html>
