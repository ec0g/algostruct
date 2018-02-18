<?php declare(strict_types=1);

namespace AlgoStruct\Tree\Node;


interface NodeInterface {

  public static function create();

  /**
   * @return mixed
   */
  public function getValue();

  /**
   * @param mixed $value
   *
   * @return \AlgoStruct\Tree\Node\NodeInterface
   */
  public function setValue($value);

}