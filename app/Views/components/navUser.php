<nav class="navbar sticky-top navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/showdata">
            <img src="https://media.discordapp.net/attachments/778499819072913482/964379893557248000/logoo.png" class="nav-logo">
        </a> &nbsp; &nbsp;

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/showdata">
                        <i class="fas fa-home"></i> &nbsp;หน้าแรก
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-filter"></i> &nbsp;หมวดหมู่
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($query as $value) { ?>
                            <li><a class="dropdown-item" href="<?php echo base_url("postCategory"."/". $value['categoryId'] ) ?>"><?= $value['name_category'] ?></a></li>
                        <?php } ?>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" id="navbarDropdownActivite" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-car"></i> &nbsp;กิจกรรม
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownActivite">
                            <li><a class="nav-link" href="<?php echo base_url("mypostActive" )?>"></i> &nbsp;กิจกรรมของฉัน</a></li>
                            <li><a class="nav-link" href="<?php echo base_url("viewrequestPartic" )?>"></i> &nbsp;กิจกรรมที่ขอเข้าร่วม</a></li>
                            <li><a class="nav-link" href="<?php echo base_url("viewPostParticActive" )?>"></i> &nbsp;กิจกรรมที่เข้าร่วมแล้ว</a></li>
                    </ul>
                </li>            


                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="fas fa-bell"></i> &nbsp;การแจ้งเตือน
                        <span class="red-noti">1</span>
                    </a>
                </li>
                
                <li class="nav-item nav-profile">
                    <a class="nav-link" href="<?php echo base_url("viewProfile" )?>">
                        <i class="fas fa-car"></i> &nbsp;โปรไฟล์
                    </a>
                </li>
            </ul>

            <a href="<?php echo base_url("logout" )?>" class="nav-logout">ออกจากระบบ</a>

        </div>

        <div class="nav-imgprofile">
            <div class="dropdown">
                <img src="<?php echo $session->get('userImage'); ?>" class="nav-user-imgprofile dropdown" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="<?php echo base_url("viewProfile" )?>">โปรไฟล์</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url("logout" )?>">ออกจากระบบ</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>

<?php require('notification.php'); ?>