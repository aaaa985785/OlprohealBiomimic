<?php
// $conn=require_once("db_cn.php");
include('../config/tYe87TDinf_db_cn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    //檢查帳號是否重複
    $check = "SELECT * FROM user WHERE username='$username'";
    if (mysqli_num_rows(mysqli_query($link, $check)) == 0) {
        $sql = "INSERT INTO `user` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password')";
        // "INSERT INTO user (id, username, password)
        // VALUES(NULL,'".$username."','".$password."')";
        if (mysqli_query($link, $sql)) {
            echo "註冊成功!3秒後將自動跳轉頁面<br>";
            echo "<a href='ji3ul42bj4_login.php'>未成功跳轉頁面請點擊此</a>";
            header("refresh:3;url=ji3ul42bj4_login.php");
            exit;
        } else {
            echo "Error creating table: " . mysqli_error($link);
        }
    } else {
        echo "該帳號已有人使用!<br>3秒後將自動跳轉頁面<br>";
        echo "<a href='ji3fm45j4hk4_register.html'>未成功跳轉頁面請點擊此</a>";
        // header('HTTP/1.0 302 Found');
        header("refresh:3;url=ji3fm45j4hk4_register.html", true);
        exit;
    }
}


mysqli_close($link);

?>