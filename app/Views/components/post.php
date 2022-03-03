<div class="container">
    <br>
    <div class="row">

        <div class="col-sm-3">

            <div class="card shadow bg-body rounded">
                <div class="card-body" id="color-text">
                    <h4 class="card-title">ทริปที่น่าสนใจ</h4>

                    <h5 class="card-text">#เกาะช้าง</h>
                        <p class="text-secondary">10โพสต์</p>

                        <h5 class="card-text">#เชียงใหม่</h>
                            <p class="text-secondary">6โพสต์</p>

                            <h5 class="card-text">#น่าน</h>
                                <p class="text-secondary">9โพสต์</p>

                                <h5 class="card-text">#วัดพระแก้ว</h>
                                    <p class="text-secondary">5โพสต์</p>

                                    <h5 class="card-text">#หัวหิน</h>
                                        <p class="text-secondary">16โพสต์</p>

                                        <h5 class="card-text">#พัทยา</h>
                                            <p class="text-secondary">20โพสต์</p>

                                            <h5 class="card-text">#กรุงเทพฯ</h>
                                                <p class="text-secondary">9โพสต์</p>

                                                <h5 class="card-text">#ชะอำ</h>
                                                    <p class="text-secondary">4โพสต์</p>


                </div>
            </div>
        </div>

        <div class="col-sm-6 ">
            
        <?php foreach ($posts as $post) { ?>
            
            <div class="card shadow bg-body rounded">
                <form class="row  ">
                    <div class="col-sm-1  ">
                        <img src="<?php echo $post["userImage"]?>" class="card-img-top" alt="..." id="img-post">
                    </div>
                    <div class="col-sm">
                        <h5 class="card-title"><?php echo $post["FName"]." ".$post["LName"]?> </h5>
                        <p class="text-secondary">เมื่อสักครู่</p>
                    </div>
                    <div class="container">
                        <div class="row ">
                            <div class="col-8">
                                <h4 id="title"> &nbsp;<?php echo $post["postTitle"]?></h4>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn" id="btn-join">+เข้าร่วม</a>
                            </div>
                        </div>
                    </div>

                </form>

                <div class="card  ">
                    <img src="<?php echo $post["imagePost"]?>" class="img-fluid">
                    <div class="card-body text-secondary">

                        <i class="fas fa-calendar-alt "> &nbsp;&nbsp; <?php echo $post["date_start"]." ถึง ".$post["date_end"]?>
                        </i>


                        <a href="url" id="a-href">รายละเอียดเพิ่มเติม</a>
                        <br>
                        <i class="fas fa-map-marker-alt"> &nbsp; &nbsp;&nbsp;<?php echo $post["name_th"]?></i>
                        <br>
                        <i class="fas fa-user-friends"> &nbsp; <?php echo $post["num_people"]?> คน</i>
                    </div>
                    <div class="card-body">
                        <form class="row">
                            <div class="col-sm-2 ">
                                <p id="p-join">ผู้เข้าร่วม : </p>
                            </div>
                            <div class="col-sm-9">
                                <img src="https://cdn.discordapp.com/attachments/778499819072913482/936575366338838578/5adf240418944669.jpg" class="card-img-top" alt="..." id="img-join">
                                <img src="https://cdn.discordapp.com/attachments/778499819072913482/936489935022747648/158282142_728598437840104_1157295371700176386_n.jpg" class="card-img-top" alt="..." id="img-join">
                                <img src="https://cdn.discordapp.com/attachments/778499819072913482/802451103404130314/140456311_896854401129979_6687474046750012869_n.jpg" class="card-img-top" alt="..." id="img-join">
                                
                            </div>
                        </form>
                        <hr>

                        <p id="p-join">ความคิดเห็นทั้งหมด</p>

                        <div class="container">
                            <div class="card ">
                                <form class="row ">
                                    <div class="col-sm-1  ">
                                        <img src="https://cdn.discordapp.com/attachments/778499819072913482/936489935022747648/158282142_728598437840104_1157295371700176386_n.jpg" class="card-img-top" alt="..." id="img-join" class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-sm-5" id="comment">
                                        <p class="card-title">มีค่าใช้จ่ายอะไรบ้างครับ ?</p>
                                    </div>
                                </form>
                            </div>
                            <div class="card ">
                                <form class="row  ">
                                    <div class="col-sm-1  ">
                                        <img src="https://cdn.discordapp.com/attachments/778499819072913482/936575366338838578/5adf240418944669.jpg" class="card-img-top" alt="..." id="img-join">
                                    </div>
                                    <div class="col-sm-5" id="comment">
                                        <p class="card-title">แค่ค่าน้ำมันรถครับ</p>
                                    </div>
                                </form>
                            </div>
                            <br>
                            <div class="form">
                                <form class="row  ">
                                    <div class="input-group mb-3">

                                        <input type="text" class="form-control" placeholder="แสดงความคิดเห็น" aria-label="Recipient's username" aria-describedby="button-addon2">

                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">ส่ง</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
           
            <br>
             <?php } ?>
            
        </div>
        
        <div class="col-sm-3 ">
            <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators ">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="https://img.kapook.com/u/natthida/travel/travel4414_5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>อุทยานแห่งชาติอ่าวพังงา</h5>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.yingpook.com/static/assets/uploads/wp-content/uploads/2020/08/shutterstock_1294829227.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>วัดพระแก้ว</h5>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://mpics.mgronline.com/pics/Images/564000009987801.JPEG" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block   ">
                            <h5>ดอยภูคา</h5>

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>




        </div>



    </div>
</div>