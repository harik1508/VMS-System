<?php
session_start();
$con= mysqli_connect("localhost","root","","vms");
if($con!=true){
        echo "connection failed";
    }
else{
    echo "connected successfully";
}

if(isset($_POST['save_opt'])){
    $boy_can=$_POST['Boy_Candidate'];
    $girl_can=$_POST['girl_Candidate'];


    $query = "INSERT INTO vms_student(voted_for_boy_cr, voted_for_girl_cr) Values ($boy_can,$girl_can) " ;
    $query_run= mysqli_query($con,$query);

    if($query_run){
        $_SESSION['status'] ="Inserted Succesfully";
        header("location: cast_vote.php");
    }
    else{
        $_SESSION['status'] =" Not Inserted Succesfully";
        header("location: cast_vote.php");

    }
}
$con.close();

?>