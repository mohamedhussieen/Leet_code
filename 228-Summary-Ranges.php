class Solution {

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    function summaryRanges($nums) {
        if (empty($nums)) {
            return [];
        }
        $result = [];
        $start = $prev = array_shift($nums);
    
        foreach ($nums as $num) {
            if ($num - $prev === 1) {
                $prev = $num;
            } else {
                if ($start !== $prev) {
                    $result[] = \{$start}->$prev\;
                } else {
                    $result[] = \{$start}\;
                }
                $start = $prev = $num;
            }
        }
        if ($start !== $prev) {
            $result[] = \{$start}->$prev\;
        } else {
            $result[] = \{$start}\;
        }

        return $result;
    }
}