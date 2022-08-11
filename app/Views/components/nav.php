<?php
$con = mysqli_connect("localhost", "root", "", "friendzone") or die("Error: " . mysqli_error($con));
$sql_category = "SELECT * FROM category";
$query = mysqli_query($con, $sql_category);
?>
<nav class="navbar sticky-top navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="https://media.discordapp.net/attachments/778499819072913482/964379893557248000/logoo.png" class="nav-logo">
        </a> &nbsp; &nbsp;

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-home"></i> &nbsp;หน้าแรก
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-filter"></i> &nbsp;หมวดหมู่
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($query as $value) { ?>
                            <li><a class="dropdown-item" href="#"><?= $value['name_category'] ?></a></li>

                        <?php } ?>


                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-bell"></i> &nbsp;การแจ้งเตือน
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-car"></i> &nbsp;กิจกรรม
                    </a>
                </li>
            </ul>
            <span class="nav-regis-login-li">
                <a href="<?php echo base_url("register" )?>" class="nav-regis">สมัครสมาชิก</a> &nbsp;/&nbsp;
                <a href="<?php echo base_url("login" )?>" class="nav-login">เข้าสู่ระบบ</a>
            </span>
        </div>

        <span class="nav-regis-login">
            <a href="<?php echo base_url("register" )?>" class="nav-regis">สมัครสมาชิก</a> /
            <a href="<?php echo base_url("login" )?>" class="nav-login">เข้าสู่ระบบ</a>
        </span>

    </div>
</nav>