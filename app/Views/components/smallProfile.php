<?php foreach ($users as $user) { ?>
<div class="card sm-profile-card">
    <div class="card-body sm-profile-body">
        <img class="sm-profile-img-user" src="<?php echo $user["userImage"] ?>">
        <label class="sm-profile-username"><?php echo $user["userName"] ?></label>

        <label class="sm-profile-name"> <?php echo $user["FName"] . " " . $user["LName"] ?>
        <?php if($user["gender"]=="ชาย"){ ?>
                <i class="fa-solid fa-mars" style="color: #1194ff;"></i>
            <?php } else if($user["gender"]=="หญิง"){ ?>
                <i class="fa-solid fa-venus" style="color: #ff5ebc;"></i> 
            <?php } else if($user["gender"]=="อื่น") {?>
                <i class="fa-solid fa-mars-and-venus" style="color: #7e2dff;"></i>
            <?php } ?>
        </label>
        <br />        
        <label class="sm-profile-province">
            <i class="fas fa-map-marker-alt" style="color: #ff5ebc;"></i>
            <?php echo $user["name_th"] ?>
        </label>
    </div>
</div>
<?php } ?>