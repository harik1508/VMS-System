<?php
    $con= mysqli_connect("localhost","root","","vms");
    if($con!=true){
        echo "connection failed";
    }
    else{
        echo "connected successfully";
    }
    if(isset($_POST['save_opt'])&&isset($_POST['Elections'])&&isset($_POST['Catogory'])&&isset($_POST['Name'])&&isset($_POST['Roll_no'])&&isset($_POST['Email_id'])&&isset($_POST['Batch'])&&isset($_POST['Department'])&&isset($_POST['upload'])&&isset($_POST['upload_img'])){
        echo "ttt";
        $Elections=$_POST['Elections'];
        $Catogory=$_POST['Catogory'];
        $Name=$_POST['Name'];
        $Roll_no=$_POST['Roll_no'];
        $Email_id=$_POST['Email_id'];
        $Batch=$_POST['Batch'];
        $dept=$_POST['Department'];
        $Manifesto=$_POST['upload'];
        $Image=$_POST['upload_img'];
    
    
    
        $query = " INSERT INTO candidate_database (roll_no, name,email_id,batch,department,elections ,catogory,manifesto,image) VALUES ('$Roll_no','$Name','$Email_id','$Batch','$dept','$Elections','$Catogory','$Manifesto','$Image'); " ;
        $query_run= mysqli_query($con,$query);
    
        if($query_run){
            $_SESSION['status'] ="Inserted Succesfully";
            echo $_SESSION['status'];
            // header("location: success.html");
        }
        else{
            $_SESSION['status'] =" Not Inserted Succesfully";
            // header("location: fail.html");
            echo $_SESSION['status'];
    
        }
    }
    elseif(isset($_POST['update'])&&isset($_POST['Elections'])&&isset($_POST['Catogory'])&&isset($_POST['Name'])&&isset($_POST['Roll_no'])&&isset($_POST['Email_id'])&&isset($_POST['Batch'])&&isset($_POST['Department'])&&isset($_POST['upload'])){
        $Elections=$_POST['Elections'];
        $Catogory=$_POST['Catogory'];
        $Name=$_POST['Name'];
        $Roll_no=$_POST['Roll_no'];
        $Email_id=$_POST['Email_id'];
        $Batch=$_POST['Batch'];
        $dept=$_POST['Department'];
        $Manifesto=$_POST['upload'];
    
        $query = "UPDATE Candidate_database SET Name='$Name',  " ;
          $query_run= mysqli_query($con,$query);
    
          if($query_run){
              $_SESSION['status'] ="Updated Succesfully";
              echo $_SESSION['status'];
              // header("location: success.html");
          }
          else{
              $_SESSION['status'] =" Not Updated Succesfully";
              // header("location: fail.html");
              echo $_SESSION['status'];
    
          }
    }
    
    
    else{
    echo "Fill the Form completely";
    }
    


?>