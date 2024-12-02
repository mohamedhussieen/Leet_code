/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function countNodes($root) {
        $total=!empty($root)?1:0;
        
        if(!empty($root->right))
            $total += $this->countNodes($root->right);
        if(!empty($root->left))
            $total += $this->countNodes($root->left);
        
        return $total;
    }
}