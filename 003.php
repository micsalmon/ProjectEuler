<?php

/**
 * LARGEST PRIME FACTOR
 *
 * The prime factors of 13195 are 5, 7, 13, and 29. What is the largest prime 
 * factor of the number 600851475143 ?
 */
 
 function largestPrime($num) {
	 $x = 2;
	 
	 // Checks if $num is divisible by 2 and keeps dividing 
	 // it by 2 until it cannot divide anymore
	 while($num % $x == 0) {
		 $num /= $x;
	 }
	 
	 // Checks to see if $num = 2 and if not, it makes $x = 3
	 if ($num != 1) {
		 $x++;
	 } else {
		 return $x;
	 }
	 
	 // Finds the highest prime number. It starts with the number 3 
	 // and increments by 2 until the highest prime number is found
	 while ($num / $x != 1) {
		 while ($num % $x == 0) {
			 $num /= $x;
		 }
		 $x += 2;
	 }
	 return $x;
 }
 echo largestPrime(600851475143) . "\n";
	
?>