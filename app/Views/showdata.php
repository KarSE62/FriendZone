<!DOCTYPE html>
<html lang="en">
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="CSS/navUser.css">
    <link rel="stylesheet" href="CSS/notification.css">
    <link rel="stylesheet" href="CSS/post.css">
    <link rel="stylesheet" href="CSS/cardTrip.css">
    <link rel="stylesheet" href="CSS/cardProfile.css">
    <link rel="stylesheet" href="CSS/profile.css">
    <link rel="stylesheet" href="CSS/modalCreatePost.css">
    <link rel="stylesheet" href="CSS/modalEditComment.css">
    <link rel="stylesheet" href="CSS/report.css">

    <title>Home</title>

</head>

<body>
    <?php require('components/SQLconnect.php'); ?>

    <?php $session = session(); ?>
    <?php require('components/navUser.php'); ?>
    <?php require('components/modalCancelPatic.php'); ?>
    <div class="container">

        <div class="row">
            <div class="col-sm-3">
                <?php require('components/cardProfile.php'); ?>
                <?php require('components/cardTrip.php'); ?>


            </div>
            <div class="col-sm-6 allPost">
                <?php require('components/postUser.php'); ?>

            </div>
            <div class="col-sm-3">
                <?php if ($session->get('statusUser') == "0") {
                    echo '<button type="button" class="btn modalCreatePost-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>
                        สร้างกิจกรรม
                    </button>';
                } else if ($session->get('statusUser') == "1") {
                    echo '<button type="button" class="btn modalCreatePost-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        สร้างกิจกรรม
                    </button>';
                }; ?>

                <?php require('components/modalCreatePost.php'); ?>
                <?php require('components/carousel.php'); ?>
            </div>
            <?php require('components/SocialButton.php'); ?>
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
    </script>
    <?php require('components/modalEditPost.php'); ?>
    <?php require('components/ModalEditcomment.php'); ?>
    <?php require('components/ModalReport.php'); ?>
    
    
</body>


</html>