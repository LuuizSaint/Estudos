<?php
require_once __DIR__ . "/../vendor/autoload.php";

use app\models\database\Delete;
use app\models\database\Find;
use app\models\database\Insert;
use app\models\database\Update;
use app\models\User;


$user = new User;

$user->firstName = 'Pedrin';
$user->lastName = 'Primo';
$user->age = 23;
$user->id = 1;
