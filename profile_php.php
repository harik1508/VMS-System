<?php
$con= mysqli_connect("localhost","root","","vms");
if($con!=true){
    echo "connection failed";
}
else{
    echo "connected successfully";
}
$sql="SELECT * from vms_student_information_2 where vms_student_information_2.email_id='muthyam_b200275ee@nitc.ac.in'";//Here we need to udate email with variable
$result=mysqli_query($con,$sql);
if($result){
  $row=mysqli_fetch_assoc($result);
  $name=$row['name'];
  $roll_no=$row['roll_no'];

}
?>