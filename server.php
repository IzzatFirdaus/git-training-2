<?php
// server.php
// Skrip mudah untuk memberikan respons JSON dari server PHP

// Set response header ke JSON
header('Content-Type: application/json');

// Data respons contoh
$response = [
    'status' => 'success',
    'message' => 'Hello from server.php!',
    'timestamp' => date('Y-m-d H:i:s')
];

// Output respons dalam format JSON
echo json_encode($response);
?>