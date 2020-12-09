<?php

/**
 * 173. Binary Search Tree Iterator
 * https://leetcode.com/problems/binary-search-tree-iterator/
 *
 * https://leetcode.com/problems/binary-search-tree-iterator/discuss/966100/PHP-JavaScript-Swift-Stacks-faster-100-O(1)-time-O(h)-space-explained
 */

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
class BSTIterator
{
    private $tree = null;
    private $parents = [];

    /**
     * @param TreeNode $root
     */
    function __construct($root)
    {
        $this->tree = $root;
        while ($root) {
            $this->parents[] = $root;
            $root = $root->left;
        }
    }

    /**
     * @return Integer
     */
    function next()
    {
        $cur = array_pop($this->parents);
        $val = $cur->val;
        if ($cur->right) {
            $cur = $cur->right;
            while ($cur) {
                $this->parents[] = $cur;
                $cur = $cur->left;
            }
        }
        return $val;
    }

    /**
     * @return Boolean
     */
    function hasNext()
    {
        return count($this->parents) > 0;
    }
}

/**
 * Your BSTIterator object will be instantiated and called as such:
 * $obj = BSTIterator($root);
 * $ret_1 = $obj->next();
 * $ret_2 = $obj->hasNext();
 */