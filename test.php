<?php

$url = 'https://127.0.0.1:8000/api/gaze-tracking';
$data = [
    'gaze_direction' => 'left',
    'is_blinking' => false,
    'x' => 0.5,
    'y' => 0.5
];

$options = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
    ],
    'http' => [
        'header'  => "Content-Type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if ($result === FALSE) {
    echo "Error sending request.";
} else {
    echo "Response: " . $result;
}