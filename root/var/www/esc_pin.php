<?php
$page_id='esc_pin';
?>
  <div data-role="page" id="<?php echo $page_id; ?>">
    <div data-role="header">
      <a href="#esc" data-rel="back" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline">Go Back</a>
      <h1>ESC Pins</h1>
    </div>

    <div role="main" class="ui-content">
<div style="text-align: center;">
<p>Motor position is relative to MPU6050/9150 based on the orientation matrix.</p>
<p>The default orientation matrix (identity matrix) assumes setup as per the diagram.</p>
<img src="motordir1.png"/>
</div>
<div class="ui-field-contain">
  <label for="name">Front-left (0) pin:</label>
  <input type="number" name="c15_0" id="c15_0" value="<?php echo $c[15][0];?>"/>
  <label for="name">Back-left (1) pin:</label>
  <input type="number" name="c15_1" id="c15_1" value="<?php echo $c[15][1];?>"/>
  <label for="name">Front-right (2) pin:</label>
  <input type="number" name="c15_2" id="c15_2" value="<?php echo $c[15][2];?>"/>
  <label for="name">Back-right (3) pin:</label>
  <input type="number" name="c15_3" id="c15_3" value="<?php echo $c[15][3];?>"/>


</div>
<div data-role="collapsible">
  <h3>MPU orientation matrix</h3>
  <p>Do not change unless you know what are you doing!</p>
  <p>This is a 3x3 matrix. The top-left item is identified as 0,0. Please refer to MPU6050/6150 driver source code.</p>
<div class="ui-field-contain">
  <label for="name">0,0:</label>
  <input type="number" name="c14_0" id="c14_0" value="<?php echo $c[14][0];?>"/>
  <label for="name">0,1:</label>
  <input type="number" name="c14_1" id="c14_1" value="<?php echo $c[14][1];?>"/>
  <label for="name">0,2:</label>
  <input type="number" name="c14_2" id="c14_2" value="<?php echo $c[14][2];?>"/>
  <label for="name">1,0:</label>
  <input type="number" name="c14_3" id="c14_3" value="<?php echo $c[14][3];?>"/>
  <label for="name">1,1:</label>
  <input type="number" name="c14_4" id="c14_4" value="<?php echo $c[14][4];?>"/>
  <label for="name">1,2:</label>
  <input type="number" name="c14_5" id="c14_5" value="<?php echo $c[14][5];?>"/>
  <label for="name">2,0:</label>
  <input type="number" name="c14_6" id="c14_6" value="<?php echo $c[14][6];?>"/>
  <label for="name">2,1:</label>
  <input type="number" name="c14_7" id="c14_7" value="<?php echo $c[14][7];?>"/>
  <label for="name">2,2:</label>
  <input type="number" name="c14_8" id="c14_8" value="<?php echo $c[14][8];?>"/>
</div>
</div>
<input type="submit" value="Save"/>
    </div>

  </div>
