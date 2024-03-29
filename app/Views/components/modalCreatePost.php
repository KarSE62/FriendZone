

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modalCreatePost-title" id="exampleModalLabel">สร้างกิจกรรม</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modalCreatePost-form">
                    <!-- รูป กิจกรรม -->
                    <div class="mb-3">
                        <label for="image" class="form-label modalCreatePost-label">รูปกิจกรรม</label>
                        <img id="previewImgCreatePost" class="modalCreatePost-image-upload img-fluid rounded">
                        <form>
                            <div class="row">
                                <div class="col-sm-9">
                                    <input type="file" accept="image/*" id="postImage" name="post_image" class="form-control modalCreatePost-input-upload">
                                </div>
                                <div class="col-sm-3">
                                    <button type="button" class="modalCreatePost-btn-upload" onclick="uploadPostImage()">อัพโหลด</button>
                                </div>
                            </div>

                            <p id="messagePostImage">** กรุณาเลือกภาพที่ต้องการและกดอัพโหลด **</p>
                        </form>
                    </div>
                    <script>
                        let imgInputCreatePost = document.querySelector("#postImage");
                        let previewImgCreatePost = document.querySelector("#previewImgCreatePost");

                        imgInputCreatePost.onchange = evt => {
                            const [file] = imgInputCreatePost.files;
                            if (file) {
                                previewImgCreatePost.src = URL.createObjectURL(file);
                            }
                        }
                    </script>
                    <!-- จบรูปกิจกรรม -->

                    <!-- รูป QRCODE สำหรับติดต่อ -->
                    <label for="image" class="form-label modalCreatePost-label mb-2">รูป QRCode สำหรับติดต่อ</label>
                    <center>
                        <img id="previewImgQRcode" class="modalCreatePost-image-qrcode-upload img-fluid rounded">
                    </center>

                    <form>
                        <div class="row">
                            <div class="col-sm-9">
                                <input type="file" accept="image/*" id="QRcodeImage" name="post_image" class="form-control modalCreatePost-input-upload">
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="modalCreatePost-btn-upload" onclick="uploadQRCode()">อัพโหลด</button>
                            </div>
                        </div>

                        <p id="messageQRCodeImage">** กรุณาเลือกภาพที่ต้องการและกดอัพโหลด **</p>
                    </form>
                </div>
                <script>
                    let imgInputQRCode = document.querySelector("#QRcodeImage");
                    let previewImgQRCode = document.querySelector("#previewImgQRcode");

                    imgInputQRCode.onchange = evt => {
                        const [file] = imgInputQRCode.files;
                        if (file) {
                            previewImgQRCode.src = URL.createObjectURL(file);
                        }
                    }
                </script>
                <!-- จบรูป QRCODE สำหรับติดต่อ -->

                <!-- Form กรอกข้อมูลต่างๆ-->
                <div class="row ">
                    <div class="col-8">
                        <form action="<?php echo base_url(); ?>/PostController/createpost" method="post">
                            <div class="mb-3">
                                <input type="hidden" class="form-control modalCreatePost-input" id="postImageURL" name="imagePost" value="https://media.discordapp.net/attachments/778499819072913482/966615191863296000/bg.jpg?width=676&height=676">
                                <input type="hidden" class="form-control modalCreatePost-input" id="QRCodeURL" name="QRCodeImage" value="https://media.discordapp.net/attachments/778499819072913482/1014787262816468992/qrcode.jpg">
                                <label class="form-label modalCreatePost-label">หัวข้อ</label>
                                <input type="text" class="form-control modalCreatePost-input" name="postTitle" id="postTitle" placeholder="ใส่หัวข้อกิจกรรมของคุณ" required="" oninvalid="this.setCustomValidity('กรุณากรอกหัวข้อโพสต์ประกาศกิจกรรม')" oninput="this.setCustomValidity('')">
                            </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="form-label modalCreatePost-label">หมวดหมู่</label>
                            <select class="form-select modalCreatePost-input" name="categoryId" id="categoryId">
                                <option selected>เลือก</option>
                                <?php foreach ($query as $value) { ?>
                                    <option value="<?= $value['categoryId'] ?>"><?= $value['name_category'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label modalCreatePost-label">รายละเอียด</label>
                    <input type="text" class="form-control modalCreatePost-input" id="detail1" name="detailPost" id="detailPost" placeholder="รายละเอียดเบื้องต้นเกี่ยวกับทริปของคุณ" required="" oninvalid="this.setCustomValidity('กรุณากรอกรายละเอียด')" oninput="this.setCustomValidity('')">
                </div>

                <div class="mb-3">
                    <label class="form-label modalCreatePost-label">หมายเหตุ</label>
                    <input type="text" class="form-control modalCreatePost-input" id="detail2" name="note" id="note" placeholder="หมายเหตุเพิ่มเติม เช่น เพศชายเท่านั้น" required="" oninvalid="this.setCustomValidity('กรุณากรอกหมายเหตุ')" oninput="this.setCustomValidity('')">
                </div>

                <div class="row">
                    <div class="col-5">
                        <label class="form-label modalCreatePost-label">จำนวนคน</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control modalCreatePost-input modalCreatePost-input-people" name="num_people" id="num_people" required="" oninvalid="this.setCustomValidity('กรุณากรอกจำนวนคน')" oninput="this.setCustomValidity('')">
                            <span class="input-group-text modalCreatePost-input">คน</span>
                        </div>
                    </div>
                    <div class="col-7">
                        <label class="form-label modalCreatePost-label">ค่าใช้จ่าย</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control modalCreatePost-input modalCreatePost-input-money" name="expenses" id="expenses" required="" oninvalid="this.setCustomValidity('กรุณากรอกค่าใช้จ่าย')" oninput="this.setCustomValidity('')">
                            <span class="input-group-text modalCreatePost-input">บาท / คน</span>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label modalCreatePost-label">สถานที่</label>

                    <div class="row">
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="province" id="provinces">
                                <option selected>จังหวัด</option>
                                <?php foreach ($query1 as $value_province) { ?>
                                    <option value="<?= $value_province['id'] ?>"><?= $value_province['name_th'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="district" id="amphures">
                                <option selected>อำเภอ</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="subDistrict" id="districts">
                                <option selected>ตำบล</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label class="form-label modalCreatePost-label">วันที่ไป</label>
                        <input type="text" class="form-control modalCreatePost-input" placeholder="วัน/เดือน/ปี" name="date_start" id="date_start" data-date-language="th-th">
                    </div>
                    <div class="col-6">
                        <label class="form-label modalCreatePost-label">วันที่กลับ</label>
                        <input type="text" class="form-control modalCreatePost-input" placeholder="วัน/เดือน/ปี" name="date_end" id="date_end" data-date-language="th-th">
                        
                    </div>
                </div>

                <div class="mb-3 modalCreatePost-text-radio">
                    <input class="form-check-input modalCreatePost-input" type="radio" name="Radio1" id="Radio1">
                    <label class="label form-check-label" for="flexRadioDefault1">
                        ฉันยอมรับ <a href="" class="ok">ข้อตกลง</a> ของการโพสต์หาเพื่อนเที่ยว
                    </label>
                </div>

                <center>
                    <button class="btn modalCreatePost-btn-post" type="submit">โพสต์กิจกรรม</button> &nbsp;
                    <a href="<?php echo base_url("showdata")?>" type="button" class="btn modalCreatePost-btn-cancel">
                        <label>ยกเลิก</label>
                    </a>
                </center>
                </form>
                <!-- จบ Form กรอกข้อมูลต่างๆ-->
            </div>

        </div>
    </div>
</div>
<?php include('script.php'); ?>
<?php include('scriptDateStart.php'); ?>
<?php include('scriptDateEnd.php'); ?>