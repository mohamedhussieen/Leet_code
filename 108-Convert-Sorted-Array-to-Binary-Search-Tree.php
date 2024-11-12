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
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {


        if($nums == null) { return null; }

        $n = count($nums);

        $mid = (int)($n/2);

        $treeNode = new TreeNode($nums[$mid]);

        $treeNode->right = $this->sortedArrayToBST(array_slice($nums, $mid + 1));
        $treeNode->left = $this->sortedArrayToBST(array_slice($nums, 0 , $mid));


        return $treeNode;
        
        
    }
}