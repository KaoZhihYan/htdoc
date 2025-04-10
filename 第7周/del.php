<?php
$no=$_GET["no"];
$link=mysqli_connect(
    'localhost',
    'root',
    '',
    'school');
mysqli_set_charset($link,'utf8');

$sql="DELETE FROM info WHERE no='$no'";
if(mysqli_query($link,$sql)){
    header("Location:dbtest.php");
}if (!$link) {
    die("資料庫連線失敗：" . mysqli_connect_error());
}else{
}
?>