<html>
    <head>
        <title>迎新行程與報名表</title>
        <meta charset="utf-8">
    </head>

    <body bgcolor="FAF8D4">
        <h1><center>資管之旅</center></h1>
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
        <form action="/form.php" method="post">
            您的姓名:<input name="Name" type="text"><br>
            您的學號:<input name="Id" type="text" placeholder="請輸入小寫字母"><br>
            您的生日:<input name="Birth" type="date"><br>
            對於活動的意見:<br>
            <textarea name="Text"cols="40" rows="15"></textarea><br>
            <input type="submit"><input type="reset">
        </form>
    </body>
</html>