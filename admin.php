<?php
include 'db.php';
session_start();
require 'auth.php';
require 'adminAuth.php';
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم - الطلاب</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">لوحة تحكم المشرف - قائمة الطلاب</h2>

        <?php if(isset($_GET['msg'])): ?>
            <div class="alert alert-info">
                <?php echo $_GET['msg']; ?>
            </div>
        <?php endif; ?>

        <a href="addStudent.php" class="btn btn-success mb-3">إضافة طالب جديد</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>الاسم</th>
                    <th>البريد الإلكتروني</th>
                    <th>رقم الهاتف</th>
                    <th>المستوى</th>
                    <th>التخصص</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, name, email, phone, level, major FROM users";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result)):
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['level']; ?></td>
                    <td><?php echo $row['major']; ?></td>
                    <td>
                        <a href="editStudent.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">تعديل</a>
                    </td>
                    <td>
                        <a href="deleteStudent.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>