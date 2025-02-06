<?php
require "../vendor/autoload.php";

use GuzzleHttp\Client as GuzzleClient;
use Predis\Client as PredisClient;

$startTime = microtime(true);

$guzzClient = new GuzzleClient([
    'base_uri' => 'http://servicodados.ibge.gov.br/api/v1/localidades/',
    'timeout' => 30.0
]);

$ufs = ['AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO'];

$predisClient = new PredisClient([
    'scheme' => 'tcp',
    'host' => '127.0.0.1',
    'port' => 6379 
]);


$totalLocations = $predisClient->get('locations:count') ?? 0;

if(empty($totalLocations)){
    foreach($ufs as $uf){
        $response = $guzzClient->get("estados/{$uf}/distritos");
        $totalLocations += count(json_decode($response->getBody()));
    }

    $predisClient->set('locations:count', $totalLocations);
    $predisClient->expire('locations:count', 30);
    
}

$endTime = microtime(true);


$execTime = $endTime - $startTime;

print_r($totalLocations);
echo "<br>";
print_r($execTime);

?>