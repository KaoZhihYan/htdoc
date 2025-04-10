<html>
    <head>
        <meta charset="utf-8">
    </head>
</html>
<?php
$sName=$_POST['sName'];
$sPwd=$_POST['sPwd'];
$sBday=$_POST['sBday'];

$link=mysqli_connect(
    'localhost',
    'root',
    '',
    'school');
mysqli_set_charset($link,'utf8');
$sql="INSERT INTO info(username,password,birthday) VALUE('$sName','$sPwd','$sBday')";
if(mysqli_query($link,$sql)){
    header("Location:dbtest.php");
}else{
}
?>