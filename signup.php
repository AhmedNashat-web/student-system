<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب جديد</title>
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
                    <div class="card-header bg-success text-white text-center">
                        <h4>إنشاء حساب جديد</h4>
                    </div>
                    <div class="card-body">
                        <form action="addStudent.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label>الاسم الكامل</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>البريد الإلكتروني</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>كلمة المرور</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>رقم الهاتف</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>المستوى</label>
                                <select name="level" class="form-select" required>
                                    <option value="">اختر المستوى</option>
                                    <option value="1">المستوى 1</option>
                                    <option value="2">المستوى 2</option>
                                    <option value="3">المستوى 3</option>
                                    <option value="4">المستوى 4</option>
                                    <option value="5">المستوى 5</option>
                                    <option value="6">المستوى 6</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>التخصص</label>
                                <select name="major" class="form-select" required>
                                    <option value="computer science">Computer Science</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="medicine">Medicine</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>صورة الطالب</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success w-100">إنشاء الحساب</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>