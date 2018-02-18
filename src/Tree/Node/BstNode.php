<?php

namespace AlgoStruct\Tree\Node;

class BstNode implements BinaryNodeInterface {

  protected $val;

  /** @var NodeInterface */
  protected $parent;

  /** @var \AlgoStruct\Tree\Node\BinaryNodeInterface */
  protected $left;

  /** @var \AlgoStruct\Tree\Node\BinaryNodeInterface */
  protected $right;

  public function __construct() {
    $this->val = NULL;
    $this->left = $this->right = NULL;

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
  public function setValue($value) {
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
}