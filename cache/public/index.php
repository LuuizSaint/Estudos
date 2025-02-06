<?php

use app\library\Cache;

require '../vendor/autoload.php';

$cache = new Cache('cache');
$dataCache = $cache->create(['userName' => 'Pedrin', 'userAge' => 69, 'userAuth' => true], 1);

var_dump($dataCache->userName);

?>