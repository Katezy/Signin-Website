<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            width: 100%;
            max-width: 600px; /* ขยายความกว้าง */
            padding: 2rem;
            margin-top: 5rem; /* เพิ่มระยะห่างจากด้านบน */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            font-size: 1.2rem; /* เพิ่มขนาดฟอนต์ใน input */
            padding: 0.8rem; /* เพิ่มพื้นที่ใน input */
        }
        .btn {
            font-size: 1.2rem; /* เพิ่มขนาดฟอนต์ของปุ่ม */
            padding: 0.8rem; /* เพิ่มพื้นที่ปุ่ม */
        }
    </style>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <?php require("Navbar.php"); ?>

    <!-- Login Form -->
    <div class="d-flex justify-content-center align-items-start">
        <div class="card shadow">
            <h1 class="text-center mb-4">เข้าสู่ระบบ</h1>
            <form action="process-login.php" method="POST">
                <div class="mb-4">
                    <label for="email" class="form-label">อีเมล</label>
                    <input name="email_account" id="email" type="email" class="form-control" placeholder="กรอกอีเมล" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">รหัสผ่าน</label>
                    <input name="password_account" id="password" type="password" class="form-control" placeholder="กรอกรหัสผ่าน" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">เข้าสู่ระบบ</button>
            </form>
            <div class="text-center mt-4">
                <a href="form-register.php" class="text-decoration-none">สร้างบัญชีใหม่</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
