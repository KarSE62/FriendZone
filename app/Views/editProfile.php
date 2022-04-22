<!DOCTYPE html>
<html lang="en">
<?php
$con = mysqli_connect("localhost", "root", "", "friendzone") or die("Error: " . mysqli_error($con));
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
    <title>Profile</title>

    <link rel="stylesheet" href="/CSS/navUser.css">
    <link rel="stylesheet" href="/CSS/notification.css">
    <link rel="stylesheet" href="/CSS/post.css">
    <link rel="stylesheet" href="/CSS/profile.css">
    <link rel="stylesheet" href="/CSS/formEditProfile.css">

</head>
<body>
    
    <?php $session = session(); ?>
    <?php require('components/navUser.php'); ?>
    <div class="container-xl">
        <div class="row">
            <div class="col-1"></div>
            
            <div class="col-sm-3">
                <?php require('components/profile.php'); ?>
            </div>

            <div class="col-1"></div>

            <div class="col-sm-5">
                <?php require('components/FormEditProfile.php'); ?>
            </div>

            <div class="col-2"></div>
        </div>
    </div>

</body>
</html>
<?php include('script.php');?>