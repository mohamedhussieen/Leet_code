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
     * @return Boolean
     */
    function isSymmetric($root) {
        if ($root->left === null && $root->right === null) {
            return true;
        }

        if ($root->left->val !== $root->right->val) {
            return false;
        }

        $leftRoot = clone $root;
        $leftRoot->left = $root->left->left;
        $leftRoot->right = $root->right->right;

        $rightRoot = clone $root;
        $rightRoot->left = $root->left->right;
        $rightRoot->right = $root->right->left;

        return $this->isSymmetric($leftRoot) && $this->isSymmetric($rightRoot);
    }
}