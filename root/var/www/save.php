<?php
session_start();
@include("load.php");

if (isset($_GET['tag'])) {
	$hash = $_GET['tag'];
	$_SESSION['hash']=$hash;
	exit(0);
}

if ($_POST['cmd']!='') {
header('Location: '.$_SERVER['HTTP_REFERER'].'#'.$_POST['hash']);
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
 //mpu addr
$c[16][0] = $_POST['c16_0'];

//Altitude PID
$c[10][0] = $_POST['c10_0'];
$c[10][1] = $_POST['c10_1'];
$c[10][2] = $_POST['c10_2'];
$c[10][3] = $_POST['c10_3'];
$c[10][4] = $_POST['c10_4'];

$c[11][0] = $_POST['c11_0'];
$c[11][1] = $_POST['c11_1'];
$c[11][2] = $_POST['c11_2'];
$c[11][3] = $_POST['c11_3'];
$c[11][4] = $_POST['c11_4'];

$c[12][0] = $_POST['c12_0'];
$c[12][1] = $_POST['c12_1'];
$c[12][2] = $_POST['c12_2'];
$c[12][3] = $_POST['c12_3'];
$c[12][4] = $_POST['c12_4'];

//baro coefficient
$c[13][1] = $_POST['c13_1'];
//Stab PID
$c[8][0] = $_POST['c8_0'];
$c[8][1] = $_POST['c8_1'];
$c[8][2] = $_POST['c8_2'];
$c[8][3] = $_POST['c8_3'];
$c[8][4] = $_POST['c8_4'];

$c[9][0] = $_POST['c8_0'];
$c[9][1] = $_POST['c8_1'];
$c[9][2] = $_POST['c8_2'];
$c[9][3] = $_POST['c8_3'];
$c[9][4] = $_POST['c8_4'];

$c[7][0] = $_POST['c7_0'];
$c[7][1] = $_POST['c7_1'];
$c[7][2] = $_POST['c7_2'];
$c[7][3] = $_POST['c7_3'];
$c[7][4] = $_POST['c7_4'];

//Rate PID
$c[4][0] = $_POST['c4_0'];
$c[4][1] = $_POST['c4_1'];
$c[4][2] = $_POST['c4_2'];
$c[4][3] = $_POST['c4_3'];
$c[4][4] = $_POST['c4_4'];

$c[5][0] = $_POST['c5_0'];
$c[5][1] = $_POST['c5_1'];
$c[5][2] = $_POST['c5_2'];
$c[5][3] = $_POST['c5_3'];
$c[5][4] = $_POST['c5_4'];

$c[6][0] = $_POST['c5_0'];
$c[6][1] = $_POST['c5_1'];
$c[6][2] = $_POST['c5_2'];
$c[6][3] = $_POST['c5_3'];
$c[6][4] = $_POST['c5_4'];

$c[13][0] = $_POST['c13_0'];


//ESC Min/Max
$c[1][0] = $_POST['c1_0'];
$c[1][1] = $_POST['c1_1'];
$c[1][2] = $_POST['c1_2'];

//ESC Pin
$c[15][0] = $_POST['c15_0'];
$c[15][1] = $_POST['c15_1'];
$c[15][2] = $_POST['c15_2'];
$c[15][3] = $_POST['c15_3'];

//MPU orientation
$c[14][0] = $_POST['c14_0'];
$c[14][1] = $_POST['c14_1'];
$c[14][2] = $_POST['c14_2'];
$c[14][3] = $_POST['c14_3'];
$c[14][4] = $_POST['c14_4'];
$c[14][5] = $_POST['c14_5'];
$c[14][6] = $_POST['c14_6'];
$c[14][7] = $_POST['c14_7'];
$c[14][8] = $_POST['c14_8'];

$handle = fopen("/var/local/rpicopter.config", "w");
for ($i=0;$i<count($c);$i++) {                    
    for ($j=0;$j<count($c[$i]);$j++)       
        fprintf($handle,"%s\t",$c[$i][$j]);
    fprintf($handle,"\n");
}                                   
                                    
fclose($handle); 


shell_exec("killall avrcontroller");

header('Location: '.$_SERVER['HTTP_REFERER'] . '#' . $_SESSION['hash']);
?>
