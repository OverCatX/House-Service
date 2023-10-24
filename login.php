<div class="container-fluid" style="height: 20rem;">
    <div class="row justify-content-center text-center">
        <div id="login-head">เข้าสู่ระบบ</div>
        <div id="login-subhead">ยังไม่ได้เข้าสู่ระบบ? <a href="?page=register">สมัครสมาชิก</a></div>
        <div class="col-md-4 mt-3">
            <div class="card shadow-2" style="border-radius: 20px;">
                <div class="card-body">
                    <form action="login_action.php" method="get">
                        <p class="mt-3" id="login-email">อีเมล *</p>
                        <input type="text" id="login-input" name="email" placeholder="กรุณาระบุอีเมล" required>
                        <p id="login-email">รหัสผ่าน *</p>
                        <input type="text" id="login-input" name="password" placeholder="กรุณาระบุรหัสผ่าน" required>
                        <button type="submit" name="login_submit"
                            class="btn btn-primary btn-block mt-3">เข้าสู่ระบบ</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>