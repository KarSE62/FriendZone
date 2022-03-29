<nav class="navbar sticky-top navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/showdata">
            <img src="https://shorturl.asia/E6rSs" class="nav-logo">
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
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                <li class="nav-item nav-profile">
                    <a class="nav-link" href="#">
                        <i class="fas fa-car"></i> &nbsp;โปรไฟล์
                    </a>
                </li>
            </ul>

            <a href="/logout" class="nav-logout">ออกจากระบบ</a>

        </div>

        <div class="nav-imgprofile">
            <div class="dropdown">
                <img src="<?php echo $session->get('userImage'); ?>" class="nav-user-imgprofile dropdown" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">โปรไฟล์</a></li>
                    <li><a class="dropdown-item" href="/logout">ออกจากระบบ</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>