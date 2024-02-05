<?php
include('fetch.php');
session_start();


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">

    <title>Cast Vote</title>
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
    <section>
        

        <h1  style="padding-left: 20%;padding-bottom: 2%;font-size: 50px;color:#1e4f81;font-family: 'Nunito Sans', sans-serif;">CR Elections</h1>
        <form class="choice" method="post" action="">
            <?php
            if(isset($_SESSION['status'])){
                // echo "<h4>".$_SESSION['status']."</h4>";
                unset($_SESSION['status']);
            }
            ?>
            
            <ul class="list">
                <li  style="padding-left: 500px;">
                        <h2 style="padding-left: 0px;padding-bottom: 0%;font-size: 30px;color:#eff3f7;font-family: 'Nunito Sans', sans-serif;">Boy Category</h2><br>
                        <?php
                        $qsql="SELECT * from candidate_database where candidate_database.catogory='Boy Catogory'";//Here we need to udate email with variable
                        $result=mysqli_query($con,$qsql);
                        if($result){
                            $aname=array();
                            $manifesto=array();
                            while($row=mysqli_fetch_assoc($result)){
                                array_push($aname,$row['name']);
                                array_push($manifesto,$row['manifesto']);
                               
                            }
                            // print_r($name);
                        }
                        for($i=0;$i<count($aname);$i++){
                             echo '<cb><input align="center"type="radio" name="Boy_Candidate" value="'.$aname[$i].'"><c style="font-size:30px;padding-right: 303px;">'. $aname[$i].'</c></cb>';
                             echo '<button style="padding-left: 300px;"><a href="'.$manifesto[$i].'" target="_thapa" style="color:white; font-size: 20px;">'. "Manifesto".'</a></button><br>';
                        }
                        ?>
                        
                        
                    </li>
            
            
    
            
            
                    <li style="padding-left: 500px;">
                        <h2 style="padding-left: 0px;padding-bottom: 0%;font-size: 30px;color:#eff3f7;font-family: 'Nunito Sans', sans-serif;">Girl Category</h2><br>
                    <!-- <h2 style="padding-left: 20%;padding-bottom: 2%;font-size: 20px;color:#1e4f81;font-family: 'Nunito Sans', sans-serif;">Girl Category</h2> -->
                    <?php
                        $gsql="SELECT * from candidate_database where candidate_database.catogory='Girl Catogory'";//Here we need to udate email with variable
                        $gresult=mysqli_query($con,$gsql);
                        if($gresult){
                            $gname=array();
                            $gmanifesto=array();
                            while($g_row=mysqli_fetch_assoc($gresult)){
                                array_push($gname,$g_row['name']);
                                array_push($gmanifesto,$g_row['manifesto']);
                               
                            }
                            // print_r($name);
                        }
                        for($i=0;$i<count($gname);$i++){
                             echo '<cb><input type="radio" name="girl_Candidate" value="'.$gname[$i].'"><c style="font-size:30px;padding-right: 303px;">'. $gname[$i].'</c></cb>';
                             echo '<button style="padding-left: 300px;"><a href="'.$gmanifesto[$i].'" target="_thapa" style="color:white; font-size: 20px;">'. "Manifesto".'</a></button><br>';
                        }
                        ?>    
                    
                    </li>
                
                    </ul>
            <button class="sub_but" type="submit" name="save_opt"  style=" border-radius: 10px; border-left: 50px;padding-right: 100px; padding-left: 100px; margin-left:693px"><b>submit</b></button>
           
        </form>
        
    </section>
<?php


if(isset($_POST['save_opt'])){
    echo "ttt";
    $boy_can=htmlspecialchars($_POST['Boy_Candidate']);
    $girl_can=htmlspecialchars($_POST['girl_Candidate']);


    $query = "INSERT INTO voting_response( roll_no, catogory, elections,candidate) Values( '$roll_no','Boy Catogory', 'CR Elections', '$boy_can'),( '$roll_no','Girl Catogory', 'CR Elections', '$girl_can'); " ;
    $query_run= mysqli_query($con,$query);

    if($query_run){
        $_SESSION['status'] ="Inserted Succesfully";
        echo $_SESSION['status'];
        session_destroy();
        // header("location: success.html");
    }
    else{
        $_SESSION['status'] =" Not Inserted Succesfully";
        // header("location: fail.html");
        echo $_SESSION['status'];

    }
}


?>
    
</body>
</html>