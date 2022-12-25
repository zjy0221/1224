<?php
//session_start();

require_once "資料庫連接.php";

  if(isset($_POST['order_title']) && isset($_POST['item']) )
  {
        echo "有喔，有送出來喔~";
        echo "但是目前功能還未開發捏~";
  }
  else 
  {
    header("Location:開啟團購.php");
    exit();
  }
?>