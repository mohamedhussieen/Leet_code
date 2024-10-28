class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcd($a, $b){
        return ($b==0) ? $a : $this->gcd($b, $a % $b);
    }
    function gcdOfStrings($str1, $str2) {
        if(empty($str1) || empty($str2)) return '';
        if($str1.$str2 !== $str2.$str1) return '';

            $count1 = strlen($str1);
            $count2 = strlen($str2);
            $result = $this->gcd($count1, $count2);
            
            $str = substr($str1,0, $result);
            return $str;
        }
    }