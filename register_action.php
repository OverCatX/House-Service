<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('connect.php');
session_start();
if(isset($_GET['register_submit'])){
    $email = mysqli_real_escape_string($connect,$_GET['email']);
    $username = mysqli_real_escape_string($connect,$_GET['username']);
    $password = mysqli_real_escape_string($connect,$_GET['password']);
    $confirm_password = mysqli_real_escape_string($connect,$_GET['confirm_password']);
    $query_email = "SELECT * FROM `users` WHERE email = '$email'";
    $result_email = mysqli_query($connect,$query_email);
    if(mysqli_num_rows($result_email) == 1){
        ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'error',
        title: 'อีเมลนี้ถูกใช้งานไปแล้ว',
        showConfirmButton: false,
        timer: 1500
    });
});
</script>
<?php
header("refresh:2; url=index.php?page=register");
        return;
    }
    if($password != $confirm_password){
        ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'error',
        title: 'รหัสผ่านไม่ตรงกัน',
        showConfirmButton: false,
        timer: 1500
    });
});
</script>
<?php
header("refresh:2; url=index.php?page=register");
    } else {
        $query = "INSERT INTO `users`(`email`, `password`, `username`) VALUES ('$email','$password','$username')";
        $result = mysqli_query($connect,$query);
        if($result){
        ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'เข้าสู่ระบบสำเร็จ',
        text: 'โปรดเข้าสู่ระบบต่อไป',
        showConfirmButton: false,
        timer: 1500
    });
});
</script>
<?php
header("refresh:2; url=index.php?page=login");
        } else {
            print("404 ERROR..");
        }
    }
}
?>