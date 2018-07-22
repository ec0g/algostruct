<?php

namespace AlgoStruct\Tree\BinaryTree\Contracts;


interface BinaryNodeInterface extends NodeInterface {

  /**
   * @return \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface|null
   */
  public function getLeft(): ?BinaryNodeInterface;

  /**
   * Sets the left child. Returns an instance of self so it can be used for chaining.
   *
   * @param \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface $left
   *
   * @return \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface
   */
  public function setLeft(BinaryNodeInterface $left): BinaryNodeInterface;

  /**
   * @return \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface | null
   */
  public function getRight(): ?BinaryNodeInterface;

  /**
   * Sets the right child. Returns an instance of self so it can be used for chaining.
   *
   * @param \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface $right
   *
   * @return \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface
   */
  public function setRight(BinaryNodeInterface $right): BinaryNodeInterface;

}