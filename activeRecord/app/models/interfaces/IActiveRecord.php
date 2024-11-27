<?php

namespace app\models\interfaces;

interface IActiveRecord
{
    public function execute(IExecute $execute);
    public function __set(string $attr, mixed $value);
    public function __get($attr);
    public function getTable();
    public function getAttr();
}
