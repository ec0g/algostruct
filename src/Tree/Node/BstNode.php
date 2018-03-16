<?php declare(strict_types=1);

namespace AlgoStruct\Tree\Node;

class BstNode implements BinaryNodeInterface
{

    protected $val;

    /** @var \AlgoStruct\Tree\Node\BinaryNodeInterface */
    protected $parent;

    /** @var \AlgoStruct\Tree\Node\BinaryNodeInterface */
    protected $left;

    /** @var \AlgoStruct\Tree\Node\BinaryNodeInterface */
    protected $right;

    public function __construct()
    {
        $this->val = null;
        $this->left = null;
        $this->right = null;
        $this->parent = null;

    }

    public static function create(): BinaryNodeInterface
    {
        return new static();
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->val;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(): ?BinaryNodeInterface
    {
        return $this->parent;
    }

    /**
     * {@inheritdoc}
     */
    public function setParent(BinaryNodeInterface &$node = null): BinaryNodeInterface
    {
        $this->parent = $node;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setValue($value): BstNode
    {
        $this->val = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLeft(): ?BinaryNodeInterface
    {
        return $this->left;
    }

    /**
     * {@inheritdoc}
     */
    public function setLeft(BinaryNodeInterface &$left): BinaryNodeInterface
    {
        $this->left = $left;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRight(): ?BinaryNodeInterface
    {
        return $this->right;
    }

    /**
     * {@inheritdoc}
     */
    public function setRight(BinaryNodeInterface &$right): BinaryNodeInterface
    {
        $this->right = $right;
        return $this;
    }

    public function __toString(): string
    {
        return (string)$this->val;
    }
}