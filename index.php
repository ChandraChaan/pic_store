<?php
// index.php

require_once 'config.php';

// Header settings for JSON response
header('Content-Type: application/json');

$response = array();

// Parse the request URL
$request = $_SERVER['REQUEST_URI'];
$api_base = '/api/';

if (strpos($request, $api_base) !== false) {
    $endpoint = str_replace($api_base, '', $request);
    $endpoint_parts = explode('/', $endpoint);

    if (count($endpoint_parts) > 0) {
        $resource = $endpoint_parts[0];

        switch ($resource) {
            case 'users':
                require 'endpoints/users.php';
                break;

            case 'products':
                require 'endpoints/products.php';
                break;

            default:
                $response['message'] = "Endpoint not found.";
                http_response_code(404);
                echo json_encode($response);
                break;
        }
    } else {
        $response['message'] = "Invalid endpoint.";
        http_response_code(400);
        echo json_encode($response);
    }
} else {
    $response['message'] = "Invalid API request.";
    http_response_code(400);
    echo json_encode($response);
}
?>
