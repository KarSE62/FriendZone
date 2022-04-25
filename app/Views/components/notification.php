<script>
    function text(x) {
        if(x == 0) document.getElementById("notiInput").style.display = "block";
        else document.getElementById("notiInput").style.display = "none";
        return;
    }
    function notiJoin(x) {
        if(x == 1) {
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
                    <i class="fas fa-bell-plus fa-noti-bell-plus"></i>
                    <h6 class="noti-text-type1" onclick="notiJoin(1)">คำขอร่วมกิจกรรม</h6>
                </div>
                
                <div class="col noti-col-type2" id="notiCol2">
                    <i class="fas fa-bells fa-noti-bells"></i>
                    <h6 class="noti-text-type2" onclick="notiJoin(0)">การแจ้งเตือนอื่นๆ</h6>
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

        <div class="noti-group" id="notiJoin"> <!-- แจ้งเตือนคำขอเข้าร่วมกิจกรรม -->
        <?php foreach ($parts as $part) { ?>
            <?php if($part["userId"] == $session->get('userId')){?>
            <div class="noti"> <!-- กล่องแจ้งเตือนคำขอเข้าร่วม -->
                <img src="<?php echo $part["userImage"] ?>" class="noti-img-user">

                <div class="noti-text">
                    <a href="#" class="noti-text-username"><?php echo $part["FName"] ?></a>
                    <span class="noti-text-time">2 นาทีที่แล้ว</span>

                    <p class="noti-text-join"><?php echo $part["postTitle"] ?></p>

                    <a href="/acceptPartic/<?php echo $part["partId"] ?>"><button class="noti-btn-yes">ยืนยัน</button></a>
                    <a href="/deletePartic/<?php echo $part["partId"] ?>"><button type="button" class="noti-btn-no" data-bs-toggle="modal" data-bs-target="#exampleModalNoti">
                       ปฏิเสธ 
                    </button></a>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
            
            <div class="noti"> <!-- กล่องแจ้งเตือนการปฏิเสธคำขอเข้าร่วม -->
                <img src="https://cdn.discordapp.com/attachments/778499819072913482/802451103404130314/140456311_896854401129979_6687474046750012869_n.jpg" class="noti-img-user">

                <div class="noti-text">
                    <a href="#" class="noti-text-username">Yannasit</a>
                    <span class="noti-text-time">1 ชั่วโมงที่แล้ว</span>

                    <p class="noti-text-join">ปฏิเสธการเข้าร่วมของคุณเนื่องจาก กิจกรรมนี้ถูกยกเลิก</p>

                </div>
            </div>
        </div>

        <div class="noti-etc" id="notiEtc"> <!-- แจ้งเตือนอื่นๆ -->
            <div class="noti"> <!-- กล่องแจ้งเตือนอื่นๆ การติดตาม -->
                <img src="https://cdn.discordapp.com/attachments/778499819072913482/936575366338838578/5adf240418944669.jpg" class="noti-img-user">

                <div class="noti-text">
                    <a href="#" class="noti-text-username">Nutthapon</a>
                    <span class="noti-text-time">1 ชั่วโมงที่แล้ว</span>

                    <p class="noti-text-join">เริ่มติดตามคุณ</p>

                </div>
            </div>

            <div class="noti"> <!-- กล่องแจ้งเตือนอื่นๆ เตือนการรีวิวจากระบบ -->
                <img src="https://cdn.discordapp.com/attachments/778499819072913482/966615192110764052/bg.jpg" class="noti-img-user">

                <div class="noti-text">
                    <a href="#" class="noti-text-username">แจ้งเตือนจากระบบ</a>
                    <span class="noti-text-time">3 ชั่วโมงที่แล้ว</span>

                    <p class="noti-text-join">มี 1 กิจกรรมที่คุณยังไม่ได้รีวิว</p>

                </div>
            </div>

            <div class="noti"> <!-- กล่องแจ้งเตือนอื่นๆ เตือนการยืนยันตัวตนสำเร็จจากระบบ -->
                <img src="https://cdn.discordapp.com/attachments/778499819072913482/966615192110764052/bg.jpg" class="noti-img-user">

                <div class="noti-text">
                    <a href="#" class="noti-text-username">แจ้งเตือนจากระบบ</a>
                    <span class="noti-text-time">5 วันที่แล้ว</span>

                    <p class="noti-text-join">บัญชีของคุณได้รับการยืนยันตัวตนสำเร็จแล้ว กรุณาออกจากระบบและเข้าสู่ระบบใหม่เพื่อการใช้งานที่มีประสิทธิภาพ</p>

                </div>
            </div>

        </div>

    </div>
</div>

<!------------ ป็อปอัพปฏิเสธ ------------>

<div class="modal fade" id="exampleModalNoti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title noti-modal-title" id="exampleModalLabel">ปฏิเสธคำขอของ
                    <label class="noti-modal-title-username">Kanokphon</label>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body noti-modal-body">
                <label class="noti-modal-title-reason">เหตุผล</label>

                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" onclick="text(1)" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                มีผู้เข้าร่วมครบแล้ว
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" onclick="text(1)">
                            <label class="form-check-label" for="exampleRadios2">
                                กิจกรรมนี้ถูกยกเลิก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option3" onclick="text(0)">
                            <label class="form-check-label" for="exampleRadios2">
                                อื่น ๆ
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option4" onclick="text(1)">
                            <label class="form-check-label" for="exampleRadios1">
                                ก่อกวน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option5" onclick="text(1)">
                            <label class="form-check-label" for="exampleRadios2">
                                ผู้ใช้นี้ไม่ตรงตามเงื่อนไขที่กำหนด
                            </label>
                        </div>
                    </div>
                </div>

                <input type="text" class="form-control noti-modal-input-reason" id="notiInput" placeholder="อื่นๆ.. โปรดระบุเหตุผลที่ปฏิเสธคำขอ">

                <!-- <br />
                <label class="noti-modal-title-reason">เหตุผล</label>
                <input type="text" class="form-control noti-modal-input-reason" placeholder="เหตุผลที่ปฏิเสธคำขอ"> -->

            </div>
            <div class="modal-footer">
                <button type="button" class="noti-modal-btn">ปฏิเสธ</button>
            </div>
        </div>
    </div>
</div>