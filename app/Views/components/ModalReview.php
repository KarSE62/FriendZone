<?php foreach ($hisparts as $hispart) { ?>
    <div class="modal fade" id="review<?php echo $hispart["postId"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fas fa-star fa-star-title-review"></i>
                    <h5 class="modal-title modal-report-title" id="staticBackdropLabel">รีวิว</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-body-report">
                    <form action="<?php echo base_url("ReviewController"."/"."Review" )?>" method="post">
                        <h5 class="modal-title modal-report-title" id="staticBackdropLabel"><?php echo $hispart["postTitle"] ?></h5>
                        <input type="hidden" class="form-control input-title-report" name="postId" value="<?php echo $hispart["postId"] ?>">

                        <div class="modal-report-div-img">
                            <img src="<?php echo $hispart["imagePost"] ?>" class="modal-report-img">
                        </div>

                        <label class="text-title-report">คะแนน</label> <br />
                        <select class="form-select modal-report-select" name="point">
                            <option selected>5</option>
                            <option>4</option>
                            <option>3</option>
                            <option>2</option>
                            <option>1</option>
                        </select>

                        <br />

                        <label class="text-detail-report">รายละเอียดรีวิว</label> <br />
                        <textarea class="form-control input-detail-report" name="detail_review"></textarea>
                        <center>
                            <button type="submit" class="btn modal-review-btn-ok">รีวิว</button>
                            <button type="button" class="btn modal-review-btn-cancel">ยกเลิก</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>