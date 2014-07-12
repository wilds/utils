<html>
<head>
<title>DEBUG</title>
</head>
<body>

<?php
$dir    = '/var/local/';
$files1 = scandir($dir);

for ($i=0;$i<count($files1);$i++) {
    echo "<a href='_ls.php?f=".$files1[$i]."'>".$files1[$i] . "</a><br/>";
}

?>

</body>
</html>
