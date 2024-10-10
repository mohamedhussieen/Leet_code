class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) { return array_reduce(range(1, strlen(current($strs))), function($success, $i) use ($strs) { return preg_match_all('/(\\b|\\s)' . preg_quote($prefix = substr(current($strs), 0, $i), '/') . '\\w*/m', implode(\ \, $strs)) == count($strs) ? $prefix : $success; }, \\); }

}