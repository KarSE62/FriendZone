<?php
$con = mysqli_connect("localhost", "friendszon_admin", "123456", "friendszon_admin") or die("Error: " . mysqli_error($con));


    $sql_provinces = "SELECT * FROM provinces";
    $query_province = mysqli_query($con, $sql_provinces);
    
    $sql_provinces = "SELECT * FROM provinces";
    $query1 = mysqli_query($con, $sql_provinces);
  
    $sql_category = "SELECT * FROM category";
    $query = mysqli_query($con, $sql_category);


?>