<!doctype html>
<html lang="zh-TW">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login_UI.css">
        <title> 登入 </title>

    </head>

    <body>
    <form id ="login" action = "登入頁面後台.php" method = "POST">
            <h2> &emsp;&emsp;&emsp;&emsp;登入 </h2>

            <?php if(isset($_GET['error'])) { ?>
                <p> 
                    <?php echo $_GET['error']; ?>
                </p>
            <?php } ?>
            
            <p></p>
            </br>
            <label>&emsp;電子信箱：</label>
            <input type = "text" name = "mail" placeholder = "電子信箱"></br>

            <label>&emsp;&emsp;密碼：&emsp;</label>
            <input type = "text" name = "password" placeholder = "密碼"></br>
            </br>        
            <button type = "submit">登入</button>
            <a href="註冊頁面.php">還沒有帳號？</a>

        </form>
    </body>
</html>