<?php declare(strict_types=1);

namespace AlgoStruct\Tree\BinaryTree\Node;

use AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface;

class BinaryNode implements BinaryNodeInterface {

  /** @var mixed */
  protected $val;

  /** @var \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface */
  protected $parent;

  /** @var \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface */
  protected $left;

  /** @var \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface */
  protected $right;

  public function __construct() {
    $this->val = NULL;
    $this->left = NULL;
    $this->right = NULL;
    $this->parent = NULL;

  }

  public static function create(): BinaryNodeInterface {
    return new static();
  }

  /**
   * @return mixed
   */
  public function getValue() {
    return $this->val;
  }

  /**
   * {@inheritdoc}
   */
  public function getParent(): ?BinaryNodeInterface {
    return $this->parent;
  }

  /**
   * {@inheritdoc}
   */
  public function setParent(BinaryNodeInterface $node = NULL): BinaryNodeInterface {
    $this->parent = $node;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setValue($value): BinaryNodeInterface {
    $this->val = $value;

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getLeft(): ?BinaryNodeInterface {
    return $this->left;
  }

  /**
   * {@inheritdoc}
   */
  public function setLeft(BinaryNodeInterface $left): BinaryNodeInterface {
    $this->left = $left;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getRight(): ?BinaryNodeInterface {
    return $this->right;
  }

  /**
   * {@inheritdoc}
   */
  public function setRight(BinaryNodeInterface $right): BinaryNodeInterface {
    $this->right = $right;
    return $this;
  }

  public function __toString(): string {
    return (string) $this->val;
  }
}