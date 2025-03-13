<html>
    <head><title>迎新行程與報名表</title>
          <meta charset="utf-8">
    </head>

    <body bgcolor="FAF8D4">
    <style>
            table{
                border-collapse: collapse;
            }
            td{
                padding:20px;
            }
        </style>
        <table border=1>
            <caption>
            <h2>行程表</h2>
            </caption>
                <td></td>
                <th>第一天</th>
                <th>第二天</th>
                <th>第三天</th>
            </tr>
            <tr>
                <th>早</th>
                <td>破冰遊戲</td>
                <td>沙灘遊戲</td>
                <td>水球大戰</td>
            </tr>
            <tr>
                <th>中</th>
                <td>海洋派對</td>
                <td>賭場尋寶</td>
                <td>隱藏活動</td>
            </tr>
            <tr>
                <th>晚</th>
                <td>音樂晚會</td>
                <td>試膽大會</td>
                <td>平安歸程</td>
        </tr>
        </table>

    <h2>報名表單</h2>
    <form action="info.php" method="GET">

        您的姓名:<input type="text" name="uName"><br>
        您的密碼:<input type="text" name="uPassword"><br>
        您的email:<input type="email" name="uEmail"><br>
        選擇一個顏色:<input type="color" name="uColor"><br>
        選擇您的年齡:<input type="number" name="uNumber"><br>
        您的生日:<input type="type" name="uBirth"><br>
        您的網頁:<input type="url" name="uUrl"><br>
        選擇您喜歡此網頁的程度:<input type="range" name="uLike"><br>
        <input type="hidden" name="uSecret" value="hahaha"><br>
        您的生理性別:Male<input type="radio" name="uGender" value="male">
        Female<input type="radio" name="uGender" value="female"><br>
        選擇您的居住城市:
        <select name="uCity">
            <option value=taipei>Taipei</option>
            <option value=taichung>Taichung</option>
            <option value=kaosiung>Kaosiung</option>
        </select><br>
        選擇您的興趣:
        學習<input type="checkbox" name="uInterest[]" value="study">
        睡覺<input type="checkbox" name="uInterest[]" value="sleep">
        玩遊戲<input type="checkbox" name="uInterest[]" value="game"><br>
        留下您的意見:<br>
    <textarea cols="30" rows="10" name="uComment"></textarea><br>

    <input type="submit"><input type="reset">
    </form>

    </body>
</html>
