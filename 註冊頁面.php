<!doctype html>
<html lang="zh-TW">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login_UI.css">
        <title> 註冊 </title>

    </head>

    <body>
        <form action = "註冊頁面後台.php" method = "POST">
            <div class= "boder">
                <p></p>
                <h2> &emsp;&emsp;&emsp;&emsp;註冊 </h2>
            
                <label>&emsp;使用者名稱：</label>
                <input type = "text" name = "us_name" placeholder = "使用者名稱"></br>

                <label>&emsp;&emsp;&emsp;&ensp;e-mail：</label>
                <input type = "text" name = "mail" placeholder = "電子信箱"></br>

                <label>&emsp;&emsp;&emsp;&emsp;密碼：</label>
                <input type = "text" name = "pd" placeholder = "密碼"></br>

                <label>再次輸入密碼：</label>
                <input type = "text" name = "again_pd" placeholder = "再次輸入密碼"></br>

                <button type = "submit">註冊</button>
                <a href="登入頁面.php">已有帳號？</a>
            </div>
        </from>
    </body>
</html>