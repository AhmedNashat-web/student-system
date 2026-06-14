<?php
include 'db.php';
session_start();
require 'auth.php';
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>مرحباً <?php echo $_SESSION['name']; ?></h2>
    <p>هذه صفحة الملف الشخصي</p>
    <a href="logout.php" class="btn btn-danger">تسجيل خروج</a>
</div>

</body>
</html>