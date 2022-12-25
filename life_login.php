<?php
    session_start();

    if(isset($_SESSION['uid']) && isset($_SESSION['user_name']))
    {
?>

<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<meta charset="utf-8">
		<title>社區團購系統</title>
		
	</head>
    

    <body>
        <header>
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
                            <a class="nav-link active" aria-current="page" href="main_screen.php">首頁</a>
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
        </header>

        <section id='second'>
	        <div class="container">
            <div class="hole">
		        <div class='row'>
					  <div class='col-md-8 offset-md-2 text-center'>
					  	<h1>&emsp;&emsp;&emsp;&emsp;生活專區</h1>
					  	<div class='row'>
						  	<div class='col-md-4_text-center'>
                  <a href="#">
                    <img src='img\product\life\duck.png'>
                  </a>
							  	<h5>鴨鴨坐墊，不坐後悔!</h5>
						  	</div>
						  	<div class='col-md-8 text-left'>
							  	<p class='lead'></p>
                  <h4>&emsp;&emsp;商品介紹</h4>
                  <p>呱呱呱~~🦆大白鵝一出場就讓人會心一笑，</p>
                  <p>呆萌可愛模樣除了帶給你趣味生活，</p>
                  <p>也能給你想要的陪伴， </p>
                  <p>不論是放在臥室、沙發、辦公室都很適合喔！</p>
						  	</div>
					  	</div>
            </div>
            </div>
          </div>

          <div class="hole">
            <div class='row'>
                  <div class='col-md-8 offset-md-2 text-center'>
                      <div class='row'>
                          <div class='col-md-4_text-center'>
              <a href="#">
                <img src='img\product\life\duck.png'>
              </a>
                              <h5>鴨鴨坐墊，不坐後悔!</h5>
                          </div>
                          <div class='col-md-8 text-left'>
                              <p class='lead'></p>
              <h4>&emsp;&emsp;商品介紹</h4>
              <p>呱呱呱~~🦆大白鵝一出場就讓人會心一笑，</p>
                  <p>呆萌可愛模樣除了帶給你趣味生活，</p>
                  <p>也能給你想要的陪伴， </p>
                  <p>不論是放在臥室、沙發、辦公室都很適合喔！</p>
                          </div>
                      </div>
        </div>
        </div>
      </div>


      <div class="hole">
        <div class='row'>
              <div class='col-md-8 offset-md-2 text-center'>
                  <div class='row'>
                      <div class='col-md-4_text-center'>
          <a href="#">
            <img src='img\product\life\duck.png'>
          </a>
                          <h5>鴨鴨坐墊，不坐後悔!</h5>
                      </div>
                      <div class='col-md-8 text-left'>
                          <p class='lead'></p>
          <h4>&emsp;&emsp;商品介紹</h4>
          <p>呱呱呱~~🦆大白鵝一出場就讓人會心一笑，</p>
          <p>呆萌可愛模樣除了帶給你趣味生活，</p>
          <p>也能給你想要的陪伴， </p>
          <p>不論是放在臥室、沙發、辦公室都很適合喔！</p>
                      </div>
                  </div>
    </div>
    </div>
  </div>

  <div class="hole">
    <div class='row'>
          <div class='col-md-8 offset-md-2 text-center'>
              <div class='row'>
                  <div class='col-md-4_text-center'>
      <a href="#">
        <img src='img\product\life\duck.png'>
      </a>
                      <h5>鴨鴨坐墊，不坐後悔!</h5>
                  </div>
                  <div class='col-md-8 text-left'>
                      <p class='lead'></p>
      <h4>&emsp;&emsp;商品介紹</h4>
      <p>呱呱呱~~🦆大白鵝一出場就讓人會心一笑，</p>
      <p>呆萌可愛模樣除了帶給你趣味生活，</p>
      <p>也能給你想要的陪伴， </p>
      <p>不論是放在臥室、沙發、辦公室都很適合喔！</p>
                  </div>
              </div>
</div>
</div>
</div>
<div class="hole">
    <div class='row'>
          <div class='col-md-8 offset-md-2 text-center'>
              <div class='row'>
                  <div class='col-md-4_text-center'>
      <a href="#">
        <img src='img\product\life\duck.png'>
      </a>
                      <h5>鴨鴨坐墊，不坐後悔!</h5>
                  </div>
                  <div class='col-md-8 text-left'>
                      <p class='lead'></p>
      <h4>&emsp;&emsp;商品介紹</h4>
      <p>呱呱呱~~🦆大白鵝一出場就讓人會心一笑，</p>
      <p>呆萌可愛模樣除了帶給你趣味生活，</p>
      <p>也能給你想要的陪伴， </p>
      <p>不論是放在臥室、沙發、辦公室都很適合喔！</p>
                  </div>
              </div>
</div>
</div>
</div>

<div class="hole">
    <div class='row'>
          <div class='col-md-8 offset-md-2 text-center'>
              <div class='row'>
                  <div class='col-md-4_text-center'>
      <a href="#">
        <img src='img\product\life\duck.png'>
      </a>
                      <h5>鴨鴨坐墊，不坐後悔!</h5>
                  </div>
                  <div class='col-md-8 text-left'>
                      <p class='lead'></p>
      <h4>&emsp;&emsp;商品介紹</h4>
      <p>呱呱呱~~🦆大白鵝一出場就讓人會心一笑，</p>
      <p>呆萌可愛模樣除了帶給你趣味生活，</p>
      <p>也能給你想要的陪伴， </p>
      <p>不論是放在臥室、沙發、辦公室都很適合喔！</p>
                  </div>
              </div>
</div>
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