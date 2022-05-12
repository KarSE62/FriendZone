<?php foreach ($posts as $post) { ?>
    <div class="modal fade" id="report<?php echo $post["postId"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fa-solid fa-circle-exclamation fa-model-report"></i>
                    <h5 class="modal-title modal-report-title" id="staticBackdropLabel">รายงานปัญหา</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-body-report">
                    <form action="/ReportController/requestReport" method="post">
                        <input type="hidden" class="form-control input-title-report" name="postId" value="<?php echo $post["postId"] ?>">

                        <div class="modal-report-div-img">
                            <img src="<?php echo $post["imagePost"] ?>" class="modal-report-img">
                        </div>

                        <label class="text-title-report">เรื่อง</label> <br />
                        <select class="form-select modal-report-select" name="reportTitle">
                            <option selected>เลือกหัวข้อรายงาน</option>
                            <option>หลอกลวง</option>
                            <option>อนาจาร</option>
                            <option>คำหยาบคาย</option>
                        </select>

                        <br />

                        <label class="text-detail-report">ปัญหาที่พบ</label> <br />
                        <textarea class="form-control input-detail-report" name="reportDetail"></textarea>
                        <center>
                            <button type="submit" class="btn modal-report-btn-ok">รายงาน</button>
                            <button type="button" class="btn modal-report-btn-cancel">ยกเลิก</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>