<?php
session_start();
?>

<html>
    <head><title>迎新行程與報名表</title>
          <meta charset="utf-8">
    </head>

    <body bgcolor="FAF8D4">
        <?php
        if(isset($_SESSION["check"])&&$_SESSION["check"]==1){
            echo "Welcome! User";
            echo "<a href='logout.php'>Logout</a>";
            echo"<form action='info.php' method='GET'>";

            echo"您的姓名:<input type='text' name='uName'><br>";
            echo"您的密碼:<input type='password' name='uPassword'><br>";
            echo"您的email:<input type='email' name='uEmail'><br>";
            echo"選擇一個顏色:<input type='color' name='uColor'><br>";
            echo"選擇您的年齡:<input type='number' name='uAge' min='0' max='120'><br>";
            echo"您的生日:<input type='date' name='uBirth'><br>";
            //echo"您的網頁:<input type='url' name='uUrl'><br>";
            echo"選擇您喜歡此網頁的程度:<input type='range' name='uLike'><br>";
            echo"<input type='hidden' name='uSecret' value='hahaha'><br>";
            echo"您的生理性別:Male<input type='radio' name='uGender' value='male'>
            Female<input type='radio' name='uGender' value='female'><br>";
            echo"選擇您的居住城市:
            <select name='uCity'>
            <option value=taipei>Taipei</option>
            <option value=taichung>Taichung</option>
            <option value=kaosiung>Kaosiung</option>
            </select><br>";
            echo"選擇您的興趣:
            學習<input type='checkbox' name='uInterest[]' value='study'>
            睡覺<input type='checkbox' name='uInterest[]' value='sleep'>
            玩遊戲<input type='checkbox' name='uInterest[]' value='game'><br>";
            echo"留下您的意見:<br>";
            echo"<textarea cols='30' rows='10' name='uComment'></textarea><br>";

            echo"<input type='submit'><input type='reset'>";
            echo"</form>";
        }else if(isset($_SESSION["check"])&&$_SESSION["check"]==0){
            echo "Welcome! Admin";
            echo "<a href='logout.php'>Logout</a>";
            echo"<form action='info.php' method='GET'>";

            echo"您的姓名:<input type='text' name='uName'><br>";
            echo"您的密碼:<input type='password' name='uPassword'><br>";
            echo"您的email:<input type='email' name='uEmail'><br>";
            echo"您的年級:<select name='uGrade'>
            <option value='大二'>大二</option>
            <option value='大三'>大三</option>
            <option value='大四'>大四</option>
            </select><br>";

            echo"<input type='submit'><input type='reset'>";
            echo"</form>";
        }else{
            echo "Illegal user!";
            header("Refresh:2;url='login.php'");
        }
        ?>

    </body>
</html>