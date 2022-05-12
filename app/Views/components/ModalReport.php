<?php foreach ($posts as $post) { ?>
<div class="modal fade" id="report<?php echo $post["postId"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">รายงานปัญหา</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="card-body card-body-report">
            <form action="/ReportController/requestReport" method="post">
                <input type="hidden" class="form-control input-title-report" name="postId" value="<?php echo $post["postId"] ?>">
                <img src="<?php echo $post["imagePost"] ?>" style="height: 250px; width: 370px">
                <label class="text-title-report">เรื่อง</label> <br />
                <select class="form-control input-title-report" name="reportTitle">
                    <option selected>เลือกหัวข้อรายงาน</option>
                    <option >หลอกลวง</option>
                    <option >อนาจาร</option>
                    <option >คำหยาบคาย</option>
                </select>

                <br />

                <label class="text-detail-report">ปัญหาที่พบ</label> <br />
                <!-- <input type="text" class="input-detail-report" placeholder=""/> -->
                <textarea class="form-control input-detail-report"  name="reportDetail">

                </textarea>
                <center>
                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    <button type="button" class="btn btn-secondary">ยกเลิก</button>
                </center>
            </form>
        </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>