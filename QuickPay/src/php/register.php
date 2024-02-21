<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input from the form
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    // Prepare data for API request
    $userData = [
        'name' => $name,
        'phone' => $phone,
        'password' => $password
    ];

    // Send data to the API endpoint
    $apiEndpoint = 'http://100.25.166.226:8090/user/register'; // Replace with your actual API endpoint
    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => json_encode($userData)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($apiEndpoint, false, $context);

    if ($result === FALSE) {
        die('Error sending data to the API');
    }

    // Handle the API response (you may want to decode JSON response, etc.)
    header("Location: login.html");
    echo 'User registered successfully!';
} else {
    // Redirect to the registration form if accessed directly
    header("Location: index.html");
    exit();
}
?>
