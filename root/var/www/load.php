<?php
error_reporting(E_ALL);
ini_set('display_errors', True);
$f = '/var/local/rpicopter.config';
$c = [];

function csv_to_array($filename='', $delimiter=',')
{
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
		array_push($data,$row);
        }
        fclose($handle);
    }
    return $data;
}

$c = csv_to_array($f,"\t");

/*
$handle = fopen($f, "r");
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
array_push($c,fscanf($handle,"%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\n"));
fclose($handle);
*/
?>
