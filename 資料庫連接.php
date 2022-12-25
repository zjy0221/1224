<?php
    $主機 = "localhost";
    $管理者 = "root";
    $密碼 = "";
    $資料庫名稱 = "1224";

    $conn = mysqli_connect($主機, $管理者, $密碼, $資料庫名稱);

    if ($conn === false)
    {
        echo "資料庫連接錯誤！";
    }
?>