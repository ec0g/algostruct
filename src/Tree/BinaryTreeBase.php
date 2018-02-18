<?php
declare(strict_types=1);

namespace AlgoStruct\Tree;


class BinaryTreeBase {

  protected $value;

  /** @var \AlgoStruct\Tree\Node\NodeInterface|NULL */
  protected $parent;

  /** @var \AlgoStruct\Tree\Node\NodeInterface */
  protected $left;

  /** @var \AlgoStruct\Tree\Node\NodeInterface */
  protected $right;

  public function __construct() {
    // The root node's parent is always null.
    $this->parent = NULL;

  }
}