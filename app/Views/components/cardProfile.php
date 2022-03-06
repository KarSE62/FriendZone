<div>
    <div class="cardProfile-title"></div>

    <div class="cardProfile-body">
        <div class="row">
            <div class="col-5">
                <img src="<?php echo $session->get('userImage'); ?>" class="cardProfile-img-user">
            </div>
            <div class="col-7">
                <a href="/editProfile" class="cardProfile-btn-edit">
                    <i class="fas fa-cog fa-cardProfile-setting"> &nbsp;</i>แก้ไขข้อมูล
                </a>
            </div>
        </div>

        <h4 class="cardProfile-username"><?php echo $session->get('userName'); ?></h4>
        <p class="cardProfile-fname-lname">@<?php echo $session->get('FName') . " " . $session->get('LName'); ?></p>

        <div class="row cardProfile-row">
            <div class="col-4 cardProfile-col-4">
                <h5 class="cardProfile-num">1</h5> 
                <h6 class="cardProfile-text">โพสต์</h6>
            </div>
            <div class="col-4 cardProfile-col-4">
                <h5 class="cardProfile-num">48</h5> 
                <h6 class="cardProfile-text">ผู้ติดตาม</h6>
            </div>
            <div class="col-4 cardProfile-col-4">
                <h5 class="cardProfile-num">5</h5>
                <h6 class="cardProfile-text">กำลังติดตาม</h6>
            </div>
        </div>
    </div>

</div>