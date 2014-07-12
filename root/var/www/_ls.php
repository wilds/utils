<html>
<head>
<title>DEBUG</title>
</head>
<body>

<?php
$ff = $_GET['f'];
readfile("/var/local/".$ff);

?>

</body>
</html>
