class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        if(strlen($s) != strlen($t))
            return false;

        $arS = [];
        $arT = [];

        for($i = 0; $i < strlen($s); $i++)
        {
            if((isset($arS[$s[$i]]) && $arS[$s[$i]] != $t[$i]) || (isset($arT[$t[$i]]) && $arT[$t[$i]] != $s[$i]))
                return false;

            $arS[$s[$i]] = $t[$i];
            $arT[$t[$i]] = $s[$i];
        }

        return true;
    }
}