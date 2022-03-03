<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/CSS/navbar.css">
    <link rel="stylesheet" href="/CSS/registerPage.css">
    
    <title>Register FriendZone</title>

</head>
<body>
<?php require('components/navbar.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6" id="cover">
                <img src="https://shorturl.asia/q1fW8" class="cover">
            </div>

            <div class="col-sm-6">
                <div class="form">
                    <center>
                    <img src="https://shorturl.asia/Yc7Sf" class="logo-form">
                    </center>
                   <?php if(isset($validation)): ?>
                    <div class="alert alert-danger"><?=$validation->listErrors(); ?></div>
                    <?php endif ?>
                    <form action="/UserController/register" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="username">ชื่อผู้ใช้</label>
                            <input type="text" class="form-control" id="userName" name="userName" require>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="password">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="password" name="password" require>
                        </div>
                        <p id="message"></p>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="confirmPassword">ยืนยันรหัสผ่าน</label>
                            <input type="password" onchange="checkPassword()" class="form-control" id="confirmPassword" name="confirmpassword">
                        </div>

                        <center>
                            <button type="submit" id="btn" class="button" >ยืนยัน</button>
                            &nbsp;
                            </form>
                        </center>
                        
                        <span>
                            ฉันมีบัญชีผู้ใช้แล้ว
                            <a href="/login" class="login" style="text-decoration: none;">เข้าสู่ระบบ</a>
                        </span>
                    
                </div>
            </div>  
        </div>
    </div>
    <script>
        function checkPassword(){
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("confirmPassword").value;
            console.log(password ,confirmPassword);
           if(password == confirmPassword){
               document.getElementById("message").innerHTML = "รหัสผ่านตรงกัน";
               document.getElementById("btn").disabled = false;
        }else{
            document.getElementById("message").innerHTML = "รหัสผ่านไม่ตรงกัน";
               document.getElementById("btn").disabled = true;
        }
           } 
            
    </script>
<body>
</html>