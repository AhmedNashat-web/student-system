<?php
include 'db.php';
session_start();
require 'auth.php';
require 'adminAuth.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id     = $_POST['id'];
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $level  = $_POST['level'];
    $major  = $_POST['major'];

    $sql = "UPDATE users SET 
            name = '$name', 
            email = '$email', 
            phone = '$phone', 
            level = '$level', 
            major = '$major' 
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php?msg=تم تعديل البيانات بنجاح");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>