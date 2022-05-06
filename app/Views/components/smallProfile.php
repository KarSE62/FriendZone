<?php foreach ($users as $user) { ?>
<div class="card sm-profile-card">
    <div class="card-body sm-profile-body">
        <img class="sm-profile-img-user" src="<?php echo $user["userImage"] ?>">
        <label class="sm-profile-username"><?php echo $user["userName"] ?></label>
        <br />
        <label class="sm-profile-name"> <?php echo $user["FName"] . " " . $user["LName"] ?>
            <!-- <i class="fas fa-mars" style="color: #1194ff;"></i> -->
            <!-- <i class="fas fa-venus" style="color: #ff5ebc;"></i> -->
            <i class="far fa-venus-mars" style="color: #7e2dff;"></i>
        </label>
        <br />
        <label class="sm-profile-province">
            <i class="fas fa-map-marker-alt" style="color: #ff5ebc;"></i>
            <?php echo $user["name_th"] ?>
        </label>
    </div>
</div>
<?php } ?>