<script>
    function text(x) {
        if (x == 0) document.getElementById("notiInput").style.display = "block";
        else document.getElementById("notiInput").style.display = "none";
        return;
    }

    function notiJoin(x) {
        if (x == 1) {
            document.getElementById("notiJoin").style.display = "block";
            document.getElementById("notiEtc").style.display = "none";
            document.getElementById("notiCol1").style.color = "#ef5da8";
            document.getElementById("notiCol2").style.color = "#9f9f9f";
            document.getElementById("underline1").style.display = "block";
            document.getElementById("underline2").style.display = "none";
        } else {
            document.getElementById("notiJoin").style.display = "none";
            document.getElementById("notiEtc").style.display = "block";
            document.getElementById("notiCol1").style.color = "#9f9f9f";
            document.getElementById("notiCol2").style.color = "#ef5da8";
            document.getElementById("underline1").style.display = "none";
            document.getElementById("underline2").style.display = "block";

        }
        return;
    }
</script>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabelNoti">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabelNoti">การแจ้งเตือน</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="noti-type">
            <div class="row noti-row-type">
                <div class="col noti-col-type1" id="notiCol1">
                    <!-- <i class="fa-solid fa-bell-plus fa-noti-bell-plus"></i> -->
                    <h6 class="noti-text-type1" onclick="notiJoin(1)">คำขอร่วมกิจกรรม
                        <span class="red-noti-join">1</span>
                    </h6>

                </div>

                <div class="col noti-col-type2" id="notiCol2">
                    <!-- <i class="fas fa-bells fa-noti-bells"></i> -->
                    <h6 class="noti-text-type2" onclick="notiJoin(0)">การแจ้งเตือนอื่นๆ
                        <span class="red-noti-etc">1</span>
                    </h6>

                </div>
            </div>
            <div class="row">
                <div class="col" id="notiUnderline1">
                    <div id="underline1"></div>
                </div>
                <div class="col" id="notiUnderline2">
                    <div id="underline2"></div>
                </div>
            </div>
        </div>

        <div class="noti-group" id="notiJoin">
            <!-- แจ้งเตือนคำขอเข้าร่วมกิจกรรม -->
            <?php foreach ($parts as $part) { ?>
                <?php if ($part["userId_user"] == $session->get('userId')) { ?>
                    <div class="noti">
                        <!-- กล่องแจ้งเตือนคำขอเข้าร่วม -->
                        <img src="<?php echo $part["userImage"] ?>" class="noti-img-user">

                        <div class="noti-text">
                            <a href="/viewUserProfile/<?php echo $part["userId"] ?>" class="noti-text-username"><?php echo $part["FName"] ?></a>
                            <span class="noti-text-time">2 นาทีที่แล้ว</span>

                            <p class="noti-text-join"><?php echo $part["postTitle"] ?></p>

                            <a href="/acceptPartic/<?php echo $part["partId"] ?>"><button class="noti-btn-yes">ยืนยัน</button></a>
                            <a href="#"><button type="button" class="noti-btn-no" data-bs-toggle="modal" data-bs-target="#exampleModalNoti">
                                    ปฏิเสธ
                                </button></a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

            
        </div>

        <div class="noti-etc" id="notiEtc">
            <!-- แจ้งเตือนอื่นๆ -->

            <?php foreach ($notics as $notic) { ?>
                <?php if ($notic["userId"] == $session->get('userId')) { ?>
                    <div class="noti">
                        <!-- กล่องแจ้งเตือนอื่นๆ เตือนการรีวิวจากระบบ -->
                        <img src="https://cdn.discordapp.com/attachments/778499819072913482/966615192110764052/bg.jpg" class="noti-img-user">

                        <div class="noti-text">
                            <a href="#" class="noti-text-username">แจ้งเตือนจากระบบ</a>
                            <span class="noti-text-time"><?php echo $notic["notificationDate"] ?></span>

                            <p class="noti-text-join"><?php echo $notic["notificateDetail"] ?></p>

                        </div>
                    </div>
                <?php } ?>
            <?php } ?>


        </div>

    </div>
</div>