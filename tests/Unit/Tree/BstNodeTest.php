<?php
declare(strict_types=1);

namespace AlgoStruct\Tests\Unit\Tree;

use AlgoStruct\Tree\Node\BstNode;
use PHPUnit\Framework\TestCase;

/**
 * Class BstNodeTest
 *
 * @covers  \AlgoStruct\Tree\Node\BstNode
 *
 * @package \AlgoStruct\Tests\Unit\Tree
 */
final class BstNodeTest extends TestCase
{

    /**
     * @throws \Exception
     */
    public function testGetValue(): void
    {
        $node = new BstNode();
        $this->assertNull($node->getValue(), "By default the tree is created with a null value.");
    }

    /**
     * @throws \Exception
     */
    public function testSetValue(): void
    {
        $node = new BstNode();
        $value = 1;
        $node->setValue($value);
        $this->assertEquals($value, $node->getValue(), "setValue correctly returns the assigned value.");
    }

    public function testLeafsAreNullOnConstruct(): void
    {
        $node = new BstNode();

        $this->assertNull($node->getLeft(), "Left child is NULL after instantiating an object of BstNode.");
        $this->assertNull($node->getRight(), "Right child is NULL after instantiating an object of BstNode.");
    }

    public function testLeftChild(): void
    {
        $node = new BstNode();

        $left = new BstNode();
        $left->setValue("left");
        $returned = $node->setLeft($left);
        $this->assertInstanceOf('AlgoStruct\Tree\Node\BinaryNodeInterface', $returned,
            "The setLeft function correctly returns and instance of BinaryNodeInterface.");
        $this->assertEquals("left", $node->getLeft()->getValue(),
            "The left child of the parent node is properly assigned and retains it's value.");
        $this->assertNull($node->getRight(),
            "The right child correctly remains NULL after assignment of the left child.");
    }

    public function testRightChild(): void
    {
        $node = new BstNode();

        $right = BstNode::create()->setValue("right");
        $returned = $node->setRight($right);

        $this->assertInstanceOf('AlgoStruct\Tree\Node\BinaryNodeInterface', $returned,
            "The setRight function correctly returns an instance of BinaryNodeInterface.");
        $this->assertEquals("right", $node->getRight()->getValue(),
            "The right child of the parent node is properly assigned and retains its value.");
        $this->assertNull($node->getLeft(),
            "The left child correctly remains NULL after assignment of the right child.");
    }

    public function testParent(): void
    {
        $node = new BstNode();
        $parent = $node->getParent();
        $this->assertNull($parent, "On a newly instantiated object we expect the parent node to be null.");

        $newParent = BstNode::create()->setValue("parent");
        $node->setParent($newParent);
        $this->assertInstanceOf("AlgoStruct\Tree\Node\BstNode", $node->getParent(),
            "We expect the parent node to be an instance of BstNode.");
        $this->assertEquals("parent", $node->getParent()->getValue(),
            "We expect the parent node to correctly store and retain its value.");
    }
}

