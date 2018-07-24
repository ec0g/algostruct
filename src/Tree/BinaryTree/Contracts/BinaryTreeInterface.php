<?php declare(strict_types=1);

namespace AlgoStruct\Tree\BinaryTree\Contracts;


interface BinaryTreeInterface {

  /**
   *
   * @param \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface $node
   *
   * @return mixed
   */
  public function insert(BinaryNodeInterface $node): BinaryTreeInterface;

  /**
   * Finds a value in a tree rooted at $node.
   *
   * @param \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface $node
   *
   * @param mixed $value
   *
   * @return \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface
   */
  public function search(BinaryNodeInterface $node = NULL, $value): ?BinaryNodeInterface;

  /**
   * @param mixed $value
   *
   * @return mixed
   */
  public function delete($value): void;

}