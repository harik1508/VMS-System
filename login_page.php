<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="Sahil Kumar" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>vms login page</title>
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" />
    <link rel="stylesheet" href="styles sign in.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
  $(".register-tab").click(function () {
    $(".register-box").show();
    $(".login-box").hide();
    $(".register-tab").addClass("active");
    $(".login-tab").removeClass("active");
  });
  $(".login-tab").click(function () {
    $(".login-box").show();
    $(".register-box").hide();
    $(".login-tab").addClass("active");
    $(".register-tab").removeClass("active");
  });
});
    </script>
  </head>
  <body>
    <div id="main">
      <!-- Tab Buttons -->
      <div id="tab-btn">
        <a href="#login-form" class="login-tab active">Sign In</a>
        <a href="#reg-form" class="register-tab">Sign Up</a>
      </div>
      <!-- Login Form -->
      <div class="login-box">
        <h2 style="color:white">WELCOME TO VMS NITC</h2>
        <form action="#" method="post" id="login-form">
          <input type="text" name="username" placeholder="Enter Username (institute Email id)" class="inp" required autofocus /><br />
          <input type="password" name="password" placeholder="Password" class="inp" required /><br />
          <a href="#" id="forgot" style="color:white">Forgot Password?</a><br />
          <input type="submit" name="submit" value="SIGN IN" class="sub-btn" />
        </form>
      </div>
      <!-- Registration Form -->
      <div class="register-box">
        <h2 style="color:white">REGISTER</h2>
        <form action="#" method="post" id="reg-form">
          <input type="text" name="uname" placeholder="Enter Username (institute mail id)" class="inp" required autofocus /><br />
          <input type="email" name="roll no" placeholder="Enter Roll number" class="inp" required /><br />
          <input type="password" name="pass" placeholder="Enter Password" class="inp" required /><br />
          <input type="password" name="repass" placeholder="Confirm Password" class="inp" required /><br />
          <input type="submit" name="submit" value="SIGN UP" class="sub-btn" />
        </form>
      </div>
    </div>
  </body>
</html>








