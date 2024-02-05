<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  
    <link rel="stylesheet" href="main.css">
  </head>
  
  <body>
    <nav>
      <div class="navbar">
        <ul>
          <li>
            <a href="landing_page.html">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a>
          </li>
          <li>
            <a href="profile.php">
              <i class="fas fa-user"></i>
              <span class="nav-item">Profile</span>
            </a>
          </li>
  
          <li>
            <a href="logout.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <header>
      <h1>Election Statistics</h1>
      <form class="choice" method="post" action="" >
      <?php
          if(isset($_SESSION['status'])){
              // echo "<h3>".$_SESSION['status']."</h3>";
              unset($_SESSION['status']);
          }
          ?>
        <label for="catogaries" style="font-size: 25px; padding-left: 320px;">Name of Category:</label>
                  <select name="Category" id="E2">
                      <option value="Null">None</option>
                      <option value="Boy Category">Boy Category</option>
                      <option value="Girl Category">Girl Category</option>
                      <option value="BR Category">BR Category</option>
                  </select><br>
        <label for="Batch" style="font-size: 25px; padding-left: 320px;">Batch:</label>
                  <select name="Batch" id="E2">
                      <option value="Null">None</option>
                      <option value=A>A</option>
                      <option value=B>B</option>
                      <option value=C>C</option>
                      <option value=D>D</option>
                  </select><br><br>         
        <button class="sub_but" type="submit" name="update"  style=" border-radius: 10px; border-left: 50px; align:center;padding-left:100px;"><b style="font-size:30px; padding-right:100px;">Submit</b></button>
       
      </form>
      <?php
      include('results.php'); ?>

    </header>
    <section class="container">
      <h3><?php echo $Elections;?></h3>
      <div class="card">
        <div class="box">
          <img src="<?php $img; ?>" >
          <h3><?php echo $cat; ?></h3>
          <h3><?php echo $name; ?></h3>
          <h3>Batch: <?php echo $batch;?> </h3>
          <h3>Roll_no: <?php echo $Roll_no; ?> </h3>
          <h3>Total Votes: <?php echo $votes; ?> </h3>
          <h3>"WINNER"</h3>

        </div>
      
        <div class="box">
          <img src="<?php $img2; ?>" >
          <h3><?php echo $cat; ?></h3>
          <h3><?php echo $name2; ?></h3>
          <h3>Batch: <?php echo $batch2;?> </h3>
          <h3>Roll_no: <?php echo $Roll_no2; ?> </h3>
          <h3>Total Votes: <?php echo $votes2; ?> </h3>
          <h3>"RUNNER"</h3>

        </div>
        
        <!-- <div class="box">
          <img src="https://img.freepik.com/free-icon/user_318-159711.jpg" />
          <h3>Candidate-2</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem
            nulla dolorum ducimus, tempora suscipit inventore obcaecati architecto
            rem fuga possimus!
          </p>
        </div>
        <div class="box">
          <img src="https://img.freepik.com/free-icon/user_318-159711.jpg" />
          <h3>Candidate-3</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem
            nulla dolorum ducimus, tempora suscipit inventore obcaecati architecto
            rem fuga possimus!
          </p>
        </div> -->
      </div>
    </section>
    <!-- <section class="container">
      <h3>BR Elections</h3>
      <div class="card">
        <div class="box">
          <img src="https://img.freepik.com/free-icon/user_318-159711.jpg" />
          <h3>Candidate-1</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem
            nulla dolorum ducimus, tempora suscipit inventore obcaecati architecto
            rem fuga possimus!
          </p>
        </div>
        <div class="box">
          <img src="https://img.freepik.com/free-icon/user_318-159711.jpg" />
          <h3>Candidate-2</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem
            nulla dolorum ducimus, tempora suscipit inventore obcaecati architecto
            rem fuga possimus!
          </p>
        </div>
        <div class="box">
          <img src="https://img.freepik.com/free-icon/user_318-159711.jpg" />
          <h3>Candidate-3</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem
            nulla dolorum ducimus, tempora suscipit inventore obcaecati architecto
            rem fuga possimus!
          </p>
        </div>
      </div>
    </section> -->
  </body>
  
  </html>