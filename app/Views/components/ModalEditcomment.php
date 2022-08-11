<?php foreach ($comments as $comment) { ?>
    <div class="modal fade" id="editcomment<?php echo $comment["commentId"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modal-ecomment-title" id="staticBackdropLabel">แก้ไขความคิดเห็น</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url("CommentController"."/"."editComment")?>" method="post">
                        <input type="hidden" class="form-control input-post-footer" name="commentId" value="<?php echo $comment["commentId"] ?>">
                        <input type="text" class="form-control modal-ecomment-input" name="Comment" value="<?php echo $comment["commentDetail"] ?>">
                        <input type="hidden" class="form-control input-post-footer" name="postId" value="<?php echo $comment["postId"] ?>">

                        <div class="div-modal-ecomment-btn">
                            <button type="submit" class="btn modal-ecomment-btn-ok" data-bs-dismiss="modal">แก้ไข</button>
                            <button type="button" class="btn modal-ecomment-btn-cancel">ยกเลิก</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
<?php } ?>