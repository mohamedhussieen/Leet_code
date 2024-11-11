class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
\t
        // An empty array will be indexed by magazine symbols set mapped to its frequency.
\t\t// key = symbol, value = symbol's frequency in magazine string.
\t\t// The casket size is the size of the magazine string unique symbols set,
\t\t// but maximum 26 lowercase English letters.
\t\t
\t\t$casket = [];
        
\t\t// First pass with N iterations through the magazine string fills the casket's cells.
\t\t// Reverse pass order for single string length calculation.
\t\t
        for ($i = strlen($magazine) - 1; $i >= 0 ; $i--) {
\t\t
\t\t    // $magazine[$i] is i-th symbol of the string and it is index (key) of the casket's cell.
\t\t\t
            $casket[$magazine[$i]]++;
        }
        
\t\t// Second pass with maximum M iterations (in case ransomNote can be constructed)
\t\t// through ransomNote string raids the casket's cells. 
\t\t// Reverse pass order for single string length calculation.
\t\t
        for ($j = strlen($ransomNote) - 1; $j >= 0 ; $j--) {
\t\t
\t\t    // The emptiness the letter's cell of the casket (in case of a lack of the required to
\t\t\t// type symbol) causes the early breaking of the iteration and the return of a
\t\t\t// negative result. Decrement is performed after checking!
\t\t\t
            if ($casket[$ransomNote[$j]]-- == 0) return false;
        }
        
\t\t// The string has successfully typed (typesetting symbols were presented enough).
        return true;
    }
}