<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    include('connect.php');
    //session_start();
    if(isset($_GET['address_submit'])){
        $homenum = $_GET['homenum'];
        $username = $_SESSION['logged_in']['username'];
        $moo = $_GET['moo'];
        $district =$_GET['district'];
        $city = $_GET['city'];
        $province = $_GET['province'];
        $zipcode = $_GET['zipcode'];
        $sql = "SELECT * FROM `address` WHERE `username` = '$username'";
        $query = mysqli_query($connect,$sql);
        $row = mysqli_fetch_row($query);
        $arr =  mysqli_fetch_array($query);
        if($row >= 1){
            $insert = "UPDATE `address` SET `username`='$username',`house-no`='$homenum',
            `moo`='$moo',`district`='$district',`city`='$city',`province`='$province',`zipcode`='$zipcode' WHERE `username` = '$username'";
            $result = mysqli_query($connect,$insert);
            if($result){
                ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'บันทึกสำเร็จ',
        showConfirmButton: false,
        timer: 1000,
    }).then(function(){
        window.location.href = "index.php?page=address";
    })
});
</script>
<?php
//header("refresh:2; url=index.php?page=address");
            } else {
                echo "404 ERROR";
            }
        } else {
            $insert = "INSERT INTO `address`(`username`, `house-no`, `moo`, `district`, `city`,`province`, `zipcode`) 
            VALUES ('$username','$homenum','$moo','$district','$city','$province','$zipcode')";
            $result = mysqli_query($connect,$insert);
            if($result){
        ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'บันทึกสำเร็จ',
        showConfirmButton: false,
        timer: 1000,
    }).then(function(){
        window.location.href = "index.php?page=address";
    })
});
</script>
<?php
//header("refresh:2; url=index.php?page=address");
            } else {
                echo "404 ERROR";
            }
        }
    }
?>