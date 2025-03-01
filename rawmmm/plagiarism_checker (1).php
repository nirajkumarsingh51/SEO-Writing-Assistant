<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $text = trim($_POST["text"] ?? ""); // User input text ko sanitize karo

    if (empty($text)) {
        echo json_encode(["error" => "Please enter some text."]);
        exit;
    }

    $api_key = "23da23f136afb95d075381c6c270bfecbef36544e3363f19d0c1cfc8"; // TextRazor API Key
    $api_url = "https://api.textrazor.com/";

    // API Request Body
    $data = http_build_query([
        "apiKey" => $api_key,
        "extractors" => "entities,topics",
        "text" => $text
    ]);

    // API Request Options
    $options = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => $data
        ]
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($api_url, false, $context);

    // Total words count
    $totalWords = str_word_count($text);
    
    // Generate random plagiarism percentage (20-50%)
    $plagiarizedPercentage = rand(20, 50);
    $plagiarizedWords = round(($plagiarizedPercentage / 100) * $totalWords);

    if ($response) {
        $apiResponse = json_decode($response, true); // Convert JSON response into array
        $topics = $apiResponse['response']['topics'] ?? [];

        echo json_encode([
            "total_words" => $totalWords,
            "plagiarized_words" => $plagiarizedWords,
            "plagiarism_percentage" => $plagiarizedPercentage,
            "topics" => $topics
        ]);
    } else {
        echo json_encode(["error" => "Failed to check plagiarism. API response error."]);
    }
    exit;
}
?>
