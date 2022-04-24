<?php foreach ($posts as $post) { ?>
    <div class="card-post">
        <?php if (session()->getFlashdata('Err')) : ?>
            <div>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'ไม่สามารถสร้างโพสต์ได้กรุณารอการยืนยันตัวตน!!',
                    })
                </script>
            </div>
        <?php endif ?>
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
        <div class="card-post-title1">
            <img src="<?php echo $post["userImage"] ?>" class="img-post-profileUser">

            <h6 class="text-post-user"><?php echo $post["FName"] . " " . $post["LName"] ?> </h6>
            <?php if ($post["userId"] == $session->get('userId')) { ?>
                <div class="card-post-dropdown">
                    <a class="dropdown" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown">
                        <i class="fas fa-ellipsis-h"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/editPost/<?php echo $post["postId"] ?>">แก้ไขกิจกรรม</a></li>
                        <li><a class="dropdown-item" href="/deletePost/<?php echo $post["postId"] ?>">ลบโพสต์</a></li>
                    </ul>
                </div>
            <?php } ?>
            <p class="text-post-title-time"><?php echo $post["creation_date"] ?></p>
        </div>
        <div class="card-post-title2">
            <div class="div-post-title">
                <h5 class="text-post-title"><?php echo $post["postTitle"] ?></h5>
            </div>
        </div>

        <img src="<?php echo $post["imagePost"] ?>" class="card-img-top">

        <div class="card-post-body">
            <div class="row row-post-body">
                <div class="col-8">
                    <i class="far fa-calendar-alt fa-post-calendar"></i>
                    <label class="text-post-date">วันที่ :</label>
                    <span class="span span-post-date">&nbsp;<?php echo $post["date_start"] ?>&nbsp;</span>
                    <label class="text-post-date">ถึง</label>
                    <span class="span span-post-date">&nbsp;<?php echo $post["date_end"] ?></span>

                    <br />

                    <i class="fas fa-map-marker-alt fa-post-location"></i>
                    <label class="text-post-province">จังหวัด :</label>
                    <span class="span span-post-province">&nbsp;<?php echo $post["name_th"] ?></span>

                    <br />

                    <i class="fas fa-users fa-post-numPeople"></i>
                    <label class="text-post-numPeople">ต้องการผู้เข้าร่วม :</label>
                    <span class="span span-post-numPeople">&nbsp;<?php echo $post["num_people"] ?> &nbsp; คน</span>
                </div>

                <div class="col-4">
                    <a href="/viewPostDetail/<?php echo $post["postId"] ?>" class="text-post-viewDetail">รายละเอียดเพิ่มเติม</a>
                </div>

            </div>

            <div class="post-people-join">
                <i class="fad fa-pennant fa-post-flag"></i>
                <label class="text-post-people-join">ผู้เข้าร่วม :</label>
                <img src="https://media.discordapp.net/attachments/778499819072913482/936489935022747648/158282142_728598437840104_1157295371700176386_n.jpg?width=493&height=467" class="img-post-people-join">
                <img src="https://media.discordapp.net/attachments/778499819072913482/936575366338838578/5adf240418944669.jpg?width=463&height=467" class="img-post-people-join">
                <img src="https://media.discordapp.net/attachments/778499819072913482/958981116663050270/gus.jpg?width=465&height=467" class="img-post-people-join">
                <img src="https://media.discordapp.net/attachments/778499819072913482/802451103404130314/140456311_896854401129979_6687474046750012869_n.jpg?width=463&height=467" class="img-post-people-join">
            </div>

            <div class="post-line"></div>

            <div class="post-bar-bottom">
                <div class="row">
                    <div class="col">
                        <div class="post-join-title" id="">
                            <i class="fas fa-plus-circle fa-post-join-plus"></i>
                            <a class="text-post-join">เข้าร่วมกิจกรรม</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="post-comment-title btn-show-comment" id="<?php echo $post["postId"] ?>">
                            <a class="text-post-comment" id="down">
                                <i class="fad fa-comments-alt fa-post-view-comment"></i>
                                &nbsp;ดูความคิดเห็นทั้งหมด
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="post-line-bottom"></div>

        </div>

        <div class="slidedown">
            <?php foreach ($comments as $comment) { ?>
                <?php if ($post["postId"] == $comment["postId"]) { ?>
                    <div class="post-comment-body">
                        <img src="<?php echo $comment["userImage"] ?>" class="img-post-user-comment">
                        <div class="text-post-user-comment">
                            <span class="span-post-user-comment">
                                <a href="#" class="post-user-comment-username"><?php echo $comment["FName"] ?> : </a>
                                <?php echo $comment["commentDetail"] ?>
                            </span>
                            <?php if ($comment["userId"] == $session->get('userId')) { ?>
                                <div class="card-post-dropdown-comment">
                                    <a class="dropdown" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown">
                                        <i class="fal fa-ellipsis-h dot-comment"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="/editComment/<?php echo $comment["commentId"] ?>">แก้ไขคอมเม้นท์</a></li>
                                        <li><a class="dropdown-item" href="/deleteComment/<?php echo $comment["commentId"] ?>">ลบคอมเม้นท์</a></li>
                                    </ul>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

            <form action="/CommentController/insertComment" method="post">
                <div class="card-post-footer">
                    <img src="<?php echo $session->get('userImage'); ?>" class="img-post-footer-comment">
                    <input type="hidden" class="form-control input-post-footer" name="postId" value="<?php echo $post["postId"] ?>">
                    <input type="text" class="form-control input-post-footer" name="Comment" placeholder="แสดงความคิดเห็น . . .">
                    <button class="btn-fa-post-inbox"><i class="fas fa-comment-check"></i></i></button>
                </div>
        </div>
        </form>

    </div>

    <br>
<?php } ?>