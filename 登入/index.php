<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="index.css">
    <title>登入介面</title>
</head>

<body>
    <h1>登入會員</h1>
    <form method="post" action="login.php">
        帳號<br>
        <input type="text" name="username" class="texttext"><br><br>
        密碼<br>
        <input type="password" name="password" class="texttext"><br><br>
        <input type="submit" value="登入" name="submit"><br><br>
        <a href="register.php">還沒有帳號？現在就註冊！</a>
    </form>
</body>

</html>