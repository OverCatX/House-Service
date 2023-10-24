<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('connect.php');
session_start();
if(isset($_GET['login_submit'])){
    $email = mysqli_real_escape_string($connect,$_GET['email']);
    $password = mysqli_real_escape_string($connect,$_GET['password']);
    $query = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password' ";
    $result = mysqli_query($connect,$query);
    // print_r(mysqli_num_rows($result));
if (mysqli_num_rows($result) == 1) {
    // print_r("s");
    $username_query = mysqli_query($connect,"SELECT username FROM `users` WHERE email = '$email'");
    $username = mysqli_fetch_array($result)["username"];
    $_SESSION['logged_in']['username'] = $username;
?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'เข้าสู่ระบบสำเร็จ',
        showConfirmButton: false,
        timer: 1500
    });
});
</script>
<?php
header("refresh:2; url=index.php");
} else {
?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'error',
        title: 'เข้าสู่ระบบไม่สำเร็จ',
        text: 'ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด',
        showConfirmButton: false,
        timer: 1500
    });
});
</script>
<?php
header("refresh:2; url=index.php?page=login");
        }
    }
?>