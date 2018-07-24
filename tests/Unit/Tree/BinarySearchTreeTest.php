<?php
declare(strict_types=1);

namespace AlgoStruct\Tests\Unit\Tree;

use AlgoStruct\Tree\BinaryTree\BinarySearchTree;
use AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface;
use AlgoStruct\Tree\BinaryTree\Node\BinaryNode;
use PHPUnit\Framework\TestCase;

/**
 * Class BinarySearchTreeTest
 *
 * @package AlgoStruct\Tests\Unit\Tree
 *
 * @group bst
 */
final class BinarySearchTreeTest extends TestCase {

  protected function buildTree(array $data = []): BinarySearchTree {
    $tree = new BinarySearchTree();

    foreach ($data as $value) {
      $node = NULL;
      $node = BinaryNode::create()->setValue($value);
      $tree->insert($node);
    }

    return $tree;
  }

  public function testGetDefaultRoot(): void {
    $tree = new BinarySearchTree();

    $this->assertInstanceOf('AlgoStruct\Tree\BinaryTree\BinarySearchTree', $tree,
      "Successfully create an instance of BinarySearchTree.");

    $root = $tree->getRoot();
    $this->assertNull($root, "By default the root node is NULL.");
  }

  public function testInsertRootNode(): void {
    $value = 5;
    $tree = $this->buildTree([$value]);

    $root = $tree->getRoot();
    $this->assertInstanceOf('AlgoStruct\Tree\BinaryTree\Node\BinaryNode', $root,
      "The first inserted node is set as the root is of the correct instance");
    $this->assertEquals(5, $root->getValue(), "The root's value is correct set at {$value}");
  }

  public function testInsertRight(): void {
    $tree = $this->buildTree([]);
    // Insert root element.
    $root = BinaryNode::create()->setValue(10);
    $tree->insert($root);

    /** @var \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface $larger */
    $larger = BinaryNode::create()->setValue(20);
    $tree->insert($larger);

    // We expect the larger node to be to the right of the root.
    $this->assertEquals($larger->getValue(), $tree->getRoot()->getRight()->getValue(),
      "Larger values get inserted to the right");
  }

  public function testInsertLeft(): void {
    $tree = $this->buildTree([10]);

    /** @var \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface $smaller */
    $smaller = BinaryNode::create()->setValue(5);
    $tree->insert($smaller);

    $this->assertEquals($smaller->getValue(), $tree->getRoot()->getLeft()->getValue(),
      "Smaller values get inserted to the left.");
  }

  public function testInorderTreeWalk(): void {
    $values = [5, 10, 30, 50];
    $tree = $this->buildTree($values);

    $tree->inorderTreeWalk($tree->getRoot());
    $flatValues = implode('', $values);

    $this->expectOutputString($flatValues);
  }

  public function testSearch(): void {
    $tree = $this->buildTree([10]);
    $tree2 = $this->buildTree([50, 80, 10]);
    $tree3 = $this->buildTree([20, 10, 80]);

    $emptyTree = new BinarySearchTree();
    $this->assertNull($emptyTree->search($emptyTree->getRoot(), 450), "Search function correctly returns null when the value is not in an empty tree");

    $valueIsNotInTree = 548;
    $this->assertNull($tree->search($tree->getRoot(), $valueIsNotInTree), "Search function correctly returns null when the value is not in the tree");
    $this->assertNull($tree->search($tree2->getRoot(), $valueIsNotInTree),
      "Search function correctly returns null when the search value is not one of the values in the tree");
    $this->assertNull($tree->search($tree3->getRoot(), $valueIsNotInTree), "Search function correctly returns null when the search value is not in the tree");

    $valueIsInTheTree = 10;
    $this->assertInstanceOf(BinaryNodeInterface::class, $tree->search($tree->getRoot(), $valueIsInTheTree),
      "Search function correctly returns a Node when the value is found in the tree");
    $this->assertInstanceOf(BinaryNodeInterface::class, $tree2->search($tree2->getRoot(), $valueIsInTheTree),
      "Search function correctly returns a Node when the value is found in the tree");
    $this->assertInstanceOf(BinaryNodeInterface::class, $tree3->search($tree3->getRoot(), $valueIsInTheTree),
      "Search function correctly returns a Node when the value is found in the tree");
  }

}