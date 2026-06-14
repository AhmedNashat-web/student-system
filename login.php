<?php
include 'db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="fixed-top bg-light">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <i class="fas fa-user-graduate"></i> BrightPath
                </a>
            </div>
        </nav>
    </header>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>تسجيل الدخول</h4>
                    </div>
                    <div class="card-body">
                        <?php if(isset($_GET['error'])): ?>
                            <div class="alert alert-danger">
                                <?php echo $_GET['error']; ?>
                            </div>
                        <?php endif; ?>

                        <form action="validateLogin.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">البريد الإلكتروني</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">كلمة المرور</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">دخول</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="signup.php">ليس لديك حساب؟ إنشاء حساب جديد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>