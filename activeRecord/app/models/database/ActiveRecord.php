<?php

namespace app\models\database;

use app\models\interfaces\IActiveRecord;
use app\models\interfaces\IExecute;
use ReflectionClass;

abstract class ActiveRecord implements IActiveRecord
{
    protected $table = null;
    protected $attrArray = [];

    public function __construct()
    {
        if (!$this->table) {
            $this->table = (new ReflectionClass($this))->getShortName();
        }
    }

    public function getTable()
    {
        return $this->table;
    }

    public function getAttr()
    {
        return $this->attrArray;
    }

    public function __set(string $attr, mixed $value)
    {
        $this->attrArray[$attr] = $value;
    }

    public function __get($attr)
    {
        return $this->attrArray[$attr];
    }

    public function execute(IExecute $execute)
    {
        return $execute->execute($this);
    }
}
