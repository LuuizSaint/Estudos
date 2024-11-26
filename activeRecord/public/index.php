<?php
require_once __DIR__ . "/../vendor/autoload.php";

use app\models\Post;
use app\models\User;


$user = new User;

$user->firstName = 'Pedrin';
$user->lastName = 'Do Mal';
$user->age = 23;
$user->id = 2;

var_dump($user->getAttr());
