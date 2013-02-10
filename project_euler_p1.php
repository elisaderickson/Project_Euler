<?php
$totals = array();
for ($i = 999; $i > 0; $i--){
    if ($i % 3 === 0 or $i % 5 === 0 ){
    array_push($totals, $i);}}
    
    
print array_sum($totals);
?>