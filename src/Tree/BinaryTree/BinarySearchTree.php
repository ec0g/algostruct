<?php
declare(strict_types=1);

namespace AlgoStruct\Tree\BinaryTree;

use AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface;
use AlgoStruct\Tree\BinaryTree\Contracts\BinaryTreeInterface;
use AlgoStruct\Tree\BinaryTree\Contracts\InorderTreeWalkInterface;

class BinarySearchTree implements BinaryTreeInterface, InorderTreeWalkInterface {

  /** @var BinaryNodeInterface|null */
  protected $root;

  /**
   * BinarySearchTree constructor.
   */
  public function __construct() {
    $this->root = NULL;
  }

  public function getRoot(): ?BinaryNodeInterface {
    return $this->root;
  }

  /**
   * @param \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface $node
   *
   * @return \AlgoStruct\Tree\BinaryTree\Contracts\BinaryTreeInterface
   */
  public function insert(BinaryNodeInterface $node): BinaryTreeInterface {

    $x = $this->root;
    $y = NULL;
    while ($x) {
      $y = $x;
      // if the new value is smaller than the root's value then traverse the left child/tree.
      if ($node->getValue() < $x->getValue()) {
        $x = $x->getLeft();
      }
      else {
        $x = $x->getRight();
      }
    }

    $node->setParent($y);

    if (empty($y)) {
      $this->root = $node;
    }
    elseif ($node->getValue() < $y->getValue()) {
      $y->setLeft($node);
    }
    else {
      $y->setRight($node);
    }

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function print(BinaryNodeInterface $node = NULL) {
    if (empty($node)) {
      return PHP_EOL . 'LE Fin';
    }

    print sprintf('%s (%s,%s)', $node->getValue(), $node->getLeft(), $node->getRight()) . PHP_EOL;
    $this->print($node->getLeft());
    $this->print($node->getRight());
  }

  /**
   * @todo: should this be in a "Searcheable" trait to be shared by different binary tree types?
   * {@inheritdoc}
   */
  public function search(BinaryNodeInterface $node = NULL, $value): ?BinaryNodeInterface {
    if (!$node || $value === $node->getValue()) {
      return $node;
    }

    if ($value < $node->getValue()) {
      return $this->search($node->getLeft(), $value);
    }
    else {
      return $this->search($node->getRight(), $value);
    }
  }

  /**
   * @todo: move to a separate display class.
   * {@inheritdoc}
   */
  public function inorderTreeWalk(BinaryNodeInterface $root = NULL) {
    if (!$root) {
      return;
    }
    $this->inorderTreeWalk($root->getLeft());
    print $root->getValue();
    $this->inorderTreeWalk($root->getRight());
  }

  /**
   * @param $value
   *
   * @return mixed
   */
  public function delete($value): void {
    // TODO: Implement delete() method.
    throw new \InvalidArgumentException("Function is incomplete");
  }
}