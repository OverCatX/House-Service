<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('connect.php');
session_start();
     if(isset($_SESSION['logged_in']['username'])){
        if(isset($_GET['payment_submit'])){
            $name = $_GET['name'];
            $username = $_SESSION['logged_in']['username'];
            $period = $_GET['period'];
            $date = $_GET['date'];
            $time = $_GET['time'];
            $scale = $_GET['amount'];
            $price = $_GET['price'];
            $scale_tag = $_GET['scale_tag'];
            $period_tag = $_GET['period_tag'];
            $img = $_GET['img'];
            $work_end = "";
            $realdate = "วันที่ $date เวลา $time น.";
            if($period_tag == "ชั่วโมง"){ //Hour
                $timer = (int) explode(":",$time)[0] + (int) $period;
                $result_time = $timer.":".explode(":",$time)[1];
                $work_end = "วันที่ $date เวลา $result_time น.";
            } else { //Min
                $timer = (int) explode(":",$time)[1] + (int) $period;
                $result_time = explode(":",$time)[0].":".$timer;
                $work_end = "วันที่ $date เวลา $result_time น.";
            }
            $query = "INSERT INTO `individual_works`(`work_name`, `work_customer`, `worker_name`, `work_date`, `work_period`, `period_tag`, `work_end`, `work_scale`, `scale_tag`, `work_price`, `img`) 
            VALUES ('$name','$username','นางสมศรี ศรีจันทร์','$realdate','$period','$period_tag','$work_end','$scale','$scale_tag','$price','$img')";
            $result = mysqli_query($connect,$query);
            if($result){
            ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'ชำระเงินเสร็จสิ้น',
        showConfirmButton: false,
        timer: 1500
    });
});
</script>
<?php
header("refresh:2; url=index.php?page=followwork");
            } else {
                echo "404 ERROR";
            }
        }
     } else {?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'error',
        title: 'โปรดเข้าสู่ระบบก่อน',
        showConfirmButton: false,
        timer: 2500
    });
});
</script>
<?php
header("refresh:2; url=index.php?page=login");
}
?>