<?php
session_start();
@include("ps3load.php");

if (isset($_GET['tag'])) {
	$hash = $_GET['tag'];
	$_SESSION['hash']=$hash;
	exit(0);
}

//Cam
if ($_POST['cam_seq']=='cam_reset') $c[0][2] = 0;

//Log
if ($_POST['log_seq']=='log_reset') $c[0][0] = 0;
$c[0][1] = $_POST['c0_1'];

//Other
//controller settings
$c[2][0] = $_POST['c2_0'];
$c[2][1] = $_POST['c2_1'];
$c[2][2] = $_POST['c2_2'];
$c[3][0] = $_POST['c3_0'];
$c[3][1] = $_POST['c3_1'];
$c[3][2] = $_POST['c3_2'];
//ESC Min/Max
$c[1][0] = $_POST['c1_0'];
$c[1][1] = $_POST['c1_1'];

for ($i=0;$i<count($c);$i++) {                    
    for ($j=0;$j<count($c[$i]);$j++)       
	if (is_numeric($c[$i][$j])==FALSE) {
		echo $i." ".$j." ".$c[$i][$j]."\n";
		die("Variable incorrect. Will NOT save.");
		exit(0);
	} 
}

$handle = fopen("/var/local/ps3.config", "w");
for ($i=0;$i<count($c);$i++) {                    
    for ($j=0;$j<count($c[$i]);$j++)       
        fprintf($handle,"%s\t",$c[$i][$j]);
    fprintf($handle,"\n");
}                                   
                                    
fclose($handle); 

shell_exec("killall ps3controller");

header('Location: '.$_SERVER['HTTP_REFERER'] . '#' . $_SESSION['hash']);
?>
