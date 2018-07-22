<?php
declare(strict_types=1);
/**
 * @contains TreeInterface.php
 * User: goce
 * Date: 2/11/18
 * Time: 5:41 PM
 */

namespace AlgoStruct\Tree;


use AlgoStruct\Tree\Node\NodeInterface;

interface TreeInterface {

  /**
   * @param \AlgoStruct\Tree\Node\NodeInterface $node
   *
   * @return mixed
   */
  public function insert(NodeInterface $node): TreeInterface;

  /**
   * @param \AlgoStruct\Tree\Node\NodeInterface $node
   *
   * @return mixed
   */
  public function delete(NodeInterface $node): void;

  /*
  public function search();
  public function min();
  public function max();
  public function predecessor();
  public function successor();
  */
}