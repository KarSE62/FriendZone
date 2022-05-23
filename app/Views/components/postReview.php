<?php foreach ($postreviews as $postreview) { ?>
    <div class="card-post">
        <div class="card-post-title1">
            <img src="<?php echo $postreview["userImage"] ?>" class="img-post-profileUser">

            <h6 class="text-post-user"><?php echo $postreview["FName"] . " " . $postreview["LName"] ?> </h6>

            <p class="text-post-title-time"><?php echo $postreview["creation_date"] ?></p>
        </div>
        <div class="card-post-title2">
            <div class="div-post-title">
                <h5 class="text-post-title"><?php echo $postreview["postTitle"] ?></h5>
            </div>
        </div>

        <img src="<?php echo $postreview["imagePost"] ?>" class="card-img-top">

        <div class="card-post-body">
            <div class="row row-post-body">
                <div class="col-8">
                    <i class="far fa-calendar-alt fa-post-calendar"></i>
                    <label class="text-post-date">วันที่ :</label>
                    <span class="span span-post-date">&nbsp;<?php echo $postreview["date_start"] ?>&nbsp;</span>
                    <label class="text-post-date">ถึง</label>
                    <span class="span span-post-date">&nbsp;<?php echo $postreview["date_end"] ?></span>
                    <br />

                    <i class="fas fa-map-marker-alt fa-post-location"></i>
                    <label class="text-post-province">จังหวัด :</label>
                    <span class="span span-post-province">&nbsp;<?php echo $postreview["name_th"] ?></span>

                    <br />

                    <i class="fas fa-users fa-post-numPeople"></i>
                    <label class="text-post-numPeople">ต้องการผู้เข้าร่วม :</label>
                    <span class="span span-post-numPeople">&nbsp;<?php echo $postreview["num_people"] ?> &nbsp; คน</span>
                </div>

                <div class="col-4">
                    <a href="#" class="text-post-viewDetail">รายละเอียดเพิ่มเติม</a>
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
                        <div class="post-comment-title btn-show-comment">
                            <a class="text-post-comment" id="down">
                                <i class="fas fa-star"></i>
                                &nbsp;ดูรีวิว
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="post-line-bottom"></div>
        </div>

        <div class="slidedown slidecomment">

            <?php foreach ($reviews as $review) { ?>
                <?php if ($postreview["postId"] == $review["postId"]) { ?>
                    <div class="div-review">
                        <img class="img-review" src="<?php echo $review["userImage"] ?>">
                        <i class="fas fa-star fa-star-review1"></i>
                        <i class="fas fa-star fa-star-review"></i>
                        <i class="fas fa-star fa-star-review"></i>
                        <i class="fas fa-star fa-star-review"></i>
                        <i class="far fa-star fa-star-review"></i>
                        <div class="div-text-review">
                            <span class="span-review">
                                <a href="#" class="username-review"><?php echo $review["FName"] ?> : </a>
                                <?php echo $review["detail_review"] ?>
                            </span>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>

    </div>

    <br>
<?php } ?>