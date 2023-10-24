<?php
    $name = $_GET['name'];
    $date = $_GET['date'];
    $time = $_GET['time'];
    $period = $_GET['period'];
    $scale = $_GET['amount'];
    $price = $_GET['price'];
    $scale_tag = $_GET['scale_tag'];
    $period_tag = $_GET['period_tag'];
    $img = $_GET['img'];
?>

<div class="container-fluid" style="height: 20rem;">
    <div class="row">
        <div id="service-detail-head-section">รายการชำระเงิน</div>
        <div class="mt-3">
            <form action="service_action.php" method="get">
                <div class="card shadow p-3 mb-5 bg-body" style="border-radius: 20px;">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <img id="service-detail-img-section" src="img/payment.jpg">
                        </div>
                        <div class="text-center mt-3">
                            <hr>
                            <h2><?php echo $name?></h2>
                            <h5>วันที่: <?php echo $date ?></h5>
                            <h5>เวลา: <?php echo $time ?></h5>
                            <h5>ระยะเวลาในการทำงาน: <?php echo $period." ".$period_tag ?></h5>
                            <h5>ขนาด: <?php echo $scale." ". $scale_tag?></h5>
                            <h3>ขนาด: <?php echo $price?></h3>
                            <input type="hidden" name="name" value=<?php echo $name?>>
                            <input type="hidden" name="period" value=<?php echo $period?>>
                            <input type="hidden" name="amount" value=<?php echo $scale ?>>
                            <input type="hidden" name="date" value=<?php echo $date ?>>
                            <input type="hidden" name="time" value=<?php echo $time ?>>
                            <input type="hidden" name="price" value=<?php echo  $price?>>
                            <input type="hidden" name="scale_tag" value=<?php echo  $scale_tag?>>
                            <input type="hidden" name="period_tag" value=<?php echo  $period_tag?>>
                            <input type="hidden" name="img" value=<?php echo  $img?>>
                            <button name="payment_submit" class="btn btn-success">ยืนยันการชำระเงิน</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>