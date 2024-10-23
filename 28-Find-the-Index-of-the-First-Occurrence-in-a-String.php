class Solution
{
    public function strStr(string $haystack, string $needle): int
    {
        $needleLength = strlen($needle);
        for ($i = 0; $i <= strlen($haystack) - $needleLength; $i++) {
            $substr = substr($haystack, $i, $needleLength);
            if ($substr === $needle) {
                return $i;
            }
        }

        return -1;
    }
}