<?php 
$ourdata=require_once("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $check="SELECT * FROM user WHERE username='".$username."'";
    if(mysqli_num_rows(mysqli_query($ourdata,$check))==0){
        $sql="INSERT INTO user (username,password)
            VALUES('".$username."','".$password."')";
        
        if(mysqli_query($ourdata, $sql)){
            echo "註冊成功!3秒後將自動跳轉頁面<br>";
            echo "<a href='index.php'>未成功跳轉頁面請點擊此</a>";
            header("refresh:3;url=index.php");
            exit;
        }
        else{
            echo "Error creating table: " . mysqli_error($ourdata);
        }
    }
    else{
        echo "該帳號已有人使用!<br>3秒後將自動跳轉頁面<br>";
        echo "<a href='register.php'>未成功跳轉頁面請點擊此</a>";
        header("refresh:3;url=register.php");
        exit;
    }
}

mysqli_close($ourdata);

function function_alert($message) { 
      
    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>"; 
    
    return false;
} 
?>