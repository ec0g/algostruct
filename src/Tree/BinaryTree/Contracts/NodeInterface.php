<?php declare(strict_types=1);

namespace AlgoStruct\Tree\BinaryTree\Contracts;

/**
 * Provides a contract for any node in a tree.
 *
 * Interface NodeInterface
 *
 * @package AlgoStruct\Tree\Node
 */
interface NodeInterface {

  /**
   * @return mixed
   */
  public function getValue();

  /**
   * @param mixed $value
   */
  public function setValue($value);

  /**
   * Returns an instance of self so the function can be chained.
   *
   * @param \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface $node
   *
   * @return \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface
   */
  public function setParent(BinaryNodeInterface $node): BinaryNodeInterface;

  /**
   * @return \AlgoStruct\Tree\BinaryTree\Contracts\BinaryNodeInterface|null
   */
  public function getParent(): ?BinaryNodeInterface;

  /**
   * Returns a string representation of this object.
   *
   * @return string
   */
  public function __toString(): string;

}