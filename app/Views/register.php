<!DOCTYPE html>
<html lang="en">

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

    <link rel="stylesheet" href="/CSS/nav.css">
    <link rel="stylesheet" href="/CSS/register.css">

    <title>Register FriendZone</title>

</head>

<body>
    <?php require('components/nav.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-start">
                <img src="https://media.discordapp.net/attachments/778499819072913482/964379161923821618/272771993_448168496793553_1013076838067798128_n.png" class="img-register">
                <center>
                    <img src="https://media.discordapp.net/attachments/778499819072913482/964379893557248000/logoo.png" class="logo-register-mobile">
                </center>
            </div>
            <div class="col-sm-6 col-end">
                <center>
                    <img src="https://media.discordapp.net/attachments/778499819072913482/964379893557248000/logoo.png" class="logo-register">
                </center>
                <div class="form">
                    <?php if (isset($validation)) : ?>
                        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                    <?php endif ?>
                    <form action="/UserController/register" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="username">ชื่อผู้ใช้</label>
                            <input type="text" class="form-control" id="userName" name="userName" 
                            required=""oninvalid="this.setCustomValidity('กรุณากรอกบัญชีผู้ใช้')"oninput="this.setCustomValidity('')">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="password">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="password" name="password" 
                            required=""oninvalid="this.setCustomValidity('กรุณากรอกรหัสผ่าน')"oninput="this.setCustomValidity('')">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="confirmPassword">ยืนยันรหัสผ่าน</label>
                            <input type="password" onchange="checkPassword()" class="form-control" id="confirmPassword" name="password2"
                            required=""oninvalid="this.setCustomValidity('กรุณายืนยันรหัสผ่าน')"oninput="this.setCustomValidity('')">
                        </div>

                        <center>
                            <p id="message"></p>
                            <button type="submit" id="btn" class="button">สมัครสมาชิก</button>
                        </center>
                    </form>
                    
                    <span class="span-register">
                         ฉันมีบัญชีผู้ใช้แล้ว
                        <a href="/login" class="a-login" style="text-decoration: none;">เข้าสู่ระบบ</a>
                    </span>

                </div>
            </div>
        </div>
    </div>

    <script>
        function checkPassword() {
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("confirmPassword").value;
            console.log(password, confirmPassword);
            if (password == confirmPassword) {
                document.getElementById("message").innerHTML = "*** รหัสผ่านตรงกัน ***";
                message.style.color = "#19b80a";
                document.getElementById("btn").disabled = false;
            } else {
                document.getElementById("message").innerHTML = "*** รหัสผ่านไม่ตรงกัน ***";
                message.style.color = "#e20000";
                document.getElementById("btn").disabled = true;
            }
        }
    </script>

<body>
</html>