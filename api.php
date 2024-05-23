<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$receivedContent = file_get_contents('php://input');

// Логируем весь полученный контент
file_put_contents("complete_received_log.txt", date("Y-m-d H:i:s") . " Complete Received: " . $receivedContent . "\n", FILE_APPEND);

// Избавляемся от мусора перед JSON
$cleanedContent = preg_replace('/.*?({.*}).*/', '$1', $receivedContent);

// Пытаемся декодировать JSON
$data = json_decode($cleanedContent, true);

if (json_last_error() === JSON_ERROR_NONE) {
    $temp = isset($data['temp']) ? round($data['temp']) : 'Н/Д';
    $humidity = isset($data['humidity']) ? round($data['humidity']) : 'Н/Д';
    $pressure = isset($data['pressure']) ? round($data['pressure']) : 'Н/Д';
    $co2 = isset($data['co2']) ? round($data['co2']) : 'Н/Д';

    // Логируем обработанные данные
    file_put_contents("processed_data_log.txt", date("Y-m-d H:i:s") . " Processed Data: Temp: $temp, Humidity: $humidity, Pressure: $pressure, CO2: $co2\n", FILE_APPEND);

    echo json_encode(['temp' => $temp, 'humidity' => $humidity, 'pressure' => $pressure, 'co2' => $co2]);
} else {
    echo json_encode(['error' => 'Invalid JSON']);
}
?>
