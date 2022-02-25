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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Save Data</title>

    <link rel="stylesheet" href="/CSS/navbar.css">
    <link rel="stylesheet" href="/CSS/savedata.css">

</head>

<body>
    <?php
    $sql_provinces = "SELECT * FROM provinces";
    $query = mysqli_query($con, $sql_provinces);
    ?>
    <?php require('components/navbar.php'); ?>

    <div class="row">
        <div class="col-4"></div>

        <div class="col-4">
            <div class="form">
                <form action="/UserController/saveGenaral" method="post">
                    <h3>บันทึกข้อมูล</h3>

                    <div class="mb-4">
                        <label for="imgcard" class="form-label">รูปโปรไฟล์</label>
                        <input class="form-control" type="text" name="userImage">
                    </div>

                    <div class="mb-4">
                        <label for="fname" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" name="FName" placeholder="Example : John">
                    </div>

                    <div class="mb-4">
                        <label for="lname" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" name="LName" placeholder="Example : Smith">
                    </div>

                    <div class="mb-4">
                        <label for="birthday" class="form-label">วันเกิด</label>
                        <input type="date" class="form-control" name="birthday">
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
                        <input type="text" class="form-control" name="idCard" placeholder="กรอกรหัสบัตรประชาชน 13 หลัก">
                    </div>

                    <div class="mb-4">
                        <label for="imgcard" class="form-label">รูปบัตรประชาชน</label>
                        <input class="form-control" type="text" name="idCardImage">
                    </div>

                    <div class="mb-4">
                        <label for="expIdCard" class="form-label">วันหมดอายุของบัตรประชาชน</label>
                        <input type="date" class="form-control" name="expIdCard">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label">ที่อยู่</label>
                        <input type="text" class="form-control" name="address" placeholder="กรอกที่อยู่">

                        <div class="row">
                            <div class="col">
                                <select class="form-select" name="province" id="provinces">
                                    <option selected>จังหวัด</option>
                                    <?php foreach ($query as $value) { ?>
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
                        <input class="form-control" type="text" name="phoneNumber" placeholder="082-XXXXXXX">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">อีเมล</label>
                        <input class="form-control" type="email" name="email" placeholder="John032@gmail.com">
                    </div>

                    <center>
                        <button type="submit" class="button">บันทึก</button> &nbsp;
                        <button type="button" class="cancel"><a href="/logout" id="can">ยกเลิก</a></button>
                    </center>

                </form>
            </div>
        </div>

        <div class="col-4"></div>
    </div>

</body>

</html>
<?php include('script.php');?>