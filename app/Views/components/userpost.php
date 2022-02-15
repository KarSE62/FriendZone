<div class="container">
    <br>
    <div class="row">

        <div class="col-sm-3">

           
<div>
    <div class="card cardimg">
        <img src="" class="">
    </div>

    <div class="card card2">
        <div class="row">
            <div class="col-4">
                <img src="<?php echo $session->get('userImage'); ?>" class="card-img-top profileimg" alt="...">
            </div>
            <div class="col-2">
                <h5>1</h5>
                <h6>โพสต์</h6>
            </div>
            <div class="col-2">
                <h5>48</h5>
                <h6>ผู้ติดตาม</h6>
            </div>
            <div class="col-3">
                <h5>5</h5>
                <h6>กำลังติดตาม</h6>
            </div>
        </div>

        <div class="card-body">
            <h4><?php echo $session->get('userName'); ?></h4>
            <p><?php echo $session->get('FName')." ".$session->get('LName'); ?></p>

            <div class="information">
                <h5>ข้อมูลทั่วไป</h5>

                <label>สถานะ :</label>
                <span><?php if($session->get('statusUser')=="0"){
                    echo "รอการยืนยันตัวตน";
                }else if($session->get('statusUser')=="1"){
                    echo "ยืนยันตัวตนสำเร็จแล้ว";
                } ; ?></span>
                <br/>

                <label>เพศ :</label>
                <span><?php echo $session->get('gender'); ?> </span>
                <i class="far fa-mars" style="color: #1194ff;"></i>
                <!-- <i class="far fa-venus" style="color: #ff5ebc;"></i> --> 
                <!-- <i class="far fa-venus-mars" style="color: #7e2dff;"></i> -->
                <br/>


                <i class="fas fa-map-marker-alt"></i>
                <span><?php echo $session->get('province'); ?></span>
            </div> <!--End information-->
        </div> <!--End card-body-->
    </div> <!--End card2-->

    <a class="btn btn-light">
        <i class="fas fa-cog"> &nbsp;</i>แก้ไขข้อมูลส่วนตัว
    </a>
</div>
        </div>

        <div class="col-sm-6 ">
            <div class="card shadow bg-body rounded">
                <form class="row  ">
                    <div class="col-sm-1  ">
                        <img src="https://cdn.discordapp.com/attachments/778499819072913482/936575366338838578/5adf240418944669.jpg" class="card-img-top" alt="..." id="img-post">
                    </div>
                    <div class="col-sm">
                        <h5 class="card-title">Nutthapon </h5>
                        <p class="text-secondary">เมื่อสักครู่</p>
                    </div>
                    <div class="container">
                        <div class="row ">
                            <div class="col-8">
                                <h4 id="title"> &nbsp;หาเพื่อนเที่ยวเชียงใหม่ในช่วงปีใหม่</h4>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn" id="btn-join">+เข้าร่วม</a>
                            </div>
                        </div>
                    </div>

                </form>

                <div class="card ">
                    <img src="https://img.kaidee.com/prd/20200220/351698349/m/eb03fa3a-0985-46aa-8e06-398867f87423.jpg" class="img-fluid">
                    <div class="card-body text-secondary">

                        <i class="fas fa-calendar-alt "> &nbsp;&nbsp; 29 ธันวาคม 2564 - 1 มกราคม 2565
                        </i>


                        <a href="url" id="a-href">รายละเอียดเพิ่มเติม</a>
                        <br>
                        <i class="fas fa-map-marker-alt"> &nbsp; &nbsp;&nbsp;เชียงใหม่</i>
                        <br>
                        <i class="fas fa-user-friends"> &nbsp; 10 คน</i>
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
                                <img src="https://scontent.fbkk10-1.fna.fbcdn.net/v/t1.6435-9/71324627_788827481534505_6590453897817489408_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeHjKltef0b2-uksii_rjm-RG-rGxd_ttnsb6sbF3-22ezucbcWUH7Iw9CnZ7GA58u_gTr7CEPiy_cyF7APkt8LN&_nc_ohc=vznSd0F00OEAX97VRLh&tn=HscLT6h9xUbAVcLQ&_nc_ht=scontent.fbkk10-1.fna&oh=00_AT81_jfc3HbwfNm7LyQNRmLHOyT7xKcb1B0b52Q5XQ2k7Q&oe=621B7B48" class=" card-img-top" id="img-join">
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