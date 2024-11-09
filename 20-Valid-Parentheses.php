class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s){ 
        return empty(array_reduce(str_split($s), function($stack, $c, $map = [')' => '(', ']' => '[', '}' => '{']){ 
            return array_key_exists($c, $map) && end($stack) == $map[$c] ? array_slice($stack, 0, -1) : array_merge($stack, [$c]); 
        }, [])); 
    }
}