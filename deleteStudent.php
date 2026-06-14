<?php
include 'db.php';
session_start();
require 'auth.php';
require 'adminAuth.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sql = "DELETE FROM users WHERE id = $id";
    
    if(mysqli_query($conn, $sql)){
        header("Location: admin.php?msg=تم حذف الطالب بنجاح");
    } else {
        header("Location: admin.php?msg=حدث خطأ أثناء الحذف");
    }
} else {
    header("Location: admin.php");
}
exit();
?>