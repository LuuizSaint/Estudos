<?php
require_once __DIR__ . '/../bootstrap.php';

use app\controllers\HomeController;



try {
    echo HomeController::getHome();
} catch (Exception $e) {
    echo $e->getMessage();
}
