<?php
include 'index.html';
session_start();

// Verify the Google user ID received from the client-side
if (isset($_POST['google_user_id'])) {
    $googleUserId = $_POST['google_user_id'];

    // Perform any additional verification steps if needed
    
    // Email to validate
    $email = $googleUserId;

    // Define the allowed domain(s) for organizational emails
    $allowedDomains = array("nitc.in");

    // Get the domain from the email
    $domain = substr(strrchr($email, "@"), 1);

    // Check if the domain is allowed
    if (in_array($domain, $allowedDomains)) {
        echo "Organizational email is valid.";
        
        // Store the user ID in $_SESSION
        $_SESSION['google_user_id'] = $googleUserId;

        // Send a response back to the client
        echo "success";
    } else {
        echo "Organizational email is not valid.";
    }


}
else {
    // Invalid request
    echo "error";
}
?>

