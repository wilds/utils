<?php
$handle = fopen("/var/local/rpicopter.config", "r");
$c = [];

array_push($c,fscanf($handle,"%s\t%s\n"));
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
fclose($handle);

?>
