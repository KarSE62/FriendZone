<div class="card card-trip">
    <div class="card-body card-trip-body">

        <h5 class="card-title text-trip-title">ทริปที่น่าสนใจ</h5>
        <?php foreach ($categorys as $category) { ?>
            <h6 class="card-subtitle text-trip-namePlace">#<?php echo $category["name_category"] ?></h6>
            <p class="card-text text-trip-numPost">23 โพสต์</p>
        <?php } ?>


    </div>
</div>