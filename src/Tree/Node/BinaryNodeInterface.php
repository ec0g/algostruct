<?php

namespace AlgoStruct\Tree\Node;


interface BinaryNodeInterface extends NodeInterface {

  /**
   * @return \AlgoStruct\Tree\Node\BinaryNodeInterface|null
   */
  public function getLeft(): ?BinaryNodeInterface;

  /**
   * Sets the left child. Returns an instance of self so it can be used for chaining.
   *
   * @param \AlgoStruct\Tree\Node\BinaryNodeInterface $left
   *
   * @return \AlgoStruct\Tree\Node\BinaryNodeInterface
   */
  public function setLeft(BinaryNodeInterface $left): BinaryNodeInterface;

  /**
   * @return \AlgoStruct\Tree\Node\BinaryNodeInterface|null
   */
  public function getRight(): ?BinaryNodeInterface;

  /**
   * Sets the right child. Returns an instance of self so it can be used for chaining.
   *
   * @param \AlgoStruct\Tree\Node\BinaryNodeInterface $right
   *
   * @return \AlgoStruct\Tree\Node\BinaryNodeInterface
   */
  public function setRight(BinaryNodeInterface $right): BinaryNodeInterface;

}