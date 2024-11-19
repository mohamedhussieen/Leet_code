class Solution {
    public List<Double> averageOfLevels(TreeNode root) {
        Queue<TreeNode> q = new LinkedList<>();
        List<Double> l = new ArrayList<>();
        q.add(root);

        while(!q.isEmpty()){
            int size = q.size();
            long all = 0;
            int count = 0;

            for (int i = 0; i < size; i++) {
                TreeNode tree = q.remove();
                all += tree.val;
                count++;

                if (tree.left != null) {
                    q.add(tree.left);
                }
                if (tree.right != null) {
                    q.add(tree.right);
                }
            }
            l.add((double) all / count);
        }
        return l;
    }
}