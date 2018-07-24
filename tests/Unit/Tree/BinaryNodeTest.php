<?php
declare(strict_types=1);

namespace AlgoStruct\Tests\Unit\Tree;

use AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface;
use AlgoStruct\Tree\BinaryTree\Node\BinaryNode;
use PHPUnit\Framework\TestCase;

/**
 * Class BstNodeTest
 *
 * @covers  \AlgoStruct\Tree\BinaryTree\Node\BinaryNode
 *
 * @package \AlgoStruct\Tests\Unit\Tree
 *
 * @group bstnode
 * @group binarynode
 * @group node
 */
final class BinaryNodeTest extends TestCase {

  /**
   * @throws \Exception
   */
  public function testGetValue(): void {
    $node = new BinaryNode();
    $this->assertNull($node->getValue(), "By default the tree is created with a null value.");
  }

  /**
   * @throws \Exception
   */
  public function testSetValue(): void {
    $node = new BinaryNode();
    $value = 1;
    $node->setValue($value);
    $this->assertEquals($value, $node->getValue(), "setValue correctly returns the assigned value.");
  }

  public function testLeafsAreNullOnConstruct(): void {
    $node = new BinaryNode();

    $this->assertNull($node->getLeft(), "Left child is NULL after instantiating an object of BinaryNode.");
    $this->assertNull($node->getRight(), "Right child is NULL after instantiating an object of BinaryNode.");
  }

  public function testLeftChild(): void {
    $node = new BinaryNode();

    $left = new BinaryNode();
    $left->setValue("left");
    $returned = $node->setLeft($left);
    $this->assertInstanceOf(BinaryNodeInterface::class, $returned,
      "The setLeft function correctly returns and instance of BinaryNodeInterface.");
    $this->assertEquals("left", $node->getLeft()->getValue(),
      "The left child of the parent node is properly assigned and retains it's value.");
    $this->assertNull($node->getRight(),
      "The right child correctly remains NULL after assignment of the left child.");
  }

  public function testRightChild(): void {
    $node = new BinaryNode();

    $right = BinaryNode::create()->setValue("right");
    $returned = $node->setRight($right);

    $this->assertInstanceOf(BinaryNodeInterface::class, $returned,
      "The setRight function correctly returns an instance of BinaryNodeInterface.");
    $this->assertEquals("right", $node->getRight()->getValue(),
      "The right child of the parent node is properly assigned and retains its value.");
    $this->assertNull($node->getLeft(),
      "The left child correctly remains NULL after assignment of the right child.");
  }

  public function testParent(): void {
    $node = new BinaryNode();
    $parent = $node->getParent();
    $this->assertNull($parent, "On a newly instantiated object we expect the parent node to be null.");

    $newParent = BinaryNode::create()->setValue("parent");
    $node->setParent($newParent);
    $this->assertInstanceOf(BinaryNode::class, $node->getParent(),
      "We expect the parent node to be an instance of BinaryNode.");
    $this->assertEquals("parent", $node->getParent()->getValue(),
      "We expect the parent node to correctly store and retain its value.");
  }

  public function testToString(): void {
    $node = new BinaryNode();
    $node->setValue("apple");

    $this->assertTrue("apple" === $node->__toString(), "The __toString method should return the value as string.");

    $node->setValue(5);
    $this->assertTrue((string) 5 === $node->__toString(), "The __toString method should typecast the value of the node as a string.");

  }
}

