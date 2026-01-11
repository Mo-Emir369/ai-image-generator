<?php
header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);
$prompt = $input["prompt"] ?? "";

if (!$prompt) {
    http_response_code(400);
    echo json_encode(["error" => "Prompt is required"]);
    exit;
}

$API_KEY = "YOUR_HUGGINGFACE_TOKEN";


$url = "https://router.huggingface.co/hf-inference/models/stabilityai/stable-diffusion-xl-base-1.0";

$payload = json_encode([
    "inputs" => $prompt
]);

$headers = [
    "Authorization: Bearer $API_KEY",
    "Content-Type: application/json"
];

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    echo json_encode(["error" => curl_error($ch)]);
    exit;
}

curl_close($ch);

if ($httpCode !== 200) {
    echo json_encode([
        "error" => "HuggingFace API error",
        "details" => $response
    ]);
    exit;
}

echo json_encode([
    "image" => base64_encode($response)
]);
