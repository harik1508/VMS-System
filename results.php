
<?php
$con= mysqli_connect("localhost","root","","vms");
if(isset($_POST['update'])){
  $cat=$_POST['Category'];
  $bat=$_POST['Batch'];
  if($cat!='BR Catogory'){
    $sql="SELECT roll_number,votes from candidate_database where category='$cat'AND batch='$bat'; ";
    $result=mysqli_query($con,$sql);
    if($result){
        $name=array();
        $votes=array();
        while($row=mysqli_fetch_assoc($result)){
            array_push($name,$row['roll_number']);
            array_push($votes,$row['votes']);
                                  
        }
        // print_r($name);
        // print_r($votes);
        // echo max($votes);
        $max_votes=max($votes);
        sort($votes);
        array_pop($votes);
        $max2=max($votes);
        print_r($votes);
        echo "tttttttttttttttt";
        
        // $row=mysqli_fetch_assoc($result);
        
    }
    $vsql="SELECT * from candidate_database where votes='$max_votes' AND category='$cat';";
    $res=mysqli_query($con,$vsql);
    $qsql="SELECT * from candidate_database where votes='$max2' AND category='$cat';";
    $qres=mysqli_query($con,$qsql);
    if($res){
        $val=mysqli_fetch_assoc($res);
        $name=$val['name'];
        $Roll_no=$val['roll_number'];
        $votes=$val['votes'];
        $img=$val['image'];
        $Elections=$val['elections'];
        $batch=$val['batch'];


        // echo $name. $Roll_no;
    }
    if($qres){
      $val2=mysqli_fetch_assoc($qres);
        $name2=$val2['name'];
        $Roll_no2=$val2['roll_number'];
        $votes2=$val2['votes'];
        $img2=$val2['image'];
        $Elections2=$val2['elections'];
        $batch2=$val2['batch'];


    }
    
  }
  else{
    $sql="SELECT roll_number,votes from candidate_database where category='$cat'; ";
    $result=mysqli_query($con,$sql);
    if($result){
        $name=array();
        $votes=array();
        while($row=mysqli_fetch_assoc($result)){
            array_push($name,$row['roll_number']);
            array_push($votes,$row['votes']);
                                  
        }
        // print_r($name);
        // print_r($votes);
        // echo max($votes);
        $max_votes=max($votes);
        sort($votes);
        array_pop($votes);
        $max2=max($votes);
        
        // $row=mysqli_fetch_assoc($result);
        
    }
    $vsql="SELECT * from candidate_database where votes='$max_votes' AND category='$cat';";
    $res=mysqli_query($con,$vsql);
    $qsql="SELECT * from candidate_database where votes='$max2' AND category='$cat';";
    $qres=mysqli_query($con,$qsql);  
    if($res->num_rows>0){
        $val=mysqli_fetch_assoc($res);
        $name=$val['name'];
        $Roll_no=$val['roll_number'];
        $votes=$val['votes'];
        $img=$val['image'];
        $Elections=$val['elections'];
        $batch=$val['batch'];
        $category=$val['category'];
    }

    if($qres->num_rows>0){
      $val2=mysqli_fetch_assoc($qres);
        $name2=$val2['name'];
        $Roll_no2=$val2['roll_number'];
        $votes2=$val2['votes'];
        $img2=$val2['image'];
        $Elections2=$val2['elections']; 
        $batch2=$val2['batch'];


    }
  }
  
}

?>