class Solution
{

    function strStr(string $haystack, string $needle): int {
        $pos = strpos($haystack, $needle);
        return $pos === false ? -1 : $pos;
    }
}