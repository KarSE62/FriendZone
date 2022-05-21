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

        <div class="information">
            <h5>ข้อมูลทั่วไป</h5>

            <label>สถานะ :</label>
            <span><?php if ($session->get('statusUser') == "0") {
                        echo "รอการยืนยันตัวตน";
                    } else if ($session->get('statusUser') == "1") {
                        echo "ยืนยันตัวตนสำเร็จแล้ว";
                    }; ?></span>
            <br />

            <label>เพศ :</label>
            <span><?php echo $session->get('gender'); ?> </span>
            <?php if($session->get('gender')=="ชาย"){ ?>
                <i class="fa-solid fa-mars" style="color: #1194ff;"></i>
            <?php } else if($session->get('gender')=="หญิง"){ ?>
                <i class="fa-solid fa-venus" style="color: #ff5ebc;"></i> 
            <?php } else if($session->get('gender')=="อื่น") {?>
            <i class="fa-solid fa-mars-and-venus" style="color: #7e2dff;"></i>
            <?php } ?>
            <br />

            <i class="fas fa-map-marker-alt"></i>
            <span><?php echo $province[0]["name_th"]; ?></span>
            
        </div><!--End information-->
    </div>

</div>