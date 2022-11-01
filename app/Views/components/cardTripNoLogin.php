<div class="card card-trip">
    <div class="card-body card-trip-body">

        <h5 class="card-title text-trip-title">ทริปที่น่าสนใจ</h5>
        <?php foreach ($query as $value) { ?>
            <a class="card-subtitle text-trip-namePlace" href="#">#<?= $value['name_category'] ?></a>
            <p class="card-text text-trip-numPost">โพสต์</p>
        <?php } ?>

    </div>
</div>