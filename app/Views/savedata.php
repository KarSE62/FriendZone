<!DOCTYPE html>
<html lang="en">

<?php
$con = mysqli_connect("localhost", "root", "", "friendzone") or die("Error: " . mysqli_error($con));
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1483030a44.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Save Data</title>

    <link rel="stylesheet" href="/CSS/nav.css">
    <link rel="stylesheet" href="/CSS/savedata.css">

</head>

<body>
    <?php
    $sql_provinces = "SELECT * FROM provinces";
    $query_province = mysqli_query($con, $sql_provinces);



    ?>
    <?php require('components/nav.php'); ?>

    <div class="row">
        <div class="col-4">

        </div>

        <div class="col-4">
            <div class="form">
                
                    <h3>บันทึกข้อมูล</h3>
                    <label for="imgcard" class="form-label">รูปโปรไฟล์</label>
                    <img id="previewImgSaveDataProfile" class="img-fluid rounded">
                    <form>
                        <input type="file" accept="image/*" id="userImage" class="form-control mt-3" >
                        <p>*กรุณาเลือกภาพและกดอัพโหลดรูปภาพ</p>
                        <button type="button" onclick="uploadProfile()">อัพโหลดรูปภาพ</button>
                    </form>
                    <label for="imgcard" class="form-label">รูปบัตรประชาชน</label>
                    <img id="previewImgSaveDataCard" class="img-fluid rounded">
                    <form enctype="multipart/form-data">
                        <input type="file" accept="image/*" id="cardImage" class="form-control mt-3">
                        <p>*กรุณาเลือกภาพและกดอัพโหลดรูปภาพ</p>
                        <button type="button" onclick="uploadIdCardImage()">อัพโหลดรูปภาพ</button>
                    </form>
                    <div class="mb-4">
                    <form action="/UserController/saveGenaral" method="post">
                        <input class="form-control" type="hidden" id="userImageURL" name="userImage" >
                    </div>
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

                    <div class="mb-4">
                        <label for="fname" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" name="FName" placeholder="Example : John" required="" oninvalid="this.setCustomValidity('กรุณากรอกชื่อ')" oninput="this.setCustomValidity('')">
                    </div>

                    <div class="mb-4">
                        <label for="lname" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" name="LName" placeholder="Example : Smith" required="" oninvalid="this.setCustomValidity('กรุณากรอกนามสกุล')" oninput="this.setCustomValidity('')">
                    </div>

                    <div class="mb-4">
                        <label for="birthday" class="form-label">วันเกิด</label>
                        <input type="date" class="form-control" name="birthday" require>
                    </div>

                    <div class="mb-4">
                        <label for="gender" class="form-label">เพศ</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="ชาย">
                            <label class="form-check-label" for="flexRadioDefault1">ชาย</label>
                            <i class="far fa-mars" style="color: #1194ff;"></i>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="หญิง">
                            <label class="form-check-label" for="flexRadioDefault2">หญิง</label>
                            <i class="far fa-venus" style="color: #ff5ebc;"></i>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="อื่นๆ">
                            <label class="form-check-label" for="flexRadioDefault2">อื่น</label>
                            <i class="far fa-venus-mars" style="color: #7e2dff;"></i>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="idcard" class="form-label">รหัสบัตรประชาชน</label>
                        <input type="text" class="form-control" name="idCard" placeholder="กรอกรหัสบัตรประชาชน 13 หลัก" required="" oninvalid="this.setCustomValidity('กรุณากรอกรหัสบัตรประจำตัวประชาชน')" oninput="this.setCustomValidity('')">
                    </div>

                    <div class="mb-4">

                        <input class="form-control" type="hidden" id="cardImageURL" name="idCardImage" require>
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

                    <div class="mb-4">
                        <label for="expIdCard" class="form-label">วันหมดอายุของบัตรประชาชน</label>
                        <input type="date" class="form-control" name="expIdCard" required="" oninvalid="this.setCustomValidity('กรุณากรอกวันหมดอายุของบัตรประชาชน')" oninput="this.setCustomValidity('')">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label">ที่อยู่</label>
                        <input type="text" class="form-control" name="address" placeholder="กรอกที่อยู่" required="" oninvalid="this.setCustomValidity('กรุณากรอกที่อยู่')" oninput="this.setCustomValidity('')">

                        <div class="row">
                            <div class="col">
                                <select class="form-select" name="province" id="provinces">
                                    <option selected>จังหวัด</option>
                                    <?php foreach ($query_province as $value) { ?>
                                        <option value="<?= $value['id'] ?>"><?= $value['name_th'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select" name="district" id="amphures">
                                    <option selected>อำเภอ</option>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select" name="subDistrict" id="districts">
                                    <option selected>ตำบล</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="tel" class="form-label">เบอร์โทร</label>
                        <input class="form-control" type="text" name="phoneNumber" placeholder="082-XXXXXXX" required="" oninvalid="this.setCustomValidity('กรุณากรอกเบอร์โทร')" oninput="this.setCustomValidity('')">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">อีเมล</label>
                        <input class="form-control" type="email" name="email" placeholder="John032@gmail.com" required="" oninvalid="this.setCustomValidity('กรุณากรอกอีเมล')" oninput="this.setCustomValidity('')">
                    </div>

                    <center>
                        <button class="button" type="submit">บันทึก</button> &nbsp;
                        <button type="button" class="cancel"><a href="/logout" id="can">ยกเลิก</a></button>
                    </center>

                </form>
            </div>
        </div>

        <div class="col-4">

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
</body>

</html>