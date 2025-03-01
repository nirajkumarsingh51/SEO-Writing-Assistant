<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $text = $_POST["text"]; // User input text
    $api_key = "23da23f136afb95d075381c6c270bfecbef36544e3363f19d0c1cfc8"; // Your TextRazor API Key

    $api_url = "https://api.textrazor.com/";
    $data = http_build_query([
        "apiKey" => $api_key,
        "extractors" => "entities,topics",
        "text" => $text
    ]);

    $options = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => $data
        ]
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($api_url, false, $context);

    if ($response) {
        echo $response; // JSON Response return karega
    } else {
        echo json_encode(["error" => "Failed to check plagiarism"]);
    }
}
?>
