<html>

<head>
<meta charset='utf-8'>
</head>
<form action="add.php" method="POST">
    Please input your name:<input type="text" name="sName"><br>
    Please input your password:<input type="text" name="sPwd"><br>
    Please input your birthday:<input type="date" name="sBday"><br>
    <input type="submit">
</form>

<?php
$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱

//     if ( !mysqli_select_db($link, 'school') )
//     die("無法開啟資料庫!<br/>");
//  else
//     echo "資料庫:開啟成功!<br/>";

$sql = "SELECT * FROM info";

mysqli_set_charset($link, 'utf-8');

if ( $result = mysqli_query($link, $sql)){
    echo "<table border='1'>";
    while( $row = mysqli_fetch_assoc($result)){ 
        echo "<tr>";
        echo "<td>".$row["no"]."</td>".
             "<td>".$row["username"]."</td>".
             "<td>".$row["password"]."</td>".
             "<td>".$row["birthday"]."</td>".
             "<td><a href='del.php?no=".$row["no"]."'>刪除</a></td>".
             "<td><a href='update.php?no=".$row["no"]."'>修改</a></td><br>";
        echo "</tr>";
    }
echo "</table>";


    }



?>

</html>