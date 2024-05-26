<?php
// endpoints/products.php

require_once '../config.php';

// Header settings for JSON response
header('Content-Type: application/json');

$conn = getDBConnection();

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT id, name, price FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $response[] = $row;
        }
    } else {
        $response['message'] = "No products found.";
    }
} else {
    $response['message'] = "Invalid request method.";
}

echo json_encode($response);

$conn->close();
?>
