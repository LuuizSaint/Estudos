<?php

namespace app\configs;

use PDO;
use PDOException;
use stdClass;

class Connection
{
    private static ?PDO $pdo;
    private static stdClass $configs;

    public static function getConn(): ?PDO
    {
        if (empty(self::$pdo)) {
            try {
                
                $config = self::getConfig();

                self::$pdo = new PDO(
                    self::setDNS(),
                    $config->user,
                    $config->pass,
                    self::$configs->options
                );
                
            } catch (PDOException $exception) {
                return var_dump($exception->getMessage());
            }
        }
        return self::$pdo;
    }

    private static function setDNS(): string
    {
        $config = self::$configs;
        return "{$config->drive}:host={$config->host};dbname={$config->name};";
    }

    private static function getConfig(): object
    {
        self::$configs = new stdClass();
        self::$configs->drive = DB_DRIVE;
        self::$configs->host = DB_HOST;
        self::$configs->name = DB_NAME;
        self::$configs->user = DB_USER;
        self::$configs->pass = DB_PASS;
        self::$configs->options = DB_PDO_OPTIONS;

        return self::$configs;
    }
}