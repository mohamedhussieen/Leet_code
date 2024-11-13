class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $hashMap = [];
        foreach($nums as $key => $val) {
            if(isset($hashMap[$val])) {
                if($key - $hashMap[$val] <= $k) {
                    return true;
                }
                $hashMap[$val] = $key;
            } else {
                $hashMap[$val] = $key;
            }
        }
        return false;
    }
}