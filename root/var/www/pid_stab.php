<?php
$page_id='pid_stab';
?>
  <div data-role="page" id="<?php echo $page_id; ?>">
    <div data-role="header">
      <a href="#pid" data-rel="back" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline">Go Back</a>
      <h1>Stab PID</h1>
    </div>

    <div role="main" class="ui-content">
<div data-role="collapsible" data-collapsed="false">
<h3>Roll / Pitch</h3>
<div class="ui-field-contain">
  <label for="c8_2">P:</label>
  <input type="number" name="c8_2" id="c8_2" value="<?php echo $c[8][2];?>"/>
  <label for="c8_3">I:</label>
  <input type="number" name="c8_3" id="c8_3" value="<?php echo $c[8][3];?>"/>
  <label for="c8_4">D:</label>
  <input type="number" name="c8_4" id="c8_4" value="<?php echo $c[8][4];?>"/>
  <label for="c8_0">Max value:</label>
  <input type="number" name="c8_0" id="c8_0" value="<?php echo $c[8][0];?>"/>
  <label for="c8_1">Max Ki term:</label>
  <input type="number" name="c8_1" id="c8_1" value="<?php echo $c[8][1];?>"/>
</div>
</div>
<div data-role="collapsible" data-collapsed="false">
<h3>Yaw</h3>
<div class="ui-field-contain">
  <label for="c7_2">P:</label>
  <input type="number" name="c7_2" id="c7_2" value="<?php echo $c[7][2];?>"/>
  <label for="c7_3">I:</label>
  <input type="number" name="c7_3" id="c7_3" value="<?php echo $c[7][3];?>"/>
  <label for="c7_4">D:</label>
  <input type="number" name="c7_4" id="c7_4" value="<?php echo $c[7][4];?>"/>
  <label for="c7_0">Max value:</label>
  <input type="number" name="c7_0" id="c7_0" value="<?php echo $c[7][0];?>"/>
  <label for="c7_1">Max Ki term:</label>
  <input type="number" name="c7_1" id="c7_1" value="<?php echo $c[7][1];?>"/>
</div>
</div>
<input type="submit" value="Save"/>
    </div>

  </div>
