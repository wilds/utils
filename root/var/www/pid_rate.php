<?php
$page_id='pid_rate';
?>
  <div data-role="page" id="<?php echo $page_id; ?>">
    <div data-role="header">
      <a href="#pid" data-rel="back" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline">Go Back</a>
      <h1>Rate PID</h1>
    </div>

    <div role="main" class="ui-content">
<div class="ui-field-contain">
  <label for="c13_0">Acro_P:</label>
  <input type="number" name="c13_0" id="c13_0" value="<?php echo $c[13][0];?>"/>
</div>
<div data-role="collapsible" data-collapsed="false">
<h3>Roll / Pitch</h3>
<div class="ui-field-contain">
  <label for="c5_2">P:</label>
  <input type="number" name="c5_2" id="c5_2" value="<?php echo $c[5][2];?>"/>
  <label for="c5_3">I:</label>
  <input type="number" name="c5_3" id="c5_3" value="<?php echo $c[5][3];?>"/>
  <label for="c5_4">D:</label>
  <input type="number" name="c5_4" id="c5_4" value="<?php echo $c[5][4];?>"/>
  <label for="c5_0"><a href="#p_pid_max" data-rel="popup">Max value:</a></label>
  <input type="number" name="c5_0" id="c5_0" value="<?php echo $c[5][0];?>"/>
  <label for="c5_1"><a href="#p_pid_imax" data-rel="popup">Max Ki term:</a></label>
  <input type="number" name="c5_1" id="c5_1" value="<?php echo $c[5][1];?>"/>
</div>
<div style="text-align: center;"><p>For asymetric quadcopters please edit config file manually.</p></div>
</div>
<div data-role="collapsible" data-collapsed="false">
<h3>Yaw</h3>
<div class="ui-field-contain">
  <label for="c4_2">P:</label>
  <input type="number" name="c4_2" id="c4_2" value="<?php echo $c[4][2];?>"/>
  <label for="c4_3">I:</label>
  <input type="number" name="c4_3" id="c4_3" value="<?php echo $c[4][3];?>"/>
  <label for="c4_4">D:</label>
  <input type="number" name="c4_4" id="c4_4" value="<?php echo $c[4][4];?>"/>
  <label for="c4_0"><a href="#p_pid_max" data-rel="popup">Max value:</a></label>
  <input type="number" name="c4_0" id="c4_0" value="<?php echo $c[4][0];?>"/>
  <label for="c4_1"><a href="#p_pid_imax" data-rel="popup">Max Ki term:</a></label>
  <input type="number" name="c4_1" id="c4_1" value="<?php echo $c[4][1];?>"/>
</div>
</div>
<input type="submit" value="Save"/>
    </div>

<div data-role="popup" id="p_pid_max">
  <p>Rate pid will be constraint by this value. Default: 500</p>
</div>
<div data-role="popup" id="p_pid_imax">
  <p>Ki term of Rate pid will be limitted to this value. Default: 50</p>
</div>

  </div>
