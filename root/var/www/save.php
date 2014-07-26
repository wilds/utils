<?php
$handle = fopen("/var/local/rpicopter.config", "w");
for ($i=0;$i<15;$i++) {                    
    for ($j=0;$j<count($c[$i]);$j++)       
        fprintf($handle,"%s\t",$c[$i][$j]);
    fprintf($handle,"\n");
}                                   
                                    
fclose($handle); 
?>
