<?php
$page_id='camera';
?>
  <div data-role="page" id="<?php echo $page_id; ?>">
    <div data-role="header">
      <a href="#mainmenu" data-rel="back" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline">Go Back</a>
      <h1>Camera</h1>
    </div>

    <div role="main" class="ui-content">

<div data-role="collapsible" data-collapsed="true">
<h3>Settings</h3>
<label for="cam_seq">Reset camera sequencing</label>
<select name="cam_seq" id="cam_seq" data-role="slider">
	<option value="no">No</option>
	<option value="cam_reset">Reset</option>
</select> 
<input type="submit" value="Save"/>
</div>
    </div>

<?php
@include "cam_list.php";
?>
<br/><br/>
      <a href="delete.php?f=cam&hash=<?php echo $page_id; ?>" data-ajax="false" class="ui-btn ui-corner-all ui-btn-inline">Delete media</a>



  </div>
