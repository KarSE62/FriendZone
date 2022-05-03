<!DOCTYPE html>
<html lang="en">
<?php
$con = mysqli_connect("localhost", "root", "", "friendzone") or die("Error: " . mysqli_error($con));
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile</title>

    <link rel="stylesheet" href="/CSS/viewProfile.css">
    <link rel="stylesheet" href="/CSS/cardProfile.css">
    <link rel="stylesheet" href="/CSS/profile.css">
    <link rel="stylesheet" href="/CSS/navUser.css">
    <link rel="stylesheet" href="/CSS/post.css">
    <link rel="stylesheet" href="/CSS/notification.css">

</head>

<body>

    <?php $session = session(); ?>
    
    <?php require('components/navUser.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            <?php require('components/cardProfile.php'); ?>

                <div class="card menu-profile">
                    <div class="card-body menu-profile-body">
                        <div class="div-txpost" id="">
                            <label class="menu-profile-txpost">โพสต์</label>
                        </div>
                        <div class="div-txactivity" id="">
                            <label class="menu-profile-txactivity">กิจกรรมที่เคยเข้าร่วม</label>
                        </div>
                        <div class="div-txreview" id="">
                            <label class="menu-profile-txreview">รีวิว</label>
                        </div>
                        <div class="div-txpersonalinfo" id="">
                            <label class="menu-profile-txpersonalinfo">ข้อมูลส่วนตัว</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
            <?php require('components/postUser.php'); ?>
            </div>
        </div>
    </div>
</body>

</html>