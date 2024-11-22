<?php
require_once __DIR__ . '/../bootstrap.php';

use app\controllers\HomeController;
use app\http\Request;


try {
    echo HomeController::getHome();
} catch (Exception $e) {
    echo $e->getMessage();
}
