<div>
    <div class="card cardimg">
        <img src="" class="">
    </div>
    <div class="card cardprofile">
        <div class="row">
            <div class="col-4">
                <img src="<?php echo $session->get('userImage'); ?>" class="card-img-top profileimg" alt="...">
            </div>
            <div class="col-2">
                <h5>1</h5>
                <h6>โพสต์</h6>
            </div>
            <div class="col-2">
                <h5>48</h5>
                <h6>ผู้ติดตาม</h6>
            </div>
            <div class="col-3">
                <h5>5</h5>
                <h6>กำลังติดตาม</h6>
            </div>
        </div>

        <div class="card-body">
            <h4><?php echo $session->get('userName'); ?></h4>
            <p><?php echo $session->get('FName') . " " . $session->get('LName'); ?></p>

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
                <i class="far fa-mars" style="color: #1194ff;"></i>
                <!-- <i class="far fa-venus" style="color: #ff5ebc;"></i> -->
                <!-- <i class="far fa-venus-mars" style="color: #7e2dff;"></i> -->
                <br />

                <i class="fas fa-map-marker-alt"></i>
                <span><?php echo $province[0]["name_th"]; ?></span>
                
            </div><!--End information-->
        </div><!--End card-body-->
    </div><!--End card2-->
</div>