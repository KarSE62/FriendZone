<!-- StartModal -->
<?php $no = 1;
foreach ($posts as $key => $post) { ?>
<div class="modal fade" id="edit<?= $post["postId"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modalCreatePost-title" id="exampleModalLabel">แก้ไขรายละเอียดกิจกรรม</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                <?php echo form_open('PostController/editPost/'.$post["postId"])?>
                <div class="modalCreatePost-form">
                    <form action="/PostController/createpost" method="post">
                        <div class="row ">
                            <div class="col-8">
                                <div class="mb-3">
                                    <label class="form-label modalCreatePost-label">หัวข้อ</label>
                                    <input type="text" class="form-control modalCreatePost-input" name="postTitle" placeholder="ใส่หัวข้อกิจกรรมของคุณ" value="<?php echo $post["postTitle"] ?>">
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
                            <label class="form-label modalCreatePost-label">รูปกิจกรรม</label>
                            <cancel>
                                <div class="imgact">
                                    <center>
                                        <input class="inputimg form-control" type="file" name="" id="formFile">
                                    </center>
                                </div>
                                <input type="text" class="form-control modalCreatePost-input" id="testimg" name="imagePost">
                            </cancel>
                        </div>

                        <div class="mb-3">
                            <label class="form-label modalCreatePost-label">รายละเอียด</label>
                            <input type="text" class="form-control modalCreatePost-input" id="detail1" name="detailPost" placeholder="รายละเอียดเบื้องต้นเกี่ยวกับทริปของคุณ">
                        </div>

                        <div class="mb-3">
                            <label class="form-label modalCreatePost-label">หมายเหตุ</label>
                            <input type="text" class="form-control modalCreatePost-input" id="detail2" name="note" placeholder="หมายเหตุเพิ่มเติม เช่น เพศชายเท่านั้น">
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label class="form-label modalCreatePost-label">จำนวนคน</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control modalCreatePost-input modalCreatePost-input-people" name="num_people">
                                    <span class="input-group-text modalCreatePost-input">คน</span>
                                </div>
                            </div>
                            <div class="col-7">
                                <label class="form-label modalCreatePost-label">ค่าใช้จ่าย</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control modalCreatePost-input modalCreatePost-input-money" name="expenses">
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

                        <div class="mb-3">
                            <label class="form-label modalCreatePost-label">วันที่ไป</label>
                            <input type="date" class="form-control modalCreatePost-input" id="date_start" name="date_start">
                        </div>
                        <div class="mb-3">
                            <label class="form-label modalCreatePost-label">วันที่กลับ</label>
                            <input type="date" class="form-control modalCreatePost-input" id="date_end" name="date_end">
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
                    <?php } ?>
                </div>
                <?php echo form_close()?>                        
            </div>
        </div>
    </div>
</div>
<!-- EndModal -->
<?php include('script.php'); ?>