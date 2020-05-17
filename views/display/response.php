<?php
require_once 'config.php';

//sending a request, receiving a response in the form of a json file and decoding it into an object

$response = $client->request('GET', $path, [
    'headers' => $headers
]);

if (in_array($response->getStatusCode(), [200, 201])) {
    $json = json_decode($response->getBody());
} else {
    echo "Error loading page";
}

