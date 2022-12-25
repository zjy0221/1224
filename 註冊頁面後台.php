<?php
session_start();

require_once "資料庫連接.php";
require_once "會員編號計算.php";

  if(isset($_POST['mail']) && isset($_POST['pd']) && isset($_POST['us_name']) && isset($_POST['again_pd']) )
  {
    function 清理資料($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $e_mail = 清理資料($_POST['mail']);
    $pd = 清理資料($_POST['pd']);
    $uname = 清理資料($_POST['us_name']);
    $re_pd = 清理資料($_POST['again_pd']);


    if(empty($e_mail))
    {
        header("Location:註冊頁面.php?error = 請輸入電子信箱");
        exit();
    }
    else if(empty($pd))
    {
        header("Location:註冊頁面.php?error = 請輸入密碼");
        exit();
    }
    else if(empty($uname))
    {
        header("Location:註冊頁面.php?error = 請輸入暱稱");
        exit();
    }
    else if(empty($re_pd))
    {
        header("Location:註冊頁面.php?error = 請再次輸入密碼");
        exit();
    }
    else if($re_pd !== $pd)
    {
        header("Location:註冊頁面.php?error = 密碼不正確");
        exit();
    }
    else
    {
        $pd = md5($pd); // 加密 密碼

        $sql = "SELECT * FROM member WHERE e_mail = '$e_mail' ";
        $結果 = mysqli_query($conn, $sql);

        if ( mysqli_num_rows( $結果 ) > 0) 
        {
            header("Location:註冊頁面.php?error = 此mail已被用過");
            exit();
        }
        else
        {
            $uid++;
            $sql_2 = "INSERT INTO member (user_id , user_name, e_mail, pd) VALUES ('$uid', '$uname', '$e_mail', '$pd') "; //$sql2 = sql指令
            $結果2 = mysqli_query($conn, $sql_2);

            if($結果2)
            {
                header("Location: 登入頁面.php ? success = 帳號創建成功！" ); // header = 跳轉頁面
                exit();
            }
            else
            {
                header("Location: 註冊頁面.php ? error = 帳號創建失敗！" ); // header = 跳轉頁面
                exit();
            }
        }
    }
  }

  else 
  {
    header("Location:註冊頁面.php");
    exit();
  }
?>