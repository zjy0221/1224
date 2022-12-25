<?php
session_start();

require_once "資料庫連接.php";


  if(isset($_POST['mail']) && isset($_POST['password']))
  {
    function 清理資料($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $e_mail = 清理資料($_POST['mail']);
    $pd = 清理資料($_POST['password']);

    if(empty($e_mail))
    {
        header("Location:登入頁面.php?error = 請輸入電子信箱");
        exit();
    }
    else if(empty($pd))
    {
        header("Location:登入頁面.php?error = 請輸入密碼");
        exit();
    }
    else
    {
        $pd = md5($pd); // 註冊時有先把密碼加密，所以登入核對時，也要加密去核對~

        $sql = "SELECT * FROM member WHERE e_mail = '$e_mail' AND pd = '$pd' ";
        $結果 = mysqli_query($conn, $sql);

        if ( mysqli_num_rows( $結果 ) === 1) //負責 查詢返回 的 結果，假如結果 "在"！
        {
            $查詢數值 = mysqli_fetch_assoc($結果);

            if ( $查詢數值 ['e_mail'] === $e_mail && $查詢數值['pd'] === $pd )
            {
                
                $_SESSION['id'] = $查詢數值['id'];
                $_SESSION['uid'] = $查詢數值['user_id'];
                $_SESSION['user_name'] = $查詢數值['user_name'];
                $_SESSION['name'] = $查詢數值['name'];
                $_SESSION['mail'] = $查詢數值['e_mail'];
                $_SESSION['address'] = $查詢數值['address'];
                $_SESSION['phone'] = $查詢數值['phone_number'];
                $_SESSION['photo'] = $查詢數值['head_shot'];
                $_SESSION['intro'] = $查詢數值['self_intro'];


                header("Location: 首頁.php" ); // header = 跳轉頁面，登入成功後，會跳到 你是哪個會員、的首頁。
                exit();
                
            }
            else
            {
                header("Location: 登入頁面.php ? error = 帳號或密碼不正確！" ); // header = 跳轉頁面
                exit();
            }

        }
        else
        {
            header("Location: 登入頁面.php ? error = 帳號或密碼不正確，或尚未創建帳號！" ); // header = 跳轉頁面
            exit();
        }
    }

  }

  else 
  {
    header("Location:登入頁面.php");
    exit();
  }
?>