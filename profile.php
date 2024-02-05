<?php include('profile_php.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
  <title>User Profile</title>
</head>
<body>
  <nav>
        <div class="navbar">
          <ul>
            <li><a href="landing_page.html">
              <i class="fas fa-home"></i>
              <span class="nav-item" style="color:white;">Home</span>
            </a></li>
            <li><a href="profile.php">
              <i class="fas fa-user"></i>
              <span class="nav-item" style="color:white;">Profile</span>
            </a></li>
            
    
            <li><a href="logout.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item" style="color:white;">Log out</span>
            </a></li>
          </ul>
        </div>
        
    </nav>
  <div class="profile-container">
    <h1 style="padding-left: 20%;padding-bottom: 2%;font-size: 50px;color:#1e4f81;font-family: 'Nunito Sans', sans-serif;">Profile</h1>
    <table style="padding-right: 205px;">
        <tr>
            <th class="CV">
                <h4 style="font-size: 30px; padding-right: 510px;">Name:</h4><c style="font-size=10px; padding-left:230px"><?php echo $row['name'];?></c><br>
                <h4 style="font-size: 30px; padding-right: 510px;">Roll_no:</h4><c style="font-size=10px; padding-left:230px"><?php echo $row['roll_no'];?></c><br>
                <h4 style="font-size: 30px; padding-right: 510px;">Email_id:</h4><c style="font-size=10px; padding-left:230px"><?php echo $row['email_id'];?></c><br>
                <h4 style="font-size: 30px; padding-right: 510px;">Batch:</h4><c style="font-size=10px; padding-left:230px"><?php echo $row['batch'];?></c><br>
                <h4 style="font-size: 30px; padding-right: 510px;">Department:</h4><c style="font-size=10px; padding-left:230px"><?php echo $row['department'];?></c><br>

            </th>
        </tr>
    </table>
  </div>
</body>
</html>
