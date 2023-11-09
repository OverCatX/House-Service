<?php
  $timezone = "Asia/Bangkok";
  date_default_timezone_set($timezone);
  $today = date("Y-m-d");
  $convert_date = strtotime($today);
  $month = date('m',$convert_date);
  $year = date('Y',$convert_date);
  $day = date('d',$convert_date);
  $now = $year."-".$month."-".$day;
  $time_now = date("H:i");
//   echo $time_now;
?>
<div class="container" style="height: 20rem;">
    <div class="row justify-content-center">
        <div class="text-center">
            <div id="service-head-section">งานบริการ</div>
            <div id="service-subhead-section">บริการทุกระดับประทับใจ</div>
        </div>
        <div class="col-md-9">
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <form action="index.php" method="get">
                        <div class="modal fade" id="aircondition" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">จอง บริการล้างแอร์ติดผนัง</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-5">
                                            <i class="fa-solid fa-calendar-days"> วันที่</i>
                                            <input type="date" name="date" class="form-control validate"
                                                value=<?php echo $now?> min=<?php echo $now?> required />
                                        </div>
                                        <div class="md-form mb-4">
                                            <i class="fa-solid fa-clock"> เวลา</i>
                                            <input type="time" class="form-control validate" name="time"
                                                value=<?php echo $time_now?> min="" required />
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-info btn-rounded">จองทันที</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow p-3 mb-5 bg-body" style="border-radius: 20px;">
                            <img src="img/aircondition-clean.jpg" class="card-img-top">
                            <div class="card-body" style="text-align: left;">
                                <div id="service-cardhead-section">บริการล้างแอร์ติดผนัง</div>
                                <div> <i class="fa-solid fa-business-time me-1"></i><span
                                        id="service-cardsubhead-section">2
                                        ชั่วโมง</span></div>
                                <div><i class="fa-solid fa-calendar-week me-2"></i><span
                                        id="service-cardsubhead-section">2
                                        เครื่อง</span></div>
                                <input type="hidden" name="name" value="บริการล้างแอร์ติดผนัง">
                                <input type="hidden" name="page" value="service_confirm">
                                <input type="hidden" name="period" value="2">
                                <input type="hidden" name="amount" value="2">
                                <input type="hidden" name="period_tag" value="ชั่วโมง">                                
                                <input type="hidden" name="scale_tag" value="เครื่อง">
                                <input type="hidden" name="price" value="800 บาท">
                                <input type="hidden" name="img" value="aircondition-clean.jpg">
                                <div class="row mt-2">
                                    <a class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#aircondition">จองใช้บริการ</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>  
                <div class="col-md-4">
                    <form action="index.php" method="get">
                        <div class="modal fade" id="clean-house" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">จอง บริการทำความสะอาดบ้าน</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-5">
                                            <i class="fa-solid fa-calendar-days"> วันที่</i>
                                            <input type="date" name="date" class="form-control validate"
                                                value=<?php echo $now?> min=<?php echo $now?> required />
                                        </div>
                                        <div class="md-form mb-4">
                                            <i class="fa-solid fa-clock"> เวลา</i>
                                            <input type="time" class="form-control validate" name="time"
                                                value=<?php echo $time_now?> min="" required />
                                        </div>

                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-info btn-rounded">จองทันที</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow p-3 mb-5 bg-body" style="border-radius: 20px;">
                            <img src="img/clean_house.jpg" class="card-img-top">
                            <div class="card-body">
                                <div id="service-cardhead-section">บริการทำความสะอาดบ้าน</div>
                                <div> <i class="fa-solid fa-business-time me-1"></i><span
                                        id="service-cardsubhead-section">30
                                        นาที</span></div>
                                <div><i class="fa-solid fa-calendar-week me-2"></i><span
                                        id="service-cardsubhead-section">5
                                        ตร.ม</span></div>
                                <input type="hidden" name="name" value="บริการทำความสะอาดบ้าน">
                                <input type="hidden" name="page" value="service_confirm">
                                <input type="hidden" name="period" value="30">
                                <input type="hidden" name="period_tag" value="นาที">                                
                                <input type="hidden" name="scale_tag" value="ตร.ม">
                                <input type="hidden" name="amount" value="5">
                                <input type="hidden" name="price" value="500 บาท">
                                <input type="hidden" name="img" value="clean_house.jpg">
                                <div class="row mt-2">
                                    <a href="" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#clean-house">จองใช้บริการ</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form action="index.php" method="get">
                        <div class="modal fade" id="clean-toliet" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">จอง บริการล้างห้องน้ำ</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-5">
                                            <i class="fa-solid fa-calendar-days"> วันที่</i>
                                            <input type="date" name="date" class="form-control validate"
                                                value=<?php echo $now?> min=<?php echo $now?> required />
                                        </div>
                                        <div class="md-form mb-4">
                                            <i class="fa-solid fa-clock"> เวลา</i>
                                            <input type="time" class="form-control validate" name="time"
                                                value=<?php echo $time_now?> min="" required />
                                        </div>

                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-info btn-rounded">จองทันที</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow p-3 mb-5 bg-body" style="border-radius: 20px;">
                            <img src="img/clean_toliet.jpg" class="card-img-top">
                            <div class="card-body">
                                <div id="service-cardhead-section">บริการล้างห้องน้ำ</div>
                                <div> <i class="fa-solid fa-business-time me-1"></i><span
                                        id="service-cardsubhead-section">1
                                        ชั่วโมง</span></div>
                                <div><i class="fa-solid fa-calendar-week me-2"></i><span
                                        id="service-cardsubhead-section">2
                                        ห้อง</span></div>
                                <input type="hidden" name="name" value="บริการล้างห้องน้ำ">
                                <input type="hidden" name="page" value="service_confirm">
                                <input type="hidden" name="period" value="1">
                                <input type="hidden" name="period_tag" value="ชั่วโมง">                                
                                <input type="hidden" name="scale_tag" value="ห้อง">
                                <input type="hidden" name="amount" value="2">
                                <input type="hidden" name="price" value="300 บาท">
                                <input type="hidden" name="img" value="clean_toliet.jpg">
                                <div class="row mt-2">
                                    <a href="" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#clean-toliet">จองใช้บริการ</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>