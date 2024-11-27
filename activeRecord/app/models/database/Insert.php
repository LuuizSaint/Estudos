<?php

namespace app\models\database;

use app\models\interfaces\IActiveRecord;
use app\models\interfaces\IExecute;

class Insert implements IExecute
{
    public function execute(IActiveRecord $iActiveRecord)
    {
        return "INSERT";
    }
}
