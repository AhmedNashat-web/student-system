<?php
include 'db.php';
session_start();
require 'auth.php';
require 'adminAuth.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $level = $row['level'];
    $major = $row['major'];
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل بيانات الطالب</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>تعديل بيانات الطالب</h2>
    
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="mb-3">
            <label>الاسم</label>
            <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>البريد الإلكتروني</label>
            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>رقم الهاتف</label>
            <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>المستوى</label>
            <select name="level" class="form-control" required>
                <option value="1" <?php if($level == 1) echo 'selected'; ?>>1</option>
                <option value="2" <?php if($level == 2) echo 'selected'; ?>>2</option>
                <option value="3" <?php if($level == 3) echo 'selected'; ?>>3</option>
                <option value="4" <?php if($level == 4) echo 'selected'; ?>>4</option>
                <option value="5" <?php if($level == 5) echo 'selected'; ?>>5</option>
                <option value="6" <?php if($level == 6) echo 'selected'; ?>>6</option>
            </select>
        </div>

        <div class="mb-3">
            <label>التخصص</label>
            <select name="major" class="form-control" required>
                <option value="computer science" <?php if($major == "computer science") echo 'selected'; ?>>Computer Science</option>
                <option value="Engineering" <?php if($major == "Engineering") echo 'selected'; ?>>Engineering</option>
                <option value="medicine" <?php if($major == "medicine") echo 'selected'; ?>>Medicine</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">تحديث البيانات</button>
    </form>
</div>

</body>
</html>