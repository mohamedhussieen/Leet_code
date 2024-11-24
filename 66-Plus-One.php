class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $lastIndex = count($digits) - 1; 

        for ($i = $lastIndex; $i >= 0; $i--) {

            if ($digits[$i] < 9) {
                $digits[$i] += 1;
                return $digits;
            }

            $digits[$i] = 0;
        }

        array_unshift($digits, 1);

        return $digits;
    }
}