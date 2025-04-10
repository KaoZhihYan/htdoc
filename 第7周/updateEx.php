<html>
<head>
<meta charset='utf-8'>
</head>

<?php
$no=$_POST['no'];
$sName=$_POST["sName"];
$sPwd=$_POST["sPwd"];
$sBday=$_POST["sBday"];

$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'school');
mysqli_set_charset($link,'utf8');
$sql="UPDATE info SET username='$sName', password='$sPwd', birthday='$sBday' WHERE no='$no'";
if(mysqli_query($link,$sql)){
    header("Location:dbtest.php");
}else{
    echo "SQL錯誤:".mysqli_error($link);
}
?>