
<?php foreach ($posts as $post) { ?>
    <div class="modal fade" id="editpost<?php echo $post["postId"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fas fa-file-edit fa-modal-edit-post"></i>
                    <h5 class="modal-title modalCreatePost-title" id="staticBackdropLabel">แก้ไขรายละเอียดกิจกรรม</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="modalCreatePost-form">
                        <form action="/PostController/editPostSave" method="post" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="image" class="form-label modalCreatePost-label">รูปกิจกรรม</label>
                                <img id="previewImgEditPost" class="modalCreatePost-image-upload img-fluid rounded">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <input type="file" accept="image/*" id="imgInputEditPost" name="post_image" class="form-control modalCreatePost-input-upload">
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="button" class="modalCreatePost-btn-upload" onclick="uploadPostImage()">อัพโหลด</button>
                                    </div>
                                </div>

                                <input type="hidden" class="form-control modalCreatePost-input" id="testimg" name="imagePost" value="<?php echo $post['imagePost'] ?>">
                            </div>

                            <script>
                                let imgInputEditPost = document.querySelector("#imgInputEditPost");
                                let previewImgEditPost = document.querySelector("#previewImgEditPost");

                                imgInputEditPost.onchange = evt => {
                                    const [file] = imgInputEditPost.files;
                                    if (file) {
                                        previewImgEditPost.src = URL.createObjectURL(file);
                                    }
                                }
                            </script>

                            <div class="row ">
                                <div class="col-8">
                                    <div class="mb-3">
                                        <input type="hidden" class="form-control" name="postId" value="<?php echo $post['postId'] ?>">
                                        <label class="form-label modalCreatePost-label">หัวข้อ</label>
                                        <input type="text" class="form-control modalCreatePost-input" name="postTitle" placeholder="ใส่หัวข้อกิจกรรมที่คุณต้องการโพสต์" value="<?php echo $post['postTitle'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label modalCreatePost-label">หมวดหมู่</label>
                                        <select class="form-select modalCreatePost-input" name="categoryId">
                                            <option selected><?php echo $post['name_category'] ?></option>
                                            <?php foreach ($query as $value) { ?>
                                                <option value="<?= $value['categoryId'] ?>"><?= $value['name_category'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label modalCreatePost-label">รายละเอียด</label>
                                <input type="text" class="form-control modalCreatePost-input" id="detail1" name="detailPost" placeholder="รายละเอียดเบื้องต้นเกี่ยวกับทริปของคุณ" value="<?php echo $post['detailPost'] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label modalCreatePost-label">หมายเหตุ</label>
                                <input type="text" class="form-control modalCreatePost-input" id="detail2" name="note" placeholder="หมายเหตุเพิ่มเติม เช่น เพศชายเท่านั้น" value="<?php echo $post['note'] ?>">
                            </div>

                            <div class="row">
                                <div class="col-5">
                                    <label class="form-label modalCreatePost-label">จำนวนคน</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control modalCreatePost-input modalCreatePost-input-people" name="num_people" value="<?php echo $post['num_people'] ?>">
                                        <span class="input-group-text modalCreatePost-input">คน</span>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <label class="form-label modalCreatePost-label">ค่าใช้จ่าย</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control modalCreatePost-input modalCreatePost-input-money" name="expenses" value="<?php echo $post['expenses'] ?>">
                                        <span class="input-group-text modalCreatePost-input">บาท / คน</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label modalCreatePost-label">สถานที่</label>

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

                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label modalCreatePost-label">วันที่ไป</label>
                                    <input type="text" class="form-control modalCreatePost-input" placeholder="วัน/เดือน/ปี" name="date_start" id="date_start" value="<?php echo $post['date_start'] ?>">
                                </div>
                                <div class="col-6">
                                    <label class="form-label modalCreatePost-label">วันที่กลับ</label>
                                    <input type="text" class="form-control modalCreatePost-input" placeholder="วัน/เดือน/ปี" name="date_end" id="date_end" value="<?php echo $post['date_end'] ?>">
                                </div>
                            </div>

                            <div class="edit-post-line"></div>

                            <div class="button">
                                <button class="btn modalCreatePost-btn-post-e" type="submit">แก้ไข</button> &nbsp;
                                <a href="/showdata" type="button" class="btn modalCreatePost-btn-cancel-e">
                                    <label>ยกเลิก</label>
                                </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php include('scriptDateStart.php'); ?>
<?php include('scriptDateEnd.php'); ?>
<?php include('script.php'); ?>
