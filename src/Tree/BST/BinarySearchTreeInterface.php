<?php
declare(strict_types=1);

namespace AlgoStruct\Tree\BST;

use AlgoStruct\Tree\Node\BinaryNodeInterface;
use AlgoStruct\Tree\Node\NodeInterface;

/*
 * Binary Search Tree services.
 */

interface BinarySearchTreeInterface
{

    public function search(NodeInterface $node): ?NodeInterface;

    public function min(): ?NodeInterface;

    public function max(): ?NodeInterface;

    public function predecessor(): ?NodeInterface;

    public function successor(): ?NodeInterface;

    /**
     * Perform inorder-tree-walk, returning the node's value at each step.
     *
     * @param \AlgoStruct\Tree\Node\BinaryNodeInterface $node
     *
     * @return string
     */
    public function print(BinaryNodeInterface $node);
}