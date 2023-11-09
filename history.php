<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="

    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php

// include('connect.php');

if(isset($_SESSION['logged_in']['username'])){

    $username = $_SESSION['logged_in']['username'];

?>

<div class="container-fluid" style="height: 20rem;">

    <div class="row justify-content-center text-center">

        <div id="history-head">ประวัติการใช้บริการ</div>

        <div id="history-subhead">เช็คประวัติรายการข้างล่างนี้</div>

        <table class="table table-striped">

            <thead>

                <tr>

                    <th scope="col">ชื่อบริการ</th>

                    <th scope="col">ผู้รับผิดชอบ</th>

                    <th scope="col">วันที่</th>

                    <th scope="col" >ขนาด</th>

                </tr>

            </thead>

            <tbody>

                <?php

            $sql = "SELECT * FROM `individual_works` WHERE `work_customer` = '$username'";

            $result = mysqli_query($connect,$sql);

            while($arr = mysqli_fetch_array($result)){

        ?>

                <tr>

                    <td style="font-size: 13px"><?php echo $arr['work_name']?></td>

                    <td style="font-size: 13px"><?php echo $arr['worker_name']?></td>

                    <td style="font-size: 13px"><?php echo $arr['work_date']?></td>

                    <td style="font-size: 13px"><?php echo $arr['work_scale']." ".$arr['scale_tag']?></td>

                </tr>

                <?php

            }

        ?>

            </tbody>

        </table>

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