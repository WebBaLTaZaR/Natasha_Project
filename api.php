<?php
header('Content-Type: application/json');
file_put_contents("request_log.txt", date("Y-m-d H:i:s") . " Received: " . var_export($_GET, true) . "\n", FILE_APPEND);

$temp = isset($_GET['temp']) ? $_GET['temp'] : 'Н/Д';
$humidity = isset($_GET['humidity']) ? $_GET['humidity'] : 'Н/Д';
$pressure = isset($_GET['pressure']) ? $_GET['pressure'] : 'Н/Д';
$co2 = isset($_GET['co2']) ? $_GET['co2'] : 'Н/Д';

echo json_encode([
    'temp' => $temp,
    'humidity' => $humidity,
    'pressure' => $pressure,
    'co2' => $co2
]);
?>
