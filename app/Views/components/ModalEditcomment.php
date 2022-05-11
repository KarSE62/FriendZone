<?php foreach ($comments as $comment) { ?>
<div class="modal fade" id="editcomment<?php echo $comment["commentId"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">แก้ไขคอมเม้นท์</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/CommentController/editComment" method="post">
        <input type="hidden" class="form-control input-post-footer" name="commentId" value="<?php echo $comment["commentId"] ?>">
        <input type="text" class="form-control input-post-footer" name="Comment" value="<?php echo $comment["commentDetail"] ?>">
        <input type="hidden" class="form-control input-post-footer" name="postId" value="<?php echo $comment["postId"] ?>">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">แก้ไขคอมเม้นท์</button>
          <button type="button" class="btn btn-secondary">ยกเลิก</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <?php } ?>