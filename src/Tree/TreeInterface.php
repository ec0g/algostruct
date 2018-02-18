<?php
/**
 * @contains TreeInterface.php
 * User: goce
 * Date: 2/11/18
 * Time: 5:41 PM
 */

namespace AlgoStruct\Tree;


use AlgoStruct\Tree\Node\NodeInterface;

interface TreeInterface {

  public function add(NodeInterface $node);

  public function delete(NodeInterface $node);
}