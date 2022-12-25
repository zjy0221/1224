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
        <link rel="stylesheet" href="style.css">
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
                            <a class="nav-link" href="people_login.php">個人專區</a>
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

        <section >
            <div class="wrap">
                <div class="search">
                  <input class="search-bar" type="text" name="search" id="search" placeholder="輸入名稱">
                  <button class="search-btn" >
                    
                    <i class="fas fa-search" >
                        <img src="img\icon\search.png" width='22'>
                    </i>
                  </button>
                </div>
                <div class="search-cart">
                  <ul>
                    <li><a class="pay" href="shopcar.php">結帳去</a></li>
                    <li>
                      <a href="shopcar.php">
                        <i class="fas fa-shopping-cart">
                            <img src="img\icon\fas fa-search.png" width='22'>
                        </i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
        </section>

        <section id ='intro'>
            <div class='jumbotron'> 
                <div class='container'>
                    <div class="col-md-12">
                    <h1>你也有這樣的煩惱嗎?</h1>
                    <p class = 'lead'>懶得出門卻想購物 ? 鯨魚會走路是你最好的選擇!</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="drow">
          <div class="border">
            <div id="cover" class="coverflow">
                <a href='img\adv\bread.jpg'><img src='img\adv\bread.jpg' alt='麵包好好粗喔~' width="720" height="400" class="strap"><h3>&emsp; &emsp; &emsp; &emsp; &emsp;&emsp;麵包好好粗喔&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; </h3></a>
                <a href='img\adv\fish.jpg'><img src='img\adv\fish.jpg' alt=' 冷凍直送' width="720" height="400" class="strap"><h3>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;冷凍直送&emsp; &emsp; &emsp; &emsp; &emsp;&emsp;  </h3></a>
                <a href='img\adv\ice_cream.jpg'><img src='img\adv\ice_cream.jpg' alt=' 現在是音樂時間，好吃的冰淇淋!' width="720" height="400" class="strap"><h3>現在是音樂時間，阿好吃的冰淇淋!</h3></a>
            </div>
          </div>
        </section>

        <section id='latest'>
	        
	        <div class="container">
		        <div class='row'>
					  <div class='col-md-12 text-center'>
					  	<h3>商品分類</h3>
					  	<div class='row'>
						  	<div class='col-md-4 text-left'>
							  	<div class='outer'>
								  	<a href='classification_login.php'>
									  	<div class='upper'>
											<img src='img\button\food.png'>
											<div class='innertext'>
												<span>點我</span>
											</div>
									  	</div>
									  	<div class='lower'>
										  	<span><i class="fas fa-map-marker-alt"></i> 所有美食在這裡</span><br>
										  	<span><i class="far fa-clock"></i>破盤大特價，快進來看看!</span>
									  	</div>
								  	</a>
							  	</div>
						  	</div>
						  	<div class='col-md-4 text-left'>
							  	<div class='outer'>
								  	<a href='life_login.php'>
									  	<div class='upper'>
											<img src='img\button\life.png'>
											<div class='innertext'>
												<span>點我</span>
											</div>
									  	</div>
									  	<div class='lower'>
										  	<span><i class="fas fa-map-marker-alt"></i> 精緻生活從小細節開始</span><br>
										  	<span><i class="far fa-clock"></i> 送禮、自用都是最好的選擇</span>
									  	</div>
								  	</a>
							  	</div>
						  	</div>
						  	<div class='col-md-4 text-left'>
							  	<div class='outer'>
								  	<a href='cloth_login.php'>
									  	<div class='upper'>
											<img src='img\button\cloth.png'>
											<div class='innertext'>
												<span>點我</span>
											</div>
									  	</div>
									  	<div class='lower'>
										  	<span><i class="fas fa-map-marker-alt"></i> 帥鴿、莓女看這裡</span><br>
										  	<span><i class="far fa-clock"></i> 精裝、休閒風通通在這裡</span>
									  	</div>
								  	</a>
							  	</div>
						  	</div>						
					  	</div>


                          <div class='col-md-12 text-center'>
                            <h3> </h3>
                            <div class='row'>
                                <div class='col-md-4 text-left'>
                                    <div class='outer'>
                                        <a href='makeup_login.php'>
                                            <div class='upper'>
                                              <img src='img\button\break.png'>
                                              <div class='innertext'>
                                                  <span>點我</span>
                                              </div>
                                            </div>
                                            <div class='lower'>
                                                <span><i class="fas fa-map-marker-alt"></i> 美貌的問題來這裡就對了</span><br>
                                                <span><i class="far fa-clock"></i>多種產品任君挑選</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class='col-md-4 text-left'>
                                    <div class='outer'>
                                        <a href='3c_login.php'>
                                            <div class='upper'>
                                              <img src='img\button\3C.png'>
                                              <div class='innertext'>
                                                  <span>點我</span>
                                              </div>
                                            </div>
                                            <div class='lower'>
                                                <span><i class="fas fa-map-marker-alt"></i> 電子商品都在這裡</span><br>
                                                <span><i class="far fa-clock"></i> 想要什麼下訂去</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class='col-md-4 text-left'>
                                    <div class='outer'>
                                        <a href='all_product_login.php'>
                                            <div class='upper'>
                                              <img src='img\button\all.png'>
                                              <div class='innertext'>
                                                  <span>點我</span>
                                              </div>
                                            </div>
                                            <div class='lower'>
                                                <span><i class="fas fa-map-marker-alt"></i> 選擇障礙的來這邊~</span><br>
                                                <span><i class="far fa-clock"></i> 多款商品讓你挑</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>						
                            </div>
					  </div>
			    <div>
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
                            <li><a href='people_login.php'>個人專區</a></li>
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
        header("Location:main_screen.php");
        exit();
    }
?>