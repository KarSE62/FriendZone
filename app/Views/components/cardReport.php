<div class="card card-report">
    <div class="card-header-report">
        <label class="text-header-report">รายงานปัญหา</label>
    </div>
    <?php foreach ($posts as $post) { ?>
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
                    <button type="submit" class="btn-ok-report">ยืนยัน</button>
                    <button type="button" class="btn-cancel-report">ยกเลิก</button>
                </center>
            </form>
        </div>
    <?php } ?>
</div>