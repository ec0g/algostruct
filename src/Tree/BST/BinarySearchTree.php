<?php
declare(strict_types=1);

namespace AlgoStruct\Tree\BST;

use AlgoStruct\Tree\Node\BinaryNodeInterface;
use AlgoStruct\Tree\Node\NodeInterface;

class BinarySearchTree implements BinarySearchTreeInterface
{

    /** @var \AlgoStruct\Tree\Node\BinaryNodeInterface */
    protected $root;

    /**
     * BinarySearchTree constructor.
     */
    public function __construct()
    {
        $this->root = null;
    }

    /**
     * @return \AlgoStruct\Tree\Node\BinaryNodeInterface
     */
    public function getRoot(): ?BinaryNodeInterface
    {
        return $this->root;
    }

    public function insert(NodeInterface &$node): void
    {
        /*
        if (!$this->root) {
            $this->root = $node;
            return;
        }
        */

        $x = $this->root;
        $y = null;
        while ($x) {
            $y = $x;
            // if the new value is smaller than the root's value then traverse the left child/tree.
            if ($node->getValue() < $x->getValue()) {
                $x = $x->getLeft();
            } else {
                $x = $x->getRight();
            }
        }

        $node->setParent($y);

        if (empty($y)) {
            $this->root = $node;
        } elseif ($node->getValue() < $y->getValue()) {
            $y->setLeft($node);
        } else {
            $y->setRight($node);
        }


    }

    public function search(NodeInterface $node): ?NodeInterface
    {
        // TODO: Implement search() method.
    }

    public function min(): ?NodeInterface
    {
        // TODO: Implement min() method.
    }

    public function max(): ?NodeInterface
    {
        // TODO: Implement max() method.
    }

    public function predecessor(): ?NodeInterface
    {
        // TODO: Implement predecessor() method.
    }

    public function successor(): ?NodeInterface
    {
        // TODO: Implement successor() method.
    }

    /**
     * {@inheritdoc}
     */
    public function print(BinaryNodeInterface $node = null)
    {
        if (empty($node)) {
            return 'end of tree';
        }

        $this->print($node->getLeft());
        $this->print($node->getRight());
        print (string)($node->getValue() ? $node : '') . PHP_EOL;
    }
}