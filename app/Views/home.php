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
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/post.css">
    <link rel="stylesheet" href="CSS/cardTrip.css">
    <title>Home</title>
</head>

<body>
    <?php require('components/nav.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php require('components/cardTripNoLogin.php'); ?>
            </div>
            <div class="col-md-6 allPost">
                <?php require('components/post.php'); ?>
            </div>
            <div class="col-sm-3">
                <?php require('components/carousel.php'); ?>
            </div>
        </div>
    </div>
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
</body>

</html>