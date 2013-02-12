<?php

    $fib_array = array(0, 1, 2);
    
  do {
    $i = count($fib_array);
    $number1 = $fib_array[$i - 1];
    $number2 = $fib_array[$i - 2];
    $new_number = $number1 + $number2;
    array_push($fib_array, $new_number);
  } while ($new_number < 4000000);
  
  for ($i = 0; $i < count($fib_array); $i++){
    $this_number = $fib_array[$i];
    if ($this_number % 2 === 0){
        $sum+= $this_number;
    }
  }
  
  echo $sum;

  
  
?>