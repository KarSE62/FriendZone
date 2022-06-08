<!-- Button trigger modal -->
<button type="button" class="btn modalCreatePost-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
    สร้างกิจกรรม
</button>

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
                    
                        <div class="mb-3">
                            <label for="image" class="form-label modalCreatePost-label">รูปกิจกรรม</label>
                            <img id="previewImgCreatePost" class="img-fluid rounded">
                            <form>
                            <input type="file" accept="image/*" id="postImage" name="post_image" class="form-control mt-3">
                            <p>*กรุณาเลือกภาพและกดอัพโหลดรูปภาพ</p>
                            <button type="button" onclick="uploadPostImage()">อัพโหลดรูปภาพ</button>
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
                        <div class="row ">
                            <div class="col-8">
                            <form action="/PostController/createpost" method="post">
                                <div class="mb-3">
                                    <input type="hidden" class="form-control modalCreatePost-input" id="postImageURL" name="imagePost">
                                    <label class="form-label modalCreatePost-label">หัวข้อ</label>
                                    <input type="text" class="form-control modalCreatePost-input" name="postTitle" placeholder="ใส่หัวข้อกิจกรรมของคุณ" required="" oninvalid="this.setCustomValidity('กรุณากรอกหัวข้อโพสต์ประกาศกิจกรรม')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label modalCreatePost-label">หมวดหมู่</label>
                                    <select class="form-select modalCreatePost-input" name="categoryId">
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
                            <input type="text" class="form-control modalCreatePost-input" id="detail1" name="detailPost" placeholder="รายละเอียดเบื้องต้นเกี่ยวกับทริปของคุณ" required="" oninvalid="this.setCustomValidity('กรุณากรอกรายละเอียด')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="mb-3">
                            <label class="form-label modalCreatePost-label">หมายเหตุ</label>
                            <input type="text" class="form-control modalCreatePost-input" id="detail2" name="note" placeholder="หมายเหตุเพิ่มเติม เช่น เพศชายเท่านั้น" required="" oninvalid="this.setCustomValidity('กรุณากรอกหมายเหตุ')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label class="form-label modalCreatePost-label">จำนวนคน</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control modalCreatePost-input modalCreatePost-input-people" name="num_people" required="" oninvalid="this.setCustomValidity('กรุณากรอกจำนวนคน')" oninput="this.setCustomValidity('')">
                                    <span class="input-group-text modalCreatePost-input">คน</span>
                                </div>
                            </div>
                            <div class="col-7">
                                <label class="form-label modalCreatePost-label">ค่าใช้จ่าย</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control modalCreatePost-input modalCreatePost-input-money" name="expenses" required="" oninvalid="this.setCustomValidity('กรุณากรอกค่าใช้จ่าย')" oninput="this.setCustomValidity('')">
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
                            <input class="form-check-input modalCreatePost-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="label form-check-label" for="flexRadioDefault1">
                                ฉันยอมรับ <a href="" class="ok">ข้อตกลง</a> ของการโพสต์หาเพื่อนเที่ยว
                            </label>
                        </div>

                        <center>
                            <button class="btn modalCreatePost-btn-post" type="submit">โพสต์กิจกรรม</button> &nbsp;
                            <a href="/showdata" type="button" class="btn modalCreatePost-btn-cancel">
                                <label>ยกเลิก</label>
                            </a>
                        </center>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('script.php'); ?>
<?php include('scriptDateStart.php'); ?>
<?php include('scriptDateEnd.php'); ?>