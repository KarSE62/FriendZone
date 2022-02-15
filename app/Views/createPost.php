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

    <title>Create Post Page</title>

    <link rel="stylesheet" href="/CSS/navbar.css">
    <link rel="stylesheet" href="/CSS/createPost.css">
</head>

<body>
    <?php require('components/navbar.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="form">
                    <form>
                        <h3>สร้างกิจกรรม</h3>

                        <div class="mb-3">
                            <label class="form-label">หัวข้อ</label>
                            <input type="text" class="form-control" name"" placeholder="ใส่หัวข้อกิจกรรมที่คุณต้องการโพสต์">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">หมวดหมู่</label>
                            <div class="form-check">
                                <img src="">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Loop Activity Type
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">รูปกิจกรรม</label>
                            <cancel>
                                <div class="imgact">
                                    <center>
                                        <input class="inputimg form-control" type="file" name="" id="formFile">
                                    </center>
                                </div>
                                <input type="text" class="form-control" id="testimg" name"" >
                            </cancel>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">รายละเอียด</label>
                            <input type="text" class="form-control" id="detail1" name"" placeholder="รายละเอียดเบื้องต้นเกี่ยวกับทริปของคุณ">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">หมายเหตุ</label>
                            <input type="text" class="form-control" id="detail2" name"" placeholder="หมายเหตุเพิ่มเติม เช่น เพศชายเท่านั้น">
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">จำนวนคน</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="">
                                    <span class="input-group-text">คน</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label">ค่าใช้จ่าย</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="">
                                    <span class="input-group-text">บาท</span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">สถานที่</label>

                            <div class="row">
                                <div class="col">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>จังหวัด</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>อำเภอ</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>ตำบล</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">วันที่ไป</label>
                            <input type="date" class="form-control" id="birthday">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">วันที่กลับ</label>
                            <input type="date" class="form-control" id="birthday">
                        </div>

                        <div class="mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="label form-check-label" for="flexRadioDefault1">
                                ฉันยอมรับ <a href="" class="ok">ข้อตกลง</a> ของการโพสต์หาเพื่อนเที่ยว
                            </label>
                        </div>

                        <center>
                            <a href="" type="submit" class="btn button">
                                <label>โพสต์</label>
                            </a> &nbsp;
                            <a href="" type="button" class="btn cancel">
                                <label>ยกเลิก</label>
                            </a>
                        </center>

                    </form>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>