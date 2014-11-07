<?php
error_reporting(E_ALL);
ini_set('display_errors', True);
@include('config.php');

$f = $_GET['f'];

if ($f=='logs') {
	$mask = $log_path.'*.log';
	array_map( 'unlink', glob($mask) );
}

if ($f=='cam') {
	$mask = $log_path.'*.jpg';
	array_map( 'unlink', glob($mask) );
	$mask = $log_path.'*.h264';
	array_map( 'unlink', glob($mask) );
	$mask = $log_path.'*.mp4';
	array_map( 'unlink', glob($mask) );
}
header('Location: '.$_SERVER['HTTP_REFERER'].'#'.$_GET['hash']);
?>
