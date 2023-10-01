<?php
require 'db_conn.php';  // Include the database connection

header('Content-Type: application/json');

$email = $_POST['email'];
$password = $_POST['password'];
$fullName = $_POST['full_name'];
$location = $_POST['location']; // New field for location
$jobPreference = $_POST['job_preference']; // New field for job_preference



// Check if data is provided
if (isset($email, $password, $fullName, $location, $jobPreference)) {

    // Split the full name into first and last name
    $names = explode(' ', $fullName);
    $firstName = $names[0];
    $lastName = isset($names[1]) ? $names[1] : '';
    
    // First, check if the email already exists
    $stmt = $pdo->prepare('SELECT email FROM users WHERE email = ?');
    $stmt->execute([$email]);

    if ($stmt->fetch()) {
        echo json_encode(['status' => 'error', 'message' => 'Email already exists']);
        exit;
    }

    // If email doesn't exist, proceed with registration
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare('INSERT INTO users (email, password, first_name, last_name, location, job_preference) VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$email, $hashedPassword, $firstName, $lastName, $location, $jobPreference]);

    echo json_encode(['status' => 'success', 'message' => 'User registered successfully']);
    exit;

}else {
    $missing_vars = [];
    foreach(['email', 'password', 'fullName', 'location', 'jobPreference'] as $var) {
        if (!isset($$var)) $missing_vars[] = $var;
    }
    echo json_encode([
        'status' => 'error', 
        'message' => 'Some variables are missing', 
        'missing_vars' => $missing_vars
    ]);
    exit;
}

?>
