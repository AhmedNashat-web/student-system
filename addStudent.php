<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $level = $_POST['level'];
    $major = $_POST['major'];

    $newFileName = "";

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $file = $_FILES['image'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        $fileEXT = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileEXT, $allowed)) {
            if ($fileSize < 5000000) {
                $newFileName = uniqid("user", true) . "." . $fileEXT;
                $fileDist = "uploads/" . $newFileName;

                if (move_uploaded_file($fileTmpName, $fileDist)) {
                }
            }
        }
    }

    $checkEmail = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");

    if (mysqli_num_rows($checkEmail) > 0) {
        die("البريد الإلكتروني مستخدم مسبقاً");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password, phone, level, major, image, role) 
            VALUES ('$name', '$email', '$hashed_password', '$phone', '$level', '$major', '$newFileName', 0)";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?success=تم إنشاء الحساب بنجاح");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة طالب</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>إضافة طالب جديد</h2>
        <form action="addStudent.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>الاسم</label>
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
                <select name="level" class="form-control" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <div class="mb-3">
                <label>التخصص</label>
                <select name="major" class="form-control" required>
                    <option value="computer science">Computer Science</option>
                    <option value="Engineering">Engineering</option>
                    <option value="medicine">Medicine</option>
                </select>
            </div>

            <div class="mb-3">
                <label>صورة الطالب</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">إضافة</button>
        </form>
    </div>
</body>
</html>