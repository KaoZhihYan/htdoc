<?php
session_start();

$userName="nuk";
$userPwd="123456";
$adminName="admin";
$adminPwd="654321";

$loginName=$_POST["loginName"];
$loginPwd=$_POST["loginPwd"];

if($userName==$loginName&&$userPwd==$loginPwd){
    echo "Login Success,User";
    $_SESSION["check"]=1;
    $cookiedate=strtotime("+10 seconds");
    setcookie("loginName",$userName,$cookiedate);
    header("Location:form.php");
}else if($adminName==$loginName&&$adminPwd==$loginPwd){
    echo "Login Success,Admin";
    $_SESSION["check"]=0;
    $cookiedate=strtotime("+10 seconds");
    setcookie("loginName",$adminName,$cookiedate);
    header("Location:form.php");
}else{
    echo "Login Failed, will send you back to login again";
    header("Refresh:3;url='login.php'");
}
?>