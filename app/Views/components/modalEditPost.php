<?php foreach ($posts as $post) { ?>
    <div class="modal fade" id="editpost<?php echo $post["postId"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">แก้ไขรายละเอียดกิจกรรม</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body card-body-report">
                        <form action="/PostController/editPostSave" method="post">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="postId" value="<?php echo $post['postId'] ?>">
                                <label class="form-label">หัวข้อ</label>
                                <input type="text" class="form-control" name="postTitle" placeholder="ใส่หัวข้อกิจกรรมที่คุณต้องการโพสต์" value="<?php echo $post['postTitle'] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">หมวดหมู่</label>
                                <select class="custom-select" name="categoryId">
                                    <option selected><?php echo $post['name_category'] ?></option>
                                    <?php foreach ($query as $value) { ?>
                                        <option value="<?= $value['categoryId'] ?>"><?= $value['name_category'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">รูปกิจกรรม</label>
                                <cancel>
                                    <div class="imgact">
                                        <center>
                                            <input class="inputimg form-control" type="file" name="" id="formFile">
                                        </center>
                                    </div>
                                    <input type="text" class="form-control" id="testimg" name="imagePost" value="<?php echo $post['imagePost'] ?>">
                                </cancel>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">รายละเอียด</label>
                                <input type="text" class="form-control" id="detail1" name="detailPost" placeholder="รายละเอียดเบื้องต้นเกี่ยวกับทริปของคุณ" value="<?php echo $post['detailPost'] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">หมายเหตุ</label>
                                <input type="text" class="form-control" id="detail2" name="note" placeholder="หมายเหตุเพิ่มเติม เช่น เพศชายเท่านั้น" value="<?php echo $post['note'] ?>">
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">จำนวนคน</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="num_people" value="<?php echo $post['num_people'] ?>">
                                        <span class="input-group-text">คน</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">ค่าใช้จ่าย</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="expenses" value="<?php echo $post['expenses'] ?>">
                                        <span class="input-group-text">บาท</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">สถานที่</label>

                                <div class="row">
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example" name="province" id="provinces">
                                            <option selected><?php echo $post['name_th'] ?></option>
                                            <?php foreach ($query1 as $value_province) { ?>
                                                <option value="<?= $value_province['id'] ?>"><?= $value_province['name_th'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example" name="district" id="amphures">
                                            <option selected><?php echo $post['name_th_am'] ?></option>

                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example" name="subDistrict" id="districts">
                                            <option selected><?php echo $post['name_th_dis'] ?></option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">วันที่ไป</label>
                                <input type="text" class="form-control modalCreatePost-input" placeholder="วัน/เดือน/ปี" name="date_start" id="date_start" value="<?php echo $post['date_start'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">วันที่กลับ</label>
                                <input type="text" class="form-control modalCreatePost-input" placeholder="วัน/เดือน/ปี" name="date_end" id="date_end" value="<?php echo $post['date_end'] ?>">
                            </div>



                            <center>
                                <button class="btn button" type="submit">แก้ไข</button> &nbsp;
                                <a href="/showdata" type="button" class="btn cancel">
                                    <label>ยกเลิก</label>
                                </a>
                            </center>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php include('scriptDateStart.php');?>
<?php include('scriptDateEnd.php');?>
<?php include('script.php');?>