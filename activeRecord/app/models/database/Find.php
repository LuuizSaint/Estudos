<?php

namespace app\models\database;

use app\models\connection\Connection;
use app\models\interfaces\IActiveRecord;
use app\models\interfaces\IExecute;
use Throwable;


class Find implements IExecute
{
    public function execute(IActiveRecord $iActiveRecord)
    {
        $table = $iActiveRecord->getTable();
        $attr = $iActiveRecord->getAttr();

        try {
            $query = $this->createQuery($iActiveRecord, $table, $attr);
            $conn = Connection::conn();

            $stmt = $conn->prepare($query);
            $stmt->execute($attr);

            return $stmt->rowCount();
        } catch (Throwable $th) {
            var_dump($th->getMessage());
        }
    }

    public function createQuery(IActiveRecord $iActiveRecord, $table, $attr)
    {
        $sql = "INSERT INTO {$table}(";

        foreach ($attr as $key => $value) {
            if ($key != "id") {
                $sql .= "{$key},";
            }
        }
        $sql = rtrim($sql, ',');

        $sql .= ") VALUES(";

        foreach ($attr as $key => $value) {
            if ($key != "id") {
                $sql .= ":{$key},";
            }
        }
        $sql = rtrim($sql, ',');
        $sql .= ")";

        return $sql;
    }
}
