<?php

/**
 * LARGEST PALINDROME PRODUCT
 *
 * A palindromic number reads the same both ways. The largest palindrome made
 * from the product of two 2-digit numbers is 9009 = 91 × 99.
 *
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

// Reverses any number 
function reverseNum($num) {
    $reverse = 0;
    $remainder = 0;

    while ($num > 1)
    {
       $remainder = $reverse * 10;
       $reverse = $remainder + $num % 10;
       $num = $num / 10;
    }
    return $reverse;
}

// Checks if reverseNum() is a palindrome number 
function isPalindrome($num) {
    if (reverseNum($num) == $num) {
        return 1;
    } else {
        return 0;
    }
}

// Finds the largest palindrome number using isPalindrome() and certain $x and $y limits
function largestPalindrome() {
    $largest = 0;
    for ($x = 500; $x <= 999; $x++) {
        for ($y = 500; $y <= 999; $y++) {
            if (isPalindrome($x * $y)) {
                if ($largest < $x * $y) {
                    $largest = $x * $y;
                }
            }
        }
    }
    return $largest;
}
echo largestPalindrome() . "\n";

?>