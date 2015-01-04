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
  <input type="number" name="motor_pin_0" id="motor_pin_0" value="<?php echo $motor_pin[0];?>"/>
  <label for="name">Back-left (1) pin:</label>
  <input type="number" name="motor_pin_1" id="motor_pin_1" value="<?php echo $motor_pin[1];?>"/>
  <label for="name">Front-right (2) pin:</label>
  <input type="number" name="motor_pin_2" id="motor_pin_2" value="<?php echo $motor_pin[2];?>"/>
  <label for="name">Back-right (3) pin:</label>
  <input type="number" name="motor_pin_3" id="motor_pin_3" value="<?php echo $motor_pin[3];?>"/>


</div>
<div data-role="collapsible">
  <h3>MPU orientation matrix</h3>
  <p>When pitching forwards the pitch quaternion should increase</p>
  <p>When rolling right the roll quaternion should increase</p>
  <p>When yawing right the yaw quaternion should decrease</p>
  <p>To toggle pitch change the sign of 0,0 (i.e. from 1 to -1)</p>
  <p>To toggle roll change sign of 1,1 (i.e. from 1 to -1)</p>
  <p>This is a 3x3 matrix. The top-left item is identified as 0,0. Please refer to MPU6050/6150 driver source code.</p>
<div class="ui-field-contain">
  <label for="name">0,0:</label>
  <input type="number" name="gyro_orient_0" id="gyro_orient_0" value="<?php echo $gyro_orient[0];?>"/>
  <label for="name">0,1:</label>
  <input type="number" name="gyro_orient_1" id="gyro_orient_1" value="<?php echo $gyro_orient[1];?>"/>
  <label for="name">0,2:</label>
  <input type="number" name="gyro_orient_2" id="gyro_orient_2" value="<?php echo $gyro_orient[2];?>"/>
  <label for="name">1,0:</label>
  <input type="number" name="gyro_orient_3" id="gyro_orient_3" value="<?php echo $gyro_orient[3];?>"/>
  <label for="name">1,1:</label>
  <input type="number" name="gyro_orient_4" id="gyro_orient_4" value="<?php echo $gyro_orient[4];?>"/>
  <label for="name">1,2:</label>
  <input type="number" name="gyro_orient_5" id="gyro_orient_5" value="<?php echo $gyro_orient[5];?>"/>
  <label for="name">2,0:</label>
  <input type="number" name="gyro_orient_6" id="gyro_orient_6" value="<?php echo $gyro_orient[6];?>"/>
  <label for="name">2,1:</label>
  <input type="number" name="gyro_orient_7" id="gyro_orient_7" value="<?php echo $gyro_orient[7];?>"/>
  <label for="name">2,2:</label>
  <input type="number" name="gyro_orient_8" id="gyro_orient_8" value="<?php echo $gyro_orient[8];?>"/>
</div>
</div>
<input type="submit" value="Save"/>
    </div>

  </div>
