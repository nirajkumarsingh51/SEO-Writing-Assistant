<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];

    $wordCount = str_word_count($text);
    $seoScore = min(100, $wordCount * 2);

    echo json_encode(["score" => $seoScore]);
}
?>
