<?php
session_start();

$loginName=$_POST["loginName"];
$loginPwd=$_POST["loginPwd"];

$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱
$sql="SELECT * FROM user WHERE username='".$loginName."' AND password='".$loginPwd."'";
$result=mysqli_query($link, $sql);
$records=mysqli_num_rows($result);
echo $records;

if($records>0){
    echo "Login Success";
    $_SESSION["check"]=1;
    $cookiedate=strtotime("+10 seconds");
    setcookie("loginName",$userName,$cookiedate);
    header("Location:dbtest.php");
}else{
    echo "Login Failed, will send you back to login again";
    header("Refresh:3;url='loginn.php'");
}
?>