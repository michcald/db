<?php

namespace Michcald\Db;

class Table
{
    private $name;

    private $fields = array();

    private $engine = 'MyISAM';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addField(Table\Field $field)
    {
        $this->fields[$field->getName()] = $field;

        return $this;
    }

    public function getFields()
    {
        return $this->fields;
    }
    
    public function hasField($name)
    {
        return isset($this->fields[$name]);
    }
    
    /**
     * 
     * @param type $name
     * @return \Dummy\Db\Table\Field
     * @throws \Exception
     */
    public function getField($name)
    {
        if (!$this->hasField($name)) {
            throw new \Exception('Field not found: ' . $name);
        }
        
        return $this->fields[$name];
    }

    public function setEngine($engine)
    {
        $this->engine = $engine;

        return $this;
    }

    public function getEngine()
    {
        return $this->engine;
    }
}
