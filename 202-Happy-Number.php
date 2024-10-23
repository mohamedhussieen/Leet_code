<?php
class Solution {
    // Method to determine if a number is happy
    public function isHappy($n) {
        $slow = $n;
        $fast = $this->getSumOfSquares($n);

        // Floyd's cycle detection algorithm (Tortoise and Hare approach)
        while ($fast != 1 && $slow != $fast) {
            $slow = $this->getSumOfSquares($slow); // Move slow by 1 step
            $fast = $this->getSumOfSquares($this->getSumOfSquares($fast)); // Move fast by 2 steps
        }

        return $fast == 1; // If fast reaches 1, then it's a happy number
    }

    // Helper function to calculate the sum of squares of digits
    private function getSumOfSquares($n) {
        $sum = 0;
        while ($n > 0) {
            $digit = $n % 10; // Extract the last digit
            $sum += $digit * $digit; // Add square of the digit to sum
            $n = intval($n / 10); // Remove the last digit
        }
        return $sum;
    }
}

// Example usage
$solution = new Solution();
$n1 = 19;
$n2 = 2;

echo \Is $n1 a happy number? \ . ($solution->isHappy($n1) ? \true\ : \false\) . \\
\; // Output: true
echo \Is $n2 a happy number? \ . ($solution->isHappy($n2) ? \true\ : \false\) . \\
\; // Output: false
?>
