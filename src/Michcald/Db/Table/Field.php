<?php

namespace Michcald\Db\Table;

class Field
{
    private $name;

    private $type;

    private $isNullable;

    private $key;

    private $default;

    private $extra; // auto_increment

    private $referencedTable;

    public function __construct()
    {

    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function isInt()
    {
        return preg_match('%^INT%', $this->type);
    }

    public function isTinyInt()
    {
        return preg_match('%^TINYINT%', $this->type);
    }

    public function isVarchar()
    {
        return preg_match('%^VARCHAR%', $this->type);
    }

    public function isText()
    {
        return preg_match('%^TEXT%', $this->type);
    }

    public function isDate()
    {
        return preg_match('%^DATE%', $this->type);
    }

    public function isTimestamp()
    {
        return preg_match('%^TIMESTAMP%', $this->type);
    }

    public function isFloat()
    {
        return preg_match('%^FLOAT%', $this->type);
    }

    public function setIsNullable($isNullable)
    {
        $this->isNullable = $isNullable;

        return $this;
    }

    public function isNullable()
    {
        return $this->isNullable;
    }

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function isPrimaryKey()
    {
        return strtolower($this->key) == 'pri';
    }

    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    public function getExtra()
    {
        return $this->extra;
    }

    public function isAutoIncrement()
    {
        return strtolower($this->extra) == 'auto_increment';
    }

    public function setReferencedTable($referencedTable)
    {
        $this->referencedTable = $referencedTable;

        return $this;
    }

    public function getReferencedTable()
    {
        return $this->referencedTable;
    }
}
