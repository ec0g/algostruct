<?php
declare(strict_types=1);

namespace AlgoStruct\Tests\Unit\Tree;

use AlgoStruct\Tree\BST\BinarySearchTree;
use AlgoStruct\Tree\BST\BinarySearchTreeInterface;
use AlgoStruct\Tree\Node\BstNode;
use AlgoStruct\Tree\Node\NodeInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class BinarSearchTreeTest
 *
 * @package AlgoStruct\Tests\Unit\Tree
 *
 * @group bst
 */
final class BinarSearchTreeTest extends TestCase
{

    protected function buildTree(array $data = []): BinarySearchTree
    {
        $tree = new BinarySearchTree();

        foreach ($data as $value) {
            $node = null;
            $node = BstNode::create()->setValue($value);
            $tree->insert($node);
        }

        return $tree;
    }

    public function testGetDefaultRoot(): void
    {
        $tree = new BinarySearchTree();

        $this->assertInstanceOf('AlgoStruct\Tree\BST\BinarySearchTree', $tree,
            "Successfully create an instance of BinarySearchTree.");

        $root = $tree->getRoot();
        $this->assertNull($root, "By default the root node is NULL.");
    }

    public function testInsertRootNode(): void
    {
        $value = 5;
        $tree = $this->buildTree([$value]);

        $root = $tree->getRoot();
        $this->assertInstanceOf('AlgoStruct\Tree\Node\BstNode', $root,
            "The first inserted node is set as the root is of the correct instance");
        $this->assertEquals(5, $root->getValue(), "The root's value is correct set at {$value}");
    }

    public function testInsertRight(): void
    {
        $tree = $this->buildTree([]);
        // Insert root element.
        $root = BstNode::create()->setValue(10);
        $tree->insert($root);

        /** @var NodeInterface $larger */
        $larger = BstNode::create()->setValue(20);
        $tree->insert($larger);

        // We expect the larger node to be to the right of the root.
        $this->assertEquals($larger->getValue(), $tree->getRoot()->getRight()->getValue(),
            "Larger values get inserted to the right");
    }

    public function testInsertLeft(): void
    {
        $tree = $this->buildTree([10]);

        /** @var NodeInterface $smaller */
        $smaller = BstNode::create()->setValue(5);
        $tree->insert($smaller);

        $this->assertEquals($smaller->getValue(), $tree->getRoot()->getLeft()->getValue(),
            "Smaller values get inserted to the left.");
    }

}