<?php
session_start();

// Redirect to the landing page if user is not authenticated
if (!isset($_SESSION['user'])) {
  header('Location: index.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Protected Page</title>
</head>
<body>
  <h1>Protected Content</h1>

  <p>Welcome, <?php echo $_SESSION['user']; ?>!</p>

  <a href="logout.php">Sign Out</a>
</body>
</html>
