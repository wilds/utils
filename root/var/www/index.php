<html>
<head>
<title>My Quadcopter</title>
</head>
<body>

<?php
$handle = fopen("/var/local/rpicopter.config", "r+w");
$c = [];

array_push($c,fscanf($handle,"%s\t%s\n"));
array_push($c,fscanf($handle,"%s\t%s\t%s\n"));
array_push($c,fscanf($handle,"%s\t%s\t%s\n"));
array_push($c,fscanf($handle,"%s\t%s\t%s\t%s\t%s\n"));
array_push($c,fscanf($handle,"%s\t%s\t%s\t%s\t%s\n"));
array_push($c,fscanf($handle,"%s\t%s\t%s\t%s\t%s\n"));
array_push($c,fscanf($handle,"%s\t%s\t%s\t%s\t%s\n"));
array_push($c,fscanf($handle,"%s\t%s\t%s\t%s\t%s\n"));
array_push($c,fscanf($handle,"%s\t%s\t%s\t%s\t%s\n"));
array_push($c,fscanf($handle,"%s\t%s\t%s\t%s\t%s\n"));
array_push($c,fscanf($handle,"%s\t%s\t%s\t%s\t%s\n"));
if (isset($_POST['rp'])) {
$c[4][2] = $_POST['rp'];
$c[5][2] = $_POST['rp'];
$c[4][3] = $_POST['ri'];
$c[5][3] = $_POST['ri'];
$c[4][4] = $_POST['rd'];
$c[5][4] = $_POST['rd'];
$c[7][2] = $_POST['sp'];
$c[8][2] = $_POST['sp'];
$c[7][3] = $_POST['si'];
$c[8][3] = $_POST['si'];
$c[7][4] = $_POST['sd'];
$c[8][4] = $_POST['sd'];

$c[3][2] = $_POST['ryp'];
$c[3][3] = $_POST['ryi'];
$c[3][4] = $_POST['ryd'];
$c[6][2] = $_POST['syp'];
$c[6][3] = $_POST['syi'];
$c[6][4] = $_POST['syd'];
rewind($handle);

for ($i=0;$i<count($c);$i++) {
    for ($j=0;$j<count($c[$i]);$j++) 
        fprintf($handle,"%s\t",$c[$i][$j]);
    fprintf($handle,"\n");
}

fclose($handle);
shell_exec("killall avrcontroller");
}
else fclose($handle);

?>

<form method="post" action="index.php">
Rate_P <input type="text" name="rp" value="<?php echo $c[4][2]; ?>"><br/>
Rate_I <input type="text" name="ri" value="<?php echo $c[4][3]; ?>"><br/>
Rate_D <input type="text" name="rd" value="<?php echo $c[4][4]; ?>"><br/><br/><br/>
Stab_P <input type="text" name="sp" value="<?php echo $c[7][2]; ?>"><br/>
Stab_I <input type="text" name="si" value="<?php echo $c[7][3]; ?>"><br/>
Stab_D <input type="text" name="sd" value="<?php echo $c[7][4]; ?>"><br/><br/><br/>
Rate_Y P <input type="text" name="ryp" value="<?php echo $c[3][2]; ?>"><br/>
Rate_Y_I <input type="text" name="ryi" value="<?php echo $c[3][3]; ?>"><br/>
Rate_Y_D <input type="text" name="ryd" value="<?php echo $c[3][4]; ?>"><br/><br/><br/>
Stab_Y_P <input type="text" name="syp" value="<?php echo $c[6][2]; ?>"><br/>
Stab_Y_I <input type="text" name="syi" value="<?php echo $c[6][3]; ?>"><br/>
Stab_Y_D <input type="text" name="syd" value="<?php echo $c[6][4]; ?>"><br/>
<input type="reset" value="Reset">
<input type="submit" value="Submit"><br/>
</form>

<pre>
<?php
for ($i=0;$i<count($c);$i++) {
    for ($j=0;$j<count($c[$i]);$j++) 
        echo $c[$i][$j] . "\t";
    echo "<br/>";
}
?>
</pre>
</body>
</html>
