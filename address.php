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

        <div id="login-head">ที่อยู่</div>

        <div id="login-subhead">กรุณากรอกที่อยู่ของท่าน</div>

        <div class="col-md-4 mt-3">

            <div class="card shadow-2" style="border-radius: 20px;">

                <div class="card-body">

                    <form action="address_action.php" method="get">

                        <div class="row inline">

                            <?php

                            $sql = "SELECT * FROM `address` WHERE `username` = '$username'";

                            $query = mysqli_query($connect,$sql);

                            $row = mysqli_fetch_row($query);

                            $arr = mysqli_fetch_array($query);

                            // print_r($row);

                            if($row >= 1){

                                ?>

                            <p class="mt-3" id="login-email">บ้านเลขที่</p>

                            <input type="text" id="login-input" name="homenum" placeholder="กรุณาระบุชื่อหมู่บ้าน"

                                value=<?php echo $row[1] ?> required>

                            <p id="login-email">หมู่</p>

                            <input type="text" id="login-input" name="moo" placeholder="กรุณาระบุที่อยู่"

                            value=<?php echo $row[2] ?> required>

                            <p id="login-email">ตำบล</p>

                            <input type="text" id="login-input" name="district" placeholder="กรุณาระบุตำบล" 

                            value=<?php echo $row[3] ?> required>

                            <p id="login-email">อำเภอ</p>

                            <input type="text" id="login-input" name="city" placeholder="กรุณาระบุเมือง" 

                            value=<?php echo $row[4] ?> required>

                            <p id="login-email">จังหวัด</p>

                            <input type="text" id="login-input" name="province" placeholder="กรุณาระบุจังหวัด"

                            value=<?php echo $row[5] ?> required>

                            <p id="login-email">รหัสไปรษณีย์</p>

                            <input type="text" id="login-input" name="zipcode" placeholder="กรุณาระบุรหัสไปรษณีย์"

                            value=<?php echo $row[6] ?> required>

                            <button type="submit" name="address_submit"

                                class="btn btn-success btn-block mt-3">บันทึกที่อยู่</button>

                            <?php

                            } else {

                                

                                ?>

                            <p class="mt-3" id="login-email">บ้านเลขที่</p>

                            <input type="text" id="login-input" name="homenum" placeholder="กรุณาระบุชื่อหมู่บ้าน"

                                required>

                            <p id="login-email">หมู่</p>

                            <input type="text" id="login-input" name="moo" placeholder="กรุณาระบุที่อยู่" required>

                            <p id="login-email">ตำบล</p>

                            <input type="text" id="login-input" name="district" placeholder="กรุณาระบุตำบล" required>

                            <p id="login-email">อำเภอ</p>

                            <input type="text" id="login-input" name="city" placeholder="กรุณาระบุเมือง" required>

                            <p id="login-email">จังหวัด</p>

                            <input type="text" id="login-input" name="province" placeholder="กรุณาระบุจังหวัด" required>

                            <p id="login-email">รหัสไปรษณีย์</p>

                            <input type="text" id="login-input" name="zipcode" placeholder="กรุณาระบุรหัสไปรษณีย์"

                                required>

                            <button type="submit" name="address_submit"

                                class="btn btn-success btn-block mt-3">บันทึกที่อยู่</button>

                            <?php

                            }

                                ?>

                        </div>

                    </form>

                </div>

            </div>

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