<?php
$expectedAudience = '685310727240-663afvr78pg4uq95ittv9url6icvv0bn.apps.googleusercontent.com'; // Replace with your client ID
$idToken = $_POST['credential'];

function verifyIdToken($idToken, $expectedAudience) {
  $requestUrl = 'https://www.googleapis.com/oauth2/v3/tokeninfo?id_token=' . $idToken;
  $response = file_get_contents($requestUrl);
  $data = json_decode($response);
  if (isset($data->aud) && $data->aud === $expectedAudience) {
    return true;
  }
  return false;
}

// Verify the ID token
if (verifyIdToken($idToken, $expectedAudience)) {
  // Check if the user is from the authorized organization
  // Perform necessary checks based on your organizational requirements
  $authorizedDomain = 'nitc.in'; // Replace with your authorized domain
  $email = $data->email;
  $domain = substr(strrchr($email, '@'), 1);
  if ($domain === $authorizedDomain) {
    echo 'authorized';
  } else {
    echo 'unauthorized';
  }
} else {
  echo 'unauthorized';
}
?>
