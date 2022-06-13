<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/CSS/nav.css">
    <link rel="stylesheet" href="/CSS/register.css">

    <title>Login FriendZone</title>

    <style>
        input {
            margin: 25px 0px;
        }
    </style>

</head>

<body>
    <?php require('components/nav.php'); ?>
    <div class="container">
        <div class="row">
            <?php if (session()->getFlashdata('msg1')) : ?>
                <div class="alert alert-success text-center"><?= session()->getFlashdata('msg1') ?></div>
            <?php endif ?>
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
                    <form action="/UserController/auth" method="post">
                        <?php if (session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif ?>
                        <input type="text" class="form-control bar" id="userName" placeholder="ชื่อบัญชีผู้ใช้" name="userName" value="<?= set_value('userName'); ?>"
                        required=""oninvalid="this.setCustomValidity('กรุณากรอกบัญชีผู้ใช้')"oninput="this.setCustomValidity('')" >
                        <input type="password" class="form-control bar" id="password" placeholder="รหัสผ่าน" name="password" value="<?= set_value('password'); ?>" 
                        required=""oninvalid="this.setCustomValidity('กรุณากรอกรหัสผ่าน')" oninput="this.setCustomValidity('')" >
                        <button type="submit" id="btn" class="button">เข้าสู่ระบบ</button>

                        <span class="span-register">
                            ยังไม่มีบัญชีผู้ใช้ใช่หรือไม่?
                            <a href="/register" class="a-login" style="text-decoration: none;">สมัครสมาชิก</a>
                        </span>
                    </form>

                </div>
            </div>

        </div>
    </div>
</body>

</html>