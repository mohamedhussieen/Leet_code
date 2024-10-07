class Solution {

    function isSubsequence($s, $t) {
        $s_len = strlen($s);
        if ($s_len == 0) return true;

        $j=0;
        for($i=0;$i<strlen($t);$i++){
            if ($s[$j] == $t[$i]){
                if(++$j == $s_len) return true;
            }
        }
        return false;
    }
}