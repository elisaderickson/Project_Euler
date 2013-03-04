<?php

# http://projecteuler.net/problem=7
#By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
#What is the 10 001st prime number?


# starting with 10001 and adding a 0, used trial and error to find a number large enough to contain at least 10001 primes 
$biggest_number =  150010;

#fill an array with numbers
$numbers_array = range(2, $biggest_number);

#to collect primes
$primes_array = array();

#to collect nonprimes
$nonprimes_array = array();


#is the number evenly dividable by every number before
#it through the value of its own square root?

$this_long = count($numbers_array);

for ($i = 0; $i <= $this_long; $i++){
    
    $this_number = $numbers_array[$i];
    $square_number = sqrt($this_number);

    
    for ($counter = 2; $counter <= $square_number; $counter++){
        if($this_number % $counter === 0){
            #save nonprimes in an array
            array_push($nonprimes_array, $this_number);
            break;
            }
    }
    
}

#extract primes array by comparing nonprimes list to numbers list
$primes_array = array_values(array_diff($numbers_array, $nonprimes_array));

#10001st prime will be 10000 in the array
$answer = $primes_array[10000];
#display answer
echo $answer;


?>
