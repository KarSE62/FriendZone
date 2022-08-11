<?php foreach ($hisparts as $hispart) { ?>
    <div class="card-post">
        <div class="card-post-title1">
            <img src="<?php echo $hispart["userImage"] ?>" class="img-post-profileUser">

            <h6 class="text-post-user"><a href="<?php echo base_url("viewUserProfile"."/". $hispart["userId"] ) ?>" class="text-post-user-a"><?php echo $hispart["FName"] . " " . $hispart["LName"] ?></a> </h6>
            
            <p class="text-post-title-time"><?php echo $hispart["creation_date"] ?></p>
        </div>
        <div class="card-post-title2">
            <div class="div-post-title">
                <h5 class="text-post-title"><?php echo $hispart["postTitle"] ?></h5>
            </div>
        </div>

        <img src="<?php echo $hispart["imagePost"] ?>" class="card-img-top">

        <div class="card-post-body">
            <div class="row row-post-body">
                <div class="col-8">
                    <i class="far fa-calendar-alt fa-post-calendar"></i>
                    <label class="text-post-date">วันที่ :</label>
                    <span class="span span-post-date">&nbsp;<?php echo $hispart["date_start"] ?>&nbsp;</span>
                    <label class="text-post-date">ถึง</label>
                    <span class="span span-post-date">&nbsp;<?php echo $hispart["date_end"] ?></span>

                    <br />

                    <i class="fas fa-map-marker-alt fa-post-location"></i>
                    <label class="text-post-province">จังหวัด :</label>
                    <span class="span span-post-province">&nbsp;<?php echo $hispart["name_th"] ?></span>

                    <br />

                    <i class="fas fa-users fa-post-numPeople"></i>
                    <label class="text-post-numPeople">ต้องการผู้เข้าร่วม :</label>
                    <span class="span span-post-numPeople">&nbsp;<?php echo $hispart["num_people"] ?> &nbsp; คน</span>
                </div>

                <div class="col-4">
                <a href="<?php echo base_url("viewPostDetail"."/". $hispart["postId"] ) ?>" class="text-post-viewDetail">รายละเอียดเพิ่มเติม</a>
                </div>

            </div>

            <div class="post-people-join">
                <i class="fad fa-pennant fa-post-flag"></i>
                <label class="text-post-people-join">ผู้เข้าร่วม :</label>
                <?php foreach ($partsProfile as $partProfile) { ?>
                    <?php if ($hispart["postId"] == $partProfile["postId_post"]) { ?>
                        <img src="<?php echo $partProfile["userImage"] ?>" class="img-post-people-join">
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="post-line"></div>

            <div class="post-bar-bottom">
                <div class="row"> 
                <div class="col">
                        <div class="post-join-title" id="">
                            <i class="fas fa-plus-circle fa-post-join-plus"></i>
                            <a data-bs-target="#review<?php echo $hispart["postId"] ?>" data-bs-toggle="modal" class="text-post-join" href="#">รีวิว</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="post-comment-title btn-show-comment" >
                            <a class="text-post-comment" id="down">
                            <i class="fa-solid fa-comments fa-post-view-comment"></i>
                                &nbsp;ดูความคิดเห็นทั้งหมด
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="post-line-bottom"></div>
        </div>

        <div class="slidedown slidecomment">
        <?php foreach ($comments as $comment) { ?>
            <?php if ($hispart["postId"] == $comment["postId"]) { ?>
            <div class="post-comment-body">
                <img src="<?php echo $comment["userImage"] ?>" class="img-post-user-comment">
                <div class="text-post-user-comment">
                    <span class="span-post-user-comment">
                        <a href="#" class="post-user-comment-username"><?php echo $comment["FName"] ?> : </a>
                        <?php echo $comment["commentDetail"] ?>
                    </span>
                </div>
            </div>
            <?php } ?>
        <?php } ?>

            
        </div>

    </div>

    <br>
<?php } ?>