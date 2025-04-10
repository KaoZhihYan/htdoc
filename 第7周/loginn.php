<?php
if(isset($_COOKIE["loginName"])){
    echo "Welcome back,".$_COOKIE["loginName"];
}
?>
<h1>請登錄以使用系統</h1>
<form action="logincheckk.php" method="post">
    請輸入您的使用者名稱:<input type="text" name="loginName"><br>
    請輸入密碼:<input type="password" name="loginPwd"><br>
    <input type="submit">

<?php
date_default_timezone_set("Asia/Taipei");
echo "Time now";
echo date("Y-m-d H:i:s");
?>

</form>