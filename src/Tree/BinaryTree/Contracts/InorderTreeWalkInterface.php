<?php
declare(strict_types=1);

namespace AlgoStruct\Tree\BinaryTree\Contracts;

interface InorderTreeWalkInterface {

  /**
   * Performs an inorder-tree walk and prints values.
   *
   * In an inorder-tree walk operation we print the left child, the root then the
   * right child. The values should come out in ascending order.
   *
   * @param \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface $root
   *
   * @return mixed
   */
  public function inorderTreeWalk(BinaryNodeInterface $root = NULL);
}