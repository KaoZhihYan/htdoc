<html>
    <head>
        <meta charset="utf-8">
    </head>
</html>
<?php
$no=$_GET['no'];
$link=mysqli_connect(
    'localhost',
    'root',
    '',
    'school');
$sql="SELECT*FROM info WHERE no='$no'";
mysqli_set_charset($link,'utf8');

if($result=mysqli_query($link,$sql)){
    while($row=mysqli_fetch_assoc($result)){
        $name=$row["username"];
        $password=$row["password"];
        $birthday=$row["birthday"];
    }
}
?>
<form action="updateEx.php" method="POST">
<input type="hidden" name="no" value='<?php echo $no?>'>
    Please input your name:<input type="text" name="sName" value='<?php echo $name?>'><br>
    Please input your password:<input type="text" name="sPwd" value='<?php echo $password?>'><br>
    Please input your birthday:<input type="date" name="sBday" value='<?php echo $birthday?>'><br>
    <input type="submit">
</form>