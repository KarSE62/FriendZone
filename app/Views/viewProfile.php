<!DOCTYPE html>
<html lang="en">
<?php
$con = mysqli_connect("localhost", "root", "", "friendzone") or die("Error: " . mysqli_error($con));
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile</title>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/CSS/viewProfile.css">
    <link rel="stylesheet" href="/CSS/cardProfile.css">
    <link rel="stylesheet" href="/CSS/profile.css">
    <link rel="stylesheet" href="/CSS/navUser.css">
    <link rel="stylesheet" href="/CSS/post.css">
    <link rel="stylesheet" href="/CSS/notification.css">
    <link rel="stylesheet" href="/CSS/modalCreatePost.css">
    <link rel="stylesheet" href="/CSS/postReview.css">
    <link rel="stylesheet" href="/CSS/report.css">
    
</head>

<body>
    <?php
    $sql_category = "SELECT * FROM category";
    $query = mysqli_query($con, $sql_category);

    $sql_provinces = "SELECT * FROM provinces";
    $query1 = mysqli_query($con, $sql_provinces);
    ?>
    <?php $session = session(); ?>

    <?php require('components/navUser.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            <?php if (session()->getFlashdata('Success')) : ?>
            <div>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: "<?= session()->getFlashdata('Success') ?>",
                    })
                </script>
            </div>
        <?php endif ?>
                <?php require('components/cardProfile.php'); ?>
                <?php require('components/menuProfile.php'); ?>
            </div>
            <div class="col-sm-6 allPost">
                <div id="divPostMenuProfile">
                    <label class="label-title-post-page">โพสต์</label>
                    <label class="label-num-post-page">ทั้งหมด 13 โพสต์</label>
                    <div class="post-line-bottom"></div>
                    <?php require('components/postUser.php'); ?>
                </div>

                <div id="divActivityMenuProfile">
                    <label class="label-title-activity-page">กิจกรรมที่เคยเข้าร่วม</label>
                    <label class="label-num-post-page">ทั้งหมด 3 โพสต์</label>
                    <div class="post-line-bottom"></div>
                    <?php require('components/postPatic.php'); ?>
                </div>

                <div id="divReviewMenuProfile">
                <label class="label-title-review-page">รีวิว</label>
                    <label class="label-num-post-page">4.9 / 5 คะแนน</label>
                    <div class="post-line-bottom"></div>
                    <?php require('components/postReview.php'); ?>
                </div>

                <div id="divSettingMenuProfile">
                    <label class="label-title-setting-page">ข้อมูลส่วนตัว</label>
                    <div class="post-line-bottom"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <?php require('components/modalCreatePost.php'); ?>
                <?php require('components/carousel.php'); ?>
            </div>
        </div>
    </div>
</body>
<?php require('components/ModalEditPost.php'); ?>
<?php require('components/ModalReview.php'); ?>
</html>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const cardPost = document.querySelector(".allPost");
        let toggle = false;
        cardPost.addEventListener("click", (e) => {
            const target = e.target.closest(".btn-show-comment")
            if (!target) return
            console.log(target.id);
            const card = target.closest(".card-post");
            const slidedown = card.querySelector(".slidedown");
            console.log(toggle);
            if (!toggle) {
                toggle = true;
                slidedown.style.display = "block";
            } else {
                toggle = false;
                slidedown.style.display = "none";
            }
        })
    }, false);

    document.getElementById('divPostMenuProfile').style.display = 'block'
    document.getElementById('divActivityMenuProfile').style.display = 'none'
    document.getElementById('divReviewMenuProfile').style.display = 'none'
    document.getElementById('divSettingMenuProfile').style.display = 'none'

    document.getElementById('div-menu-text-post').addEventListener('click', () => {
        event.preventDefault()
        document.getElementById('divPostMenuProfile').style.display = 'block'
        document.getElementById('divActivityMenuProfile').style.display = 'none'
        document.getElementById('divReviewMenuProfile').style.display = 'none'
        document.getElementById('divSettingMenuProfile').style.display = 'none'
    })
    document.getElementById('div-menu-text-trip').addEventListener('click', () => {
        event.preventDefault()
        document.getElementById('divPostMenuProfile').style.display = 'none'
        document.getElementById('divActivityMenuProfile').style.display = 'block'
        document.getElementById('divReviewMenuProfile').style.display = 'none'
        document.getElementById('divSettingMenuProfile').style.display = 'none'
    })
    document.getElementById('div-menu-text-review').addEventListener('click', () => {
        event.preventDefault()
        document.getElementById('divPostMenuProfile').style.display = 'none'
        document.getElementById('divActivityMenuProfile').style.display = 'none'
        document.getElementById('divReviewMenuProfile').style.display = 'block'
        document.getElementById('divSettingMenuProfile').style.display = 'none'
    })
    document.getElementById('div-menu-text-setting').addEventListener('click', () => {
        event.preventDefault()
        document.getElementById('divPostMenuProfile').style.display = 'none'
        document.getElementById('divActivityMenuProfile').style.display = 'none'
        document.getElementById('divReviewMenuProfile').style.display = 'none'
        document.getElementById('divSettingMenuProfile').style.display = 'block'
    })
</script>