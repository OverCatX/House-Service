<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    session_start();
    unset($_SESSION['logged_in']['username']);
?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'ออกสู่ระบบสำเร็จ',
        showConfirmButton: false,
        timer: 2500
    });
});
</script>
<?php
header("refresh:2; url=index.php");
?>
