<!doctype html>
<?php
session_start();
@include "load.php";
?>
<html>
<head>
  <title>RPICopter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="jquery/jquery.mobile-1.4.3.min.css" />
  <script src="jquery/jquery-1.11.1.min.js"></script>
  <script src="jquery/jquery.mobile-1.4.3.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(window).bind('hashchange', function() {
            var hash = window.location.hash.substring(1);
            $.get('save.php', { tag: hash },
                function(data) { $('#tag').html(data); }
            );
        });
    });
</script>

</head>
<body>
<form data-ajax="false" method="post" action="save.php">
  <div data-role="page" id="mainmenu">
    <div data-role="header">
      <h1>Main menu</h1>
    </div>
    <div role="main" class="ui-content">
      <a href="#pid" data-transition="slide" class="ui-btn ui-corner-all">PIDs</a>
      <a href="#esc" data-transition="slide" class="ui-btn ui-corner-all">ESC</a>
      <a href="#other" data-transition="slide" class="ui-btn ui-corner-all">Other</a>
      <a href="#logs" data-transition="slide" class="ui-btn ui-corner-all">Logs</a>
      <a href="#camera" data-transition="slide" class="ui-btn ui-corner-all">Camera</a>
<div data-role="collapsible" data-collapsed="true">
<h3>Debug</h3>
<pre>
<?php
readfile("/var/local/rpicopter.config");
?>
</pre>
</div>
    </div>
  </div>
<?php
@include "pid.php";
@include "esc.php";
@include "other.php";
@include "log.php";
@include "camera.php";
?>
</form>
</body>
</html>
