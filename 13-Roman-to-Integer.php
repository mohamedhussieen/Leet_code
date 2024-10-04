class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $total = 0;
        $prevValue = 0;

        for ($i = strlen($s) - 1; $i >= 0; $i--) {
            $currentValue = 0;
            switch ($s[$i]) {
                case 'I':
                    $currentValue = 1;
                    break;
                case 'V':
                    $currentValue = 5;
                    break;
                case 'X':
                    $currentValue = 10;
                    break;
                case 'L':
                    $currentValue = 50;
                    break;
                case 'C':
                    $currentValue = 100;
                    break;
                case 'D':
                    $currentValue = 500;
                    break;
                case 'M':
                    $currentValue = 1000;
                    break;
            }

            // Check if the current value is less than the previous value (indicating a subtractive pair)
            // If true, subtract the current value from the total; otherwise, add it to the total
            $total += ($currentValue < $prevValue) ? -$currentValue : $currentValue;

            // Update the previous value for the next iteration
            $prevValue = $currentValue;
        }

        return $total;
    }
}