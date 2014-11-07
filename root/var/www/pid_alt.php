<?php
$page_id='pid_alt';
?>
  <div data-role="page" id="<?php echo $page_id; ?>">
    <div data-role="header">
      <a href="#pid" data-rel="back" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline">Go Back</a>
      <h1>Altitude PID</h1>
    </div>

    <div role="main" class="ui-content">
<p>WORK IN PROGRESS!</p>
<label for="c13_1">Baro coefficient (0-1000) higher = baro less significant</label>
<input type="number" name="c13_1" id="c13_1" value="<?php echo $c[13][1];?>"/>
<div data-role="collapsible" data-collapsed="false">
<h3>Position (height)</h3>
<div class="ui-field-contain">
  <label for="c10_2">P:</label>
  <input type="number" name="c10_2" id="c10_2" value="<?php echo $c[10][2];?>"/>
  <label for="c10_3">I:</label>
  <input type="number" name="c10_3" id="c10_3" value="<?php echo $c[10][3];?>"/>
  <label for="c10_4">D:</label>
  <input type="number" name="c10_4" id="c10_4" value="<?php echo $c[10][4];?>"/>
  <label for="c10_0">Max value:</label>
  <input type="number" name="c10_0" id="c10_0" value="<?php echo $c[10][0];?>"/>
  <label for="c10_1">Max Ki term:</label>
  <input type="number" name="c10_1" id="c10_1" value="<?php echo $c[10][1];?>"/>
</div>
</div>
<div data-role="collapsible" data-collapsed="false">
<h3>Velocity</h3>
<div class="ui-field-contain">
  <label for="c11_2">P:</label>
  <input type="number" name="c11_2" id="c11_2" value="<?php echo $c[11][2];?>"/>
  <label for="c11_3">I:</label>
  <input type="number" name="c11_3" id="c11_3" value="<?php echo $c[11][3];?>"/>
  <label for="c11_4">D:</label>
  <input type="number" name="c11_4" id="c11_4" value="<?php echo $c[11][4];?>"/>
  <label for="c11_0">Max value:</label>
  <input type="number" name="c11_0" id="c11_0" value="<?php echo $c[11][0];?>"/>
  <label for="c11_1">Max Ki term:</label>
  <input type="number" name="c11_1" id="c11_1" value="<?php echo $c[11][1];?>"/>
</div>
</div>
<div data-role="collapsible" data-collapsed="false">
<h3>Acceleration</h3>
<div class="ui-field-contain">
  <label for="c12_2">P:</label>
  <input type="number" name="c12_2" id="c12_2" value="<?php echo $c[12][2];?>"/>
  <label for="c12_3">I:</label>
  <input type="number" name="c12_3" id="c12_3" value="<?php echo $c[12][3];?>"/>
  <label for="c12_4">D:</label>
  <input type="number" name="c12_4" id="c12_4" value="<?php echo $c[12][4];?>"/>
  <label for="c12_0">Max value:</label>
  <input type="number" name="c12_0" id="c12_0" value="<?php echo $c[12][0];?>"/>
  <label for="c12_1">Max Ki term:</label>
  <input type="number" name="c12_1" id="c12_1" value="<?php echo $c[12][1];?>"/>
</div>
</div>
<input type="submit" value="Save"/>
    </div>

  </div>
