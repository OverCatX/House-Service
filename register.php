<div class="container-fluid" style="height: 20rem;">
    <div class="row justify-content-center text-center">
        <div id="login-head">สมัครสมาชิก</div>
        <div id="login-subhead">มีบัญชีอยู่แล้ว? <a href="?page=login">เข้าสู่ระบบ</a></div>
        <div class="col-md-4 mt-3">
            <div class="card shadow-2" style="border-radius: 20px;">
                <div class="card-body">
                    <form action="register_action.php" method="get">
                        <p class="mt-3" id="login-email">อีเมล *</p>
                        <input type="text" id="login-input" name="email" placeholder="กรุณาระบุอีเมล" required>
                        <p class="mt-3" id="login-email">ชื่อ-สกุล *</p>
                        <input type="text" id="login-input" name="username" placeholder="กรุณาระบุชื่อ" required>
                        <p id="login-email">รหัสผ่าน *</p>
                        <input type="text" id="login-input" name="password" placeholder="กรุณาระบุรหัสผ่าน" required>
                        <p id="login-email">ยืนยันรหัสผ่าน *</p>
                        <input type="text" id="login-input" name="confirm_password" placeholder="กรุณาระบุรหัสผ่าน" required>
                        <button type="submit" name="register_submit" class="btn btn-primary btn-block mt-3">เข้าสู่ระบบ</button>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>