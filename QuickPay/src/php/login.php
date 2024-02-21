<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input from the form
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    // Prepare data for API request
    $loginData = [
        'name' => $name,
        'phone' => $phone,
        'password' => $password
    ];

    // Send data to the login API endpoint
    $apiEndpoint = 'http://100.25.166.226:8090/user/login'; // Replace with your actual API endpoint
    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => json_encode($loginData)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($apiEndpoint, false, $context);

    if ($result === FALSE) {
        die('Error sending data to the API');
    }

    // Handle the API response
    $response = json_decode($result, true);

    if (isset($response['token'])) {
        // Login successful, use the token for session management
        $token = $response['token'];
        echo 'Login successful! Token: ' . $token;
        header("Location: profile.html");
    } else {
        // Login failed
        echo 'Failed to login. Check API response for details.';
    }
} else {
    // Redirect to the login form if accessed directly
    header("Location: login.html");
    exit();
}
?>
