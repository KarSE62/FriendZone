<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Edit Data Genaral</title>

    <link rel="stylesheet" href="CSS/navUser.css">
    <link rel="stylesheet" href="CSS/notification.css">
    <link rel="stylesheet" href="CSS/post.css">
    <link rel="stylesheet" href="CSS/profile.css">
    <link rel="stylesheet" href="CSS/formEditProfile.css">
    <link rel="stylesheet" href="CSS/savedata.css">

</head>

<body>
    <?php require('components/SQLconnect.php'); ?> 
    <?php require('components/nav.php'); ?>

    <div class="container">
        <div class="form">

            <h2 class="saveData-title">แก้ไขข้อมูล</h2>

            <div class="row saveData-bigRow">

                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <center>
                        <div class="saveData-border-bgcolor"></div>
                    </center>

                    <center>
                        <img src="<?php echo $data[0]["userImage"] ?>" class="saveData-img-profile-default" id="previewImgSaveDataProfile"></img>
                    </center>

                    <form>
                        <label for="imgcard" class="form-label">รูปโปรไฟล์</label>
                        <div class="row">
                            <div class="col-sm-9">
                                <input type="file" accept="image/*" id="userImage" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="saveData-btn-upload" onclick="uploadProfile()">อัพโหลด</button>
                            </div>
                        </div>
                        <p id="message">** กรุณาเลือกภาพที่ต้องการและกดอัพโหลด **</p>
                    </form>

                    <center>
                        <img src="<?php echo $data[0]["idCardImage"] ?>" id="previewImgSaveDataCard" class="saveData-img-card-default">
                    </center>

                    <form enctype="multipart/form-data">
                        <label for="imgcard" class="form-label mt-4">รูปบัตรประชาชน</label>
                        <div class="row">
                            <div class="col-sm-9">
                                <input type="file" accept="image/*" id="cardImage" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="saveData-btn-upload" onclick="uploadIdCardImage()">อัพโหลด</button>
                            </div>
                        </div>
                        <p id="messageIdCard">** กรุณาเลือกภาพที่ต้องการและกดอัพโหลด **</p>
                    </form>

                    <script>
                        let imgInputSaveDataProfile = document.querySelector("#userImage");
                        let previewImgSaveDataProfile = document.querySelector("#previewImgSaveDataProfile");

                        imgInputSaveDataProfile.onchange = evt => {
                            const [file] = imgInputSaveDataProfile.files;
                            if (file) {
                                previewImgSaveDataProfile.src = URL.createObjectURL(file);
                            }
                        }
                    </script>
                </div>

                <div class="col-sm-6 sub-col">
                    <div class="">
                        <form action="/UserController/saveGenaral" method="post">
                            <input class="form-control" type="hidden" id="userImageURL" name="userImage" value="<?php echo $data[0]["userImage"] ?>">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="fname" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" name="FName" placeholder="First Name" required="" oninvalid="this.setCustomValidity('กรุณากรอกชื่อ')" oninput="this.setCustomValidity('')" value="<?php echo $data[0]["FName"] ?>">
                        </div>

                        <div class="col-sm-6">
                            <label for="lname" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" name="LName" placeholder="Last Name" required="" oninvalid="this.setCustomValidity('กรุณากรอกนามสกุล')" oninput="this.setCustomValidity('')" value="<?php echo $data[0]["LName"] ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="birthday" class="form-label mt-4">วันเกิด</label>
                            <input type="text" class="form-control" name="birthday" id="date_birthday" value="<?php echo $data[0]["birthday"] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="gender" class="form-label mt-4">เพศ</label><br>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="ชาย">
                                <label class="form-check-label" for="flexRadioDefault1">ชาย</label>
                                <i class="fa-solid fa-mars" style="color: #1194ff;"></i>
                            </div>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="หญิง">
                                <label class="form-check-label" for="flexRadioDefault2">หญิง</label>
                                <i class="fa-solid fa-venus" style="color: #ff5ebc;"></i>
                            </div>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="อื่นๆ">
                                <label class="form-check-label" for="flexRadioDefault2">อื่น</label>
                                <i class="fa-solid fa-mars-and-venus" style="color: #7e2dff;"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="idcard" class="form-label mt-4">รหัสบัตรประชาชน</label>
                            <input type="text" class="form-control" name="idCard" placeholder="กรอกรหัสบัตรประชาชน 13 หลัก" required="" oninvalid="this.setCustomValidity('กรุณากรอกรหัสบัตรประจำตัวประชาชน')" oninput="this.setCustomValidity('')" value="<?php echo $data[0]["idCard"] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="expIdCard" class="form-label mt-4">วันหมดอายุของบัตรประชาชน</label>
                            <input type="text" class="form-control" id="date_expCard" name="expIdCard" required="" oninvalid="this.setCustomValidity('กรุณากรอกวันหมดอายุของบัตรประชาชน')" oninput="this.setCustomValidity('')" value="<?php echo $data[0]["expIdCard"] ?>">
                        </div>
                    </div>

                    <label for="exampleFormControlTextarea1" class="form-label mt-4">ที่อยู่ปัจจุบัน</label>
                    <input type="text" class="form-control" name="address" placeholder="กรอก บ้านเลขที่, หมู่ที่, หมู่บ้าน, ตรอก และซอย  " required="" oninvalid="this.setCustomValidity('กรุณากรอกที่อยู่')" oninput="this.setCustomValidity('')" value="<?php echo $data[0]["address"] ?>">

                    <div class="row">
                        <div class="col-sm-4 mt-3">
                            <select class="form-select" name="province" id="provinces">
                                <option selected>จังหวัด</option>
                                <?php foreach ($query_province as $value) { ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['name_th'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-4 mt-3">
                            <select class="form-select" name="district" id="amphures">
                                <option selected>อำเภอ</option>
                            </select>
                        </div>
                        <div class="col-sm-4 mt-3">
                            <select class="form-select" name="subDistrict" id="districts">
                                <option selected>ตำบล</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="email" class="form-label mt-4">อีเมล</label>
                            <input class="form-control" type="email" name="email" placeholder="John032@gmail.com" required="" oninvalid="this.setCustomValidity('กรุณากรอกอีเมล')" oninput="this.setCustomValidity('')" value="<?php echo $data[0]["email"] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="tel" class="form-label mt-4">เบอร์โทร</label>
                            <input class="form-control" type="text" name="phoneNumber" placeholder="082-XXXXXXX" required="" oninvalid="this.setCustomValidity('กรุณากรอกเบอร์โทร')" oninput="this.setCustomValidity('')" value="<?php echo $data[0]["phoneNumber"] ?>">
                        </div>
                    </div>

                    <div class="mb-4">
                        <input class="form-control" type="hidden" id="cardImageURL" name="idCardImage" require value="<?php echo $data[0]["idCardImage"] ?>">
                    </div>

                    <center>
                        <button class="saveData-btn" type="submit">บันทึก</button> &nbsp;
                        <a href="/logout" id="can" class="btn saveData-btn-cancel">ยกเลิก</a>
                    </center>

                    </form>
                </div>

                <script>
                    let imgInputSaveDataCard = document.querySelector("#cardImage");
                    let previewImgSaveDataCard = document.querySelector("#previewImgSaveDataCard");

                    imgInputSaveDataCard.onchange = evt => {
                        const [file] = imgInputSaveDataCard.files;
                        if (file) {
                            previewImgSaveDataCard.src = URL.createObjectURL(file);
                        }
                    }
                </script>
                <div class="col-sm-1"></div>
            </div>



        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script>
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyCjgkfJ_3GT1jgEhCfDfV0qpPtICozgHro",
            authDomain: "friendzone-project-5d1e7.firebaseapp.com",
            projectId: "friendzone-project-5d1e7",
            storageBucket: "friendzone-project-5d1e7.appspot.com",
            messagingSenderId: "881597460300",
            appId: "1:881597460300:web:84fa0548d904e1f87f69e9",
            measurementId: "G-KQSCY21RYD"
        };

        // Initialize Firebase
        const app = firebase.initializeApp(firebaseConfig);
    </script>
    <script type="text/javascript" src="js/uploadimage.js"></script>
    <?php include('script.php'); ?>
    <?php include('scriptBirthday.php'); ?>
    <?php include('scriptExpCard.php'); ?>
</body>

</html>