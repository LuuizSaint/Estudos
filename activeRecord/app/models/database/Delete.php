<?php

namespace app\models\database;

use app\models\interfaces\IActiveRecord;
use app\models\interfaces\IExecute;

class Delete implements IExecute
{
    public function execute(IActiveRecord $iActiveRecord)
    {
        return "DELETE";
    }
}
