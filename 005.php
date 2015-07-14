<?php

/**
 * SMALLEST MULTIPLE
 *
 * 2520 is the smallest number that can be divided by each of the numbers
 * from 1 to 10 without any remainder. 
 *
 * What is the smallest positive number that is evenly divisible by all
 * of the numbers from 1 to 20 ?
 */

$num = 1;	
for ($x = 1; $x <= 20; $x++) {
	while ($num % $x == 0) {
		$num++;
	}
}

?>