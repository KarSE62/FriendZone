<?php

          $con= mysqli_connect("localhost","root","","friendzone") or die("Error: " . mysqli_error($con));  
  if (isset($_POST['userName']) && isset($_POST['username_check']) && $_POST['username_check'] == '1') {
  	$userName = $_POST['userName'];
  	$sql = "SELECT * FROM users WHERE userName='$userName'";
  	$query = mysqli_query($con, $sql);
    $row = mysqli_num_rows($query);
    if($row >= '1'){
        echo 'taken';
    }else if($row <= '0'){
        echo 'not_taken';
    }
  }



 
?>