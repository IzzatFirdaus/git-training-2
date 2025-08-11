<?php
// Simple PHP server script

// Set response header
header('Content-Type: application/json');

// Example response data
$response = [
    'status' => 'success',
    'message' => 'Hello from server.php!',
    'timestamp' => date('Y-m-d H:i:s')
];

// Output JSON response
echo json_encode($response);
?>