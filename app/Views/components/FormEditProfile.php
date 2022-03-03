    <div class="card cardEditCoverImg">
        <input class="inputCoverImg form-control" type="file" name="" id="formFile">
    </div>
    
    <div class="card cardEditData">

        <div class="row">
            <div class="col-4">
                <img src="<?php echo $session->get('userImage'); ?>" class="card-img-top editProfileImg" alt="...">
            </div>
        </div>

        <h3 class="TitleEditData">แก้ไขข้อมูล</h3>
        <div class="form-editProfile">
            <div class="row">
                <div class="col">
                    <h5>ชื่อ</h5>
                    <input type="text" class="form-control" name="name" value="<?php echo $session->get('FName'); ?>">
                </div>
                <div class="col">
                    <h5>นามสกุล</h5>
                    <input type="text" class="form-control" name="name" value="<?php echo $session->get('LName'); ?>">
                </div>
            </div>

            <br/>
            <h5>ที่อยู่</h5>
            <input type="text" class="form-control" name="name" value="<?php echo $session->get('address'); ?>">

            <br/>
            <div class="row">
                <div class="col">
                    <select class="form-select select" name="province" id="provinces">
                        <option selected>จังหวัด</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select select" name="district" id="amphures">
                        <option selected>อำเภอ</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select select" name="subDistrict" id="districts">
                        <option selected>ตำบล</option>
                    </select>
                </div>
            </div>

            <br/>
            <h5>เบอร์โทร</h5>
            <input type="text" class="form-control" name="name" value="<?php echo $session->get('phoneNumber'); ?>">

            <center>
                <button type="submit" class="submitEditProfile">บันทึก</button> &nbsp; &nbsp;
                <button type="button" class="cancelEditProfile"><a href="">ยกเลิก</a></button>
            </center>
        </div>

    </div>
