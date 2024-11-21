<?php
require_once __DIR__ . '/../bootstrap.php';

use app\controllers\HomeController;
use app\http\Request;

$objRequest = new Request();
echo "<pre>";
print_r($objRequest);
echo "</pre>";


exit;

try {
    echo HomeController::getHome();
} catch (Exception $e) {
    echo $e->getMessage();
}
