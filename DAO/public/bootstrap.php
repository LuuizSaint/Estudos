<?php

use app\configs\Connection;

require_once "../vendor/autoload.php";

$conn = new Connection;

$conn->getConn();