<!doctype html>
<html lang="zh-TW">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login_UI.css">
        <title> 開啟團購 </title>

    </head>

    <body>
    <form action = "開啟團購後台.php" method = "POST">
            <h2> 設定您要開啟的團購 </h2>
            </br>
            <label>團購標題：</label>
            <input type = "text" name = "order_title" placeholder = "請輸入團購標題" required></br>

            <label>團購介紹：</label></br>
            <textarea rows="10" cols="35" maxlength = "100" name = "intr" placeholder = "介紹內文" ></textarea></br>

            <label>選擇團購商品：</label>
            <select name="item" >
                <option>請選擇團購商品</option>
                <optgroup label="美食">
                    <option>香脆脆海草條</option>
                    <option>晴晴蘆筍汁</option>
                    <option>甜辣湯</option>
                </optgroup>
                <optgroup label="生活用品">
                    <option>六月花衛生紙</option>
                    <option>多蘇沐浴乳</option>
                    <option>USB馬克杯</option>
                </optgroup>
            </select>
            </br>

            <label>選擇出貨廠商：</label>
            <select name="manufacturer">
                <option>請選擇廠商'</option>
                    <option>AAA</option>
                    <option>BBB</option>
                    <option>CCC</option>
            </select>
            </br>


            <label>截止日期</label>
            <input type = "date" name = "last_date" placeholder = "設定團購訂單截止日期" required></br>

            <button type="reset">重設表單</button>
            <button type = "submit">確認與送出</button>
            <a href="首頁.php">返回</a>

        </form>
    </body>
</html>