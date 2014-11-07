<?php
$page_id='other';
?>
  <div data-role="page" id="<?php echo $page_id; ?>">
    <div data-role="header">
      <a href="#mainmenu" data-rel="back" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline">Go Back</a>
      <h1>Other</h1>
    </div>

    <div role="main" class="ui-content">

<div data-role="collapsible" data-collapsed="true">
<h3>PS3 controller</h3>
<p>This section defines max values that PS3 controller will feed into the program when requesting yaw, pitch and roll at 100%.
<div class="ui-field-contain">
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
</div>
</div>

<div data-role="collapsible" data-collapsed="true">
<h3>MPU Address</h3>
<fieldset data-role="controlgroup">
     	<input type="radio" name="c16_0" id="c16_0-0" value="0" <?php if ($c[16][0]==0) echo 'checked'; ?> />
     	<label for="c16_0-0">0x68</label>
   	<input type="radio" name="c16_0" id="c16_0-1" value="1" <?php if ($c[16][0]==1) echo 'checked'; ?>  />
     	<label for="c16_0-1">0x69</label>
</fieldset>
</div>

<input type="submit" value="Save"/>
    </div>



  </div>
