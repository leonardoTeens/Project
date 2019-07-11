<?php include_once 'includes/connection.php';
//TODO: This file is account page. You need to show this info about current logged user (get id from session and select all from database). Dont forget about game's keys.
?>
<?php
$user = array(
  $_SESSION['user']['username'],
  $_SESSION['user']['id'],
  $_SESSION['user']['email'],
  $_SESSION['user']['full_name']
);?>
<?php if (isset($_SESSION['user'])): ?>
<?php else: ?>
<?php header('Location: login.php');?>

<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    <title>Game market</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/styleRegister.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css"/>
    <script src="http://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
    <script src="http://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="header">
        <div class="imgLogo"><a href="index.php"><img src="images/logo.png" style="margin-top:-15%;" width="100%" alt=""></a></div>
        <div class="sitename">game Market</div>
        <div class="Profile_Btn">
            <a class="navButtonTxt" style="padding-left: 50%;" href="index.html">Games</a>
        </div>
        <div class="Profile_Btn">
            <a class="navButtonTxt" href="#" style="padding-left: 21%;">Our games</a>
        </div>
        <div class="Profile_Btn">
            <a class="navButtonTxt" href="#" style="padding-left: 30%;">News</a>
        </div>
        <div class="Profile_Btn">
            <a class="navButtonTxt" href="#">Support</a>
        </div>
      </div>
    </div>
    <div class="navRoad">
        <a class="roadTxt"style="left: 4%;" href="index.php">Main→</a>
        <a class="roadTxt" style="left: 5%;" href="account.php">Profile</a>
    </div>
    
<style>
body{background:url(http://bootstraptema.ru/images/bg/bg-1.png)}

#main {
 background-color: #f2f2f2;
 padding: 20px;
-webkit-border-radius: 4px;
 -moz-border-radius: 4px;
 -ms-border-radius: 4px;
 -o-border-radius: 4px;
 border-radius: 4px;
 border-bottom: 4px solid #ddd;
}
#real-estates-detail #author img {
 -webkit-border-radius: 100%;
 -moz-border-radius: 100%;
 -ms-border-radius: 100%;
 -o-border-radius: 100%;
 border-radius: 100%;
 border: 5px solid #ecf0f1;
 margin-bottom: 10px;
}
#real-estates-detail .sosmed-author i.fa {
 width: 30px;
 height: 30px;
 border: 2px solid #bdc3c7;
 color: #bdc3c7;
 padding-top: 6px;
 margin-top: 10px;
}
.panel-default .panel-heading {
 background-color: #fff;
}
#real-estates-detail .slides li img {
 height: 450px;
}
</style>

<div class="container">
<div id="main">


 <div class="row" id="real-estates-detail">
 <div class="col-lg-4 col-md-4 col-xs-12">
 <div class="panel panel-default">
 <div class="panel-heading">
 <header class="panel-title">
 <div class="text-center">
 <strong>User</strong>
 </div>
 </header>
 </div>
 <div class="panel-body">
 <div class="text-center" id="author">
 <img src="Images/user.png">
 <h3><?php echo $user[3]?></h3>
 <small class="label label-warning"><?php echo $user[0]?></small>
 </div>
 </div>
 </div>
 </div>
 <div class="col-lg-8 col-md-8 col-xs-12">
 <div class="panel">
 <div class="panel-body">
 <ul id="myTab" class="nav nav-pills">
 <li class="active"><a href="#detail" data-toggle="tab">About profile</a></li>
 </ul>
 <div id="myTabContent" class="tab-content">
<hr>
 <div class="tab-pane fade active in" id="detail">
 <h4>Profile</h4>
 <table class="table table-th-block">
 <tbody>
 <tr><td class="active">Date of register:</td><td>12-07-2019</td></tr>
 <tr><td class="active">Username:</td><td><?php echo $user[0]?></td></tr>
 <tr><td class="active">Email:</td><td><?php echo $user[2]?></td></tr>
 <tr><td class="active">Cash:</td><td>$0.00</td></tr>
</tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
</div>

</div><!-- /.main -->
</div><!-- /.container -->
    </body>
    </html>