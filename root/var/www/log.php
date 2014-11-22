<?php
$page_id='logs';
?>
  <div data-role="page" id="<?php echo $page_id; ?>">
    <div data-role="header">
      <a href="index.php#mainmenu" data-ajax="false" data-rel="back" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline">Go Back</a>
      <h1>Logs</h1>
    </div>

    <div role="main" class="ui-content">

<div data-role="collapsible" data-collapsed="true">
<h3>Settings</h3>
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
<input type="submit" value="Save"/>
</div>
</div>
<?php
@include "log_list.php";
?>

<br/><br/>
      <a href="delete.php?f=logs&hash=<?php echo $page_id; ?>" data-ajax="false" class="ui-btn ui-corner-all ui-btn-inline">Delete logs</a>
    </div>



