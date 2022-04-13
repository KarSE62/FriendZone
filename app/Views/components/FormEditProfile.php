<?php
    $sql_provinces = "SELECT * FROM provinces";
    $query1 = mysqli_query($con, $sql_provinces);
?>
    <div class="card cardEditCoverImg">
        <input class="inputCoverImg form-control" type="file" name="" id="formFile">
    </div>
    
    <div class="card cardEditData">

        <div class="row">
            <div class="col-4">
                <img src="<?php echo $user[0]['userImage']; ?>" class="card-img-top editProfileImg" alt="...">
            </div>
        </div>

        <h3 class="TitleEditData">แก้ไขข้อมูล</h3>
        <div class="form-editProfile">
        <form action="/UserController/updateProfile" method="post">
            <div class="row">
                    <input type="hidden" class="form-control" name="userId" value="<?php echo $user[0]['userId']; ?>">
                <div class="col">
                    <h5>ชื่อ</h5>
                    <input type="text" class="form-control" name="FName" value="<?php echo $user[0]['FName']; ?>">
                </div>
                <div class="col">
                    <h5>นามสกุล</h5>
                    <input type="text" class="form-control" name="LName" value="<?php echo $user[0]['LName']; ?>">
                </div>
            </div>

            <br/>
            <h5>ที่อยู่</h5>
            <input type="text" class="form-control" name="address" value="<?php echo $user[0]['address']; ?>" disabled>

            <br/>
            <div class="row">
                <div class="col">
                    <h5>จังหวัด</h5>
                    <select class="form-select select" name="province" id="provinces" disabled>
                        <option selected><?php echo $user[0]['name_th']; ?></option>
                    </select>
                </div>
                <div class="col">
                    <h5>อำเภอ</h5>
                    <select class="form-select select" name="district" id="amphures" disabled>
                        <option selected><?php echo $user[0]['name_th_dis']; ?></option>
                    </select>
                </div>
                <div class="col">
                <h5>ตำบล</h5>
                    <select class="form-select select" name="subDistrict" id="districts" disabled>
                        <option selected><?php echo $user[0]['name_th_am']; ?></option>
                    </select>
                </div>
            </div>

            <br/>
            <h5>เบอร์โทร</h5>
            <input type="text" class="form-control" name="phoneNumber" value="<?php echo $user[0]['phoneNumber']; ?>">

            <br/>
            <h5>อีเมลล์</h5>
            <input type="text" class="form-control" name="email" value="<?php echo $user[0]['email']; ?>">

            <center>
                <button type="submit" class="submitEditProfile">บันทึก</button> &nbsp; &nbsp;
                <button type="button" class="cancelEditProfile"><a href="/showdata">ยกเลิก</a></button>
            </center>
            </form>
        </div>

    </div>
