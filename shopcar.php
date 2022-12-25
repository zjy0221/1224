<?php
    session_start();

    if(isset($_SESSION['uid']) && isset($_SESSION['user_name']))
    {
?>


<!DOCTYPE html>
<html lang="zh-TW">
	
	<head>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style_2.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<title>社區團購系統</title>
		
	</head>
    

    <body>

    <header id="titimg">
	        <div class='container'>
				<nav class="navbar navbar-expand-lg navbar-light">
				  <a class="navbar-brand" href="首頁.php"><h2 class="title">&nbsp;&nbsp;鯨魚會走路
                    <img src='img\icon\whale.png' width='155'></h2></a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="首頁.php">首頁</a>
                          </li>
                          
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="classification.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              商品分類
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="classification_login.php">美食</a></li>
                              <li><a class="dropdown-item" href="life_login.php">生活用品</a></li>
                              <li><a class="dropdown-item" href="3c_login.php">3C產品</a></li>
                              <li><a class="dropdown-item" href="cloth_login.php">服飾</a></li>
                              <li><a class="dropdown-item" href="makeup_login.php">美妝</a></li>
                              <li><a class="dropdown-item" href="all_product_login.php">全部商品</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="people.html">個人專區</a>
                          </li>
                            <div id="my-content">
                              <li class="menu__item">
                                Hi！<?php echo $_SESSION['user_name']; ?>
                                <a href="登出.php" class="menu__item-link">登出</a>
                              </li>
                          </div>
                        </ul>

                        <ul>
                        </li class="nav-item">
                                <a class="nav-link" href="開啟團購.php">開啟團購</a>
                          </li>
                        </ul>
                        
                      </div>
                    </div>
                </nav>
	        </div>
        </header>
        
        <section id='shopcar1'>
          <h1>購物車</h1>
          <div class="group1">
            <a>
                <img href="網址" src='img\product\group.png'>
            </a>
        </div>
        </h1>
        
        
	        <div class="container">
		        
					  	
					  	<div class='row'>
						  	<div class='col-md-12 text-left' id="gogo">
                                <input type="checkbox" name="buyit" value="html-newsletter">
							  	<div class='outer'>
                                    <p>&emsp;</p>
									  	<div class='upper'>
                                            <a href='#'>
											    <img src='img\product\banana.png'>
                                            </a>
									  	</div>
									  	<div class='lower'>
										  	<span><i class="fas fa-map-marker-alt"></i>香蕉</span><br>
                                            <span>
                                                <div class="qq">
                                                   <input type="number" id="tentacles" name="tentacles" min="0" max="100">
                                                </div>
                                            </span>
                                            <span>
                                                <div class="pp">
                                                    <select>
                                                        <option>款式</option>
                                                        <option>一根</option>
                                                        <option>兩根</option>
                                                        <option>三根</option>
                                                        <option>一串</option>
                                                        <option>兩串</option>
                                                        <option>三串</option>
                                                    </select>
                                                </div>
                                            </span>
                                            <span>
                                                <input type="number" id="toto">
                                            </span>
									  	</div>
							  	</div>
						  	</div>
                              <p>&emsp;</p>
						  	<div class='col-md-12 text-left' id="gogo">
                                <input type="checkbox" name="buyit" value="html-newsletter">
                                <p>&emsp;</p>
							  	<div class='outer'>
									  	<div class='upper'>
                                            <a href='#'>
											    <img src='img\product\hair.png'>
                                            </a>
									  	</div>
									  	<div class='lower'>
										  	<span><i class="fas fa-map-marker-alt"></i>假髮</span><br>
                                              <span>
                                                <div class="qq">
                                                   <input type="number" id="tentacles" name="tentacles" min="0" max="100">
                                                </div>
                                            </span>
                                            <span>
                                                <div class="pp">
                                                    <select>
                                                        <option>款式</option>
                                                        <option>粉色</option>
                                                        <option>藍色</option>
                                                        <option>紫色</option>
                                                        <option>紅色</option>
                                                        <option>綠色</option>
                                                        <option>焦糖色</option>
                                                    </select>
                                                </div>
                                            </span>
                                            <span>
                                                <input type="number" id="toto">
                                            </span>
									  	</div>
								  	
							  	</div>
						  	</div>
                              <p>&emsp;</p>
						  	<div class='col-md-12 text-left' id="gogo">
                                <input type="checkbox" name="buyit" value="html-newsletter">
                                <p>&emsp;</p>
							  	<div class='outer'>
									  	<div class='upper'>
                                            <a href='#'>
											    <img src='img\product\mug.png'>
                                            </a>
									  	</div>
									  	<div class='lower'>
										  	<span><i class="fas fa-map-marker-alt"></i>馬克杯</span><br>
                                              <span>
                                                <div class="qq">
                                                   <input type="number" id="tentacles" name="tentacles" min="0" max="100">
                                                </div>
                                            </span>
                                            <span>
                                                <div class="pp">
                                                    <select>
                                                        <option>款式</option>
                                                        <option>愛心</option>
                                                        <option>小鳥</option>
                                                        <option>烏龜</option>
                                                        <option>貓咪</option>
                                                        <option>牛牛</option>
                                                        <option>狗狗</option>
                                                    </select>
                                                </div>
                                            </span>
                                            <span>
                                                <input type="number" id="toto">
                                            </span>
									  	</div>
								  	
							  	</div>
						  	</div>
                       <p>&emsp;</p>
                            <div class='col-md-12 text-left' id="gogo">
                                <input type="checkbox" name="buyit" value="html-newsletter">
                                <p>&emsp;</p>
                                    <div class='outer'>
                                            <div class='upper'>
                                                <a href='#'>
                                                    <img src='img\product\pencil.png'>
                                                </a>
                                            </div>
                                            <div class='lower'>
                                                <span><i class="fas fa-map-marker-alt"></i>眉筆</span><br>
                                                <span>
                                                    <div class="qq">
                                                       <input type="number" id="tentacles" name="tentacles" min="0" max="100">
                                                    </div>
                                                </span>
                                                <span>
                                                    <div class="pp">
                                                        <select>
                                                            <option>款式</option>
                                                            <option>棕色</option>
                                                            <option>深灰色</option>
                                                            <option>淺灰色</option>
                                                            <option>黑色</option>
                                                        </select>
                                                    </div>
                                                </span>
                                                <span>
                                                    <input type="number" id="toto">
                                                </span>
                                            </div>
                                        
                                    </div>
                            </div>
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <input type="number" id="totle" placeholder="totle">
                           
                                
                                          
              </div>

          </div>
          </div>
        </section>

        <footer>
	        
	        <div class="container">
		        <div class='row'>
					  <div class='col-md-4 text-left'>
                        <div>
                          </br>
                          <h2><img src='img\icon\whale.png' width='45'>&emsp; 鯨魚會走路</h2>
                        </div>
						  <p>最優質的團購網，只差您一人未加入了!</p>
					    </div>
                      <div class='col-md-4 text-left'>
                        <h4>連結</h4>
                        <ul>
                            <li><a href='首頁.php'>主頁</a></li>
                            <li><a href='classification_login.php'>商品分類</a></li>
                        </ul>
                        <ul>
                            <li><a href='people_login.html'>個人專區</a></li>
                            <li><a href='contact_login.html'>聯絡我們</a></li>
                        </ul>						  
                    </div>
					  <div class='col-md-4 text-left'>
						  <h4>聯絡我們</h4>
						  <p>台灣大道七段200號靜宜大學主顧樓<br>
							 Phone: (09**) ***-***<br>
							 E-Mail: <a href='mailto:whalecanwalk@gmail.com'>whalecanwalk@gmail.com</a>
					      </p>
					  </div>
		        </div>
	        </div>	        
        
        </footer>
		
		<script src='js/script.js'></script>
    </body>

</html>

<?php
    }
    else
    {
        header("Location:登入頁面.php");
        exit();
    }
?>