<?php

$biggest_number =  150010;

$numbers_array = range(2, $biggest_number);
$primes_array = array();
$nonprimes_array = array();


//is the number evenly dividable by every number before
//it through the value of its own square root?

$this_long = count($numbers_array);

for ($i = 0; $i <= $this_long; $i++){
    
    $this_number = $numbers_array[$i];
    $square_number = sqrt($this_number);

    
    for ($counter = 2; $counter <= $square_number; $counter++){
        if($this_number % $counter === 0){
            array_push($nonprimes_array, $this_number);
            break;
            }
    }
    
}

$primes_array = array_values(array_diff($numbers_array, $nonprimes_array));


$answer = $primes_array[10000];
echo $answer;


?>
