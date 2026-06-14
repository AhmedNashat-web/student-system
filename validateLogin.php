<?php
include 'db.php';
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        
        if(password_verify($password, $row['password'])){
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['logged'] = true;
            
            header("Location: admin.php");  // أو profile.php حسب المحاضرات
            exit();
        } else {
            header("Location: login.php?error=كلمة المرور غير صحيحة");
            exit();
        }
    } else {
        header("Location: login.php?error=البريد الإلكتروني غير مسجل");
        exit();
    }
}
?>