<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('connect.php');
if(isset($_SESSION['logged_in']['username'])){
    $username = $_SESSION['logged_in']['username'];
?>
<div class="container" style="height: 20rem;">
    <div class="row justify-content-center">
        <div class="text-center">
            <div id="service-head-section">ติดตามงาน</div>
            <div id="service-subhead-section">บริการทุกระดับประทับใจ</div>
        </div>
        <div class="col-md-10">
            <hr>
            <div class="row">
                <?php
                        $sql = "SELECT * FROM `individual_works` WHERE `work_customer` = '$username'";
                        $result = mysqli_query($connect,$sql);
                        while($arr = mysqli_fetch_array($result)){
                    ?>
                <div class="col-md-4 justify-content-center">
                    <!-- <form action="#" method="get"> -->
                    <div class="modal fade" id="aircondition" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">สถานะ</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body mx-3">
                                    <div class="md-form mb-4 d-grid gap-2 col-6 mx-auto">
                                        <button type="button"
                                            class="btn btn-success btn-rounded btn-blocked">กำลังเตรียมการ</button>
                                        <button type="button" class="btn btn-secondary">กำลังเดินทาง</button>
                                        <button type="button" class="btn btn-secondary">กำลังทำงาน</button>
                                        <button type="button" class="btn btn-secondary">เสร็จสิ้น</button>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button class="btn btn-info btn-rounded">แชทกับพนักงาน</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow p-3 mb-5 bg-body" style="border-radius: 20px;">
                        <img src="img/<?php echo $arr['img']?>" class="card-img-top">
                        <div class="card-body" style="text-align: left;">
                            <div id="followwork_head"><?php echo $arr['work_name']?></div>
                            <div id="followwork_detail">ผู้รับผิดชอบงาน: <?php echo $arr['worker_name']?></div>
                            <div id="followwork_detail">เริ่มงาน: <?php echo $arr['work_date']?></div>
                            <div id="followwork_detail">เสร็จสิ้น: <?php echo $arr['work_end']?></div>
                            <div id="followwork_detail">ระยะเวลาในการทำงาน:
                                <?php echo $arr['work_period']." ".$arr['period_tag']?></div>
                            <div id="followwork_detail">ขนาด: <?php echo $arr['work_scale']." ".$arr['scale_tag']?>
                            </div>
                            <input type="hidden" name="name" value="บริการล้างแอร์ติดพนัง">
                            <input type="hidden" name="page" value="service_confirm">
                            <input type="hidden" name="period" value="2">
                            <input type="hidden" name="amount" value="2">
                            <input type="hidden" name="period_tag" value="ชั่วโมง">
                            <input type="hidden" name="scale_tag" value="เครื่อง">
                            <input type="hidden" name="price" value="800 บาท">
                            <div class="row mt-2">
                                <a class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#aircondition">ติดตามงาน</a>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                <?php
                        }
                    ?>
            </div>
        </div>
    </div>
    <?php
} else {
    ?>
    <script>
    $(document).ready(function() {
        Swal.fire({
            icon: 'error',
            title: 'โปรดเข้าสู่ระบบก่อน',
            showConfirmButton: false,
            timer: 2500
        });
    });
    window.location.href = "index.php?page=login";
    </script>
    <?php
}
?>