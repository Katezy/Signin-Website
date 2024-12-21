<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างบัญชีใหม่</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <?php require("Navbar.php");?>

    <!-- Main Content -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h1 class="text-center mb-4">สร้างบัญชีของคุณ</h1>
                    <form action="process-register.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">ชื่อผู้ใช้</label>
                            <input name="username_account" id="username" type="text" class="form-control" placeholder="ชื่อผู้ใช้" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">อีเมล</label>
                            <input name="email_account" id="email" type="email" class="form-control" placeholder="กรอกอีเมล" required>
                        </div>
                        <div class="mb-3">
                            <label for="password1" class="form-label">รหัสผ่านใหม่</label>
                            <input name="password_account1" id="password1" type="password" class="form-control" placeholder="กรอกรหัสผ่านใหม่" required>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">ยืนยันรหัสผ่าน</label>
                            <input name="password_account2" id="password2" type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">สร้างบัญชี</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="form-login.php" class="text-decoration-none">มีบัญชีแล้วใช่ไหม</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
