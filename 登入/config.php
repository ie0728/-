<?php
$link = mysqli_connect('localhost','root', '', 'login');
mysqli_query($link, 'SET NAMES utf8');

if($link === false){
    die("錯誤 : 無法連結資料庫" . mysqli_connect_error());
}
else{
    return $link;
}
?>
