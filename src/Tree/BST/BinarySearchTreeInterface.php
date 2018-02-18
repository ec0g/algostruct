<?php
declare(strict_type=1);


namespace AlgoStruct\Tree\BST;


use AlgoStruct\Tree\Node\NodeInterface;

/*
 * Binary Search Tree services.
 */
interface BinarySearchTreeInterface {

  public function search(NodeInterface $node): ?NodeInterface;

  public function min(): ?NodeInterface;

  public function max(): ?NodeInterface;

  public function predecessor(): ?NodeInterface;

  public function successor(): ?NodeInterface;
}