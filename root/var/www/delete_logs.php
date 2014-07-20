<?php
@include('config.php');

$f = $_GET['f'];
$mask = $log_path.$f;

array_map( 'unlink', glob($mask) );

header('Location: '.$_SERVER['HTTP_REFERER']);
?>
