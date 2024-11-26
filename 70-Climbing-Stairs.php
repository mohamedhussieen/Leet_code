class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        //create empty array
        $res = array_fill(1, $n, 0);

        //fill first 2 elements
        $res[1] = 1;
        $res[2] = 2;

        //if count of stairs <= 2 return
        if($n <= 2) {
            return $res[$n];
        }

        //for stairs > find f(n) = F(n-1) + f(n-2)
        for($i = 3; $i <= $n; $i++) {
            $res[$i] = $res[$i - 1] + $res[$i - 2];
        }

        return $res[$n];
    }
}