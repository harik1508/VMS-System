<?php
session_start();

// Retrieve the credential from the POST data
$credential = $_POST['credential'];

// Validate the credential with your server-side verification logic
// ...

// Simulate email validation against an organization database
// You should replace this with your own logic to validate the email
$validEmails = ['nitc.in'];
$valid = in_array($email, $validEmails);

// Set session data based on email validation result
if ($valid) {
  $_SESSION['user'] = $email;
}

// Return a JSON response indicating the email validation result
header('Content-Type: application/json');
echo json_encode(['valid' => $valid]);
?>
