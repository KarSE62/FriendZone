<!------------ ป็อปอัพปฏิเสธ ------------>
<?php foreach ($parts as $part) { ?>
<div class="modal fade" id="exampleModalNoti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title noti-modal-title" id="exampleModalLabel">ปฏิเสธคำขอของ
                                    <label class="noti-modal-title-username"><?php echo $part["FName"] ?></label>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body noti-modal-body">
                                <label class="noti-modal-title-reason">เหตุผล</label>
                                <form action="<?php echo base_url("ParticController"."/"."deletePartic") ?>" method="post">
                                <input type="hidden" class="form-control noti-modal-input-reason" name="partId" value="<?php echo $part["partId"] ?>" >
                                <input type="hidden" class="form-control noti-modal-input-reason" name="userId_user" value="<?php echo $part["userId"] ?>" >
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cancel" id="exampleRadios1" value="ปฏิเสธการเข้าร่วมของคุณเนื่องจาก มีผู้เข้าร่วมครบแล้ว" onclick="text(1)">
                                            <label class="form-check-label" for="exampleRadios1">
                                                มีผู้เข้าร่วมครบแล้ว
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cancel" id="exampleRadios2" value="ปฏิเสธการเข้าร่วมของคุณเนื่องจาก กิจกรรมนี้ถูกยกเลิก" onclick="text(1)">
                                            <label class="form-check-label" for="exampleRadios2">
                                                กิจกรรมนี้ถูกยกเลิก
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="exampleRadios2" value="option3" onclick="text(0)">
                                            <label class="form-check-label" for="exampleRadios2">
                                                อื่น ๆ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cancel" id="exampleRadios3" value="ปฏิเสธการเข้าร่วมของคุณเนื่องจาก ก่อกวน" onclick="text(1)">
                                            <label class="form-check-label" for="exampleRadios1">
                                                ก่อกวน
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cancel" id="exampleRadios4" value="ปฏิเสธการเข้าร่วมของคุณเนื่องจาก ผู้ใช้นี้ไม่ตรงตามเงื่อนไขที่กำหนด" onclick="text(1)">
                                            <label class="form-check-label" for="exampleRadios2">
                                                ผู้ใช้นี้ไม่ตรงตามเงื่อนไขที่กำหนด
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <input type="text" class="form-control noti-modal-input-reason" name="cancel1" id="notiInput" placeholder="อื่นๆ.. โปรดระบุเหตุผลที่ปฏิเสธคำขอ">

                                <!-- <br />
                                <label class="noti-modal-title-reason">เหตุผล</label>
                                <input type="text" class="form-control noti-modal-input-reason" placeholder="เหตุผลที่ปฏิเสธคำขอ"> -->

                            </div>
                            <div class="modal-footer">
                                <a href="/deletePartic/<?php echo $part["partId"] ?>"><button type="submit" class="noti-modal-btn">ปฏิเสธ</button></a>
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>