<?php
include_once 'php/connection.php';
$_SESSION['user']['username'] = 'test123';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    <title>Game market</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 95%;
      height: 500px;
      left: 2.5%;
      position: relative;
      margin-top: 8%;
    
    }
    </style>   
</head>
<body>
    <div class="header_container">
        <div class="navMenu_container">
            <div class="imgLogo"><img src="images/logo.png" width="100%"  alt=""></div>
            <div class="captionContainer">game Market</div>
            <div class="navContainer">
              <div class="Button">
               <a  class="navButtonTxt" style="padding-left: 50%;" href="index.html">Games</a>
              </div>
              <div class="Button">
                  <a class="navButtonTxt" href="#"  style="padding-left: 25%;">Our games</a>
              </div>
              <div class="Button">
                  <a class="navButtonTxt" href="#"  style="padding-left: 30%;">News</a>
              </div>
              <div class="Button">
                  <a class="navButtonTxt" href="#">Support</a>
              </div>
              <div id="userIcon">
                <img src="Images/user.png" style="width: 100%;height:100%" alt="">
                <?php if(isset($_SESSION['user'])): ?>
                    <?php echo $_SESSION['user']['username'];?>
                <?php else: ?>
                    <a href="register.php">Register</a>
                <?php endif;?>
              </div>
            </div>
          </div>
           <div id="demo" class="carousel slide" style="height: 700px;top:50px;" data-ride="carousel">
                    <div class="carousel-inner" >
                      <div class="carousel-item active">
                        <img src="Тестовые лого и фавиконы/xiaomi_y720_black_images_3790950072.gif" alt="Los Angeles" width="700" style="height: 620px;top: -35px;">
                        <div class="carousel-caption">
              <div class="caorusel_blocks"></div>
              <div class="caorusel_blocks" style="left: 40%;"></div>
              <div class="caorusel_blocks"  style="left: 65%;"></div>
                          <h3></h3>
                          <p></p>
                        </div>   
                      </div>
                      <div class="carousel-item">
                        <img src="Тестовые лого и фавиконы/d8a14aaed16e1a34bd6195a7c6bdccae41b8fbb3_hq.gif" alt="Chicago" width="700"style="height: 620px;top: -35px;">
                        <div class="carousel-caption">
                            <div class="caorusel_blocks"></div>
                            <div class="caorusel_blocks" style="left: 40%;"></div>
                            <div class="caorusel_blocks"  style="left: 65%;"></div>
                          <h3></h3>
                          <p></p>
                        </div>   
                      </div>
                      <div class="carousel-item">
                        <img src="Тестовые лого и фавиконы/tenor.gif" alt="New York" width="700" style="height: 620px;top: -35px;">
                        <div class="carousel-caption">
                            <div class="caorusel_blocks"></div>
                            <div class="caorusel_blocks" style="left: 40%;"></div>
                            <div class="caorusel_blocks"  style="left: 65%;"></div>
                          <h3></h3>
                          <p></p>
                        </div>   
          <!---->     </div>
                    </div>
        </div>
      </div>

        <div class="newsContainer">
            <div class="newsName">News in gaming world </div>
            <div class="mainNews"></div>
            <div class="secNews" style="top:-30%;"></div>
            <div class="secNews" style="top:-94%;"></div>
        </div>
        <div class="our_games">
          <div class="our_games_caption_cont">
            <p style="color: aliceblue; font-size: 3vw;text-align: justify;">Our games</p>
            <h1 style="color: aliceblue; font-size: 2vw;text-align: justify;">sajhdjasb</h1>
            <div class="component_showcase" style="top:70%; height: 120%"></div>
            <div class="component_showcase" style="left:120%;top:-45%; width:30%"></div>
            
        </div>
      </div>
        <div class="footer">
<div class="social_mediaCont">
  <h1 class="societyCaption">Society</h1>
  <a id="socmedia" href="#"><img src="Images/instagram Icon.gif" alt="" width="14%" height="41%"><p style="position: relative; color: white; left: 17%;margin-top: -10% ">Instagram</p></a> 
<br>  
<a id="socmedia"  href="#"><img src="Images/gmail icon.png" alt="" width="14%" height="41%"><p style="position: relative; color: white; left: 17%;margin-top: -10% ">Mail</p></a>
<hr width="115%" color="grey" style="top:10%;position:relative;left:-15%;">
</div>
<div class="partners">
    <h1 class="societyCaption">Partners</h1>
    <a id="socmedia" href="#"><img src="Images/LITS_logo-1.png" alt="" width="30%" height="48%"></a> 
    <hr width="115%" color="grey" style="top:10%;position:relative;left:-15%;">
</div>       
<div class="allRightsReserved">
  <h5 style="color:white; padding-top: 7%; font-family: Noto Sans, sans-serif;;">© Online store Game Market.com, 2019. Contact e-mail: gameMarket2019.@gmail.com | Authors and copyright holder.<br><br>
    All rights reserved
  </h5>
  <hr width="105%" color="grey" style="top:10%;position:relative;left:-5%;">

</div> 
        </div>
    </div>
    
</body>
</html>