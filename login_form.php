<!DOCTYPE html>
<html lang="en">
  <head>
	   <meta charset="utf-8">
       <title>Game Market</title>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico">
      <link href="../css/styleRegister.css" media="screen" rel="stylesheet">
	  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head> 
	<body>
<div class="container mlogin">
    <div id="login">
        <h1>LOGIN</h1>
        <form name="loginform" id="loginform" action="" method="POST">
            <p>
                <label for="user_login">Username<br/>
                    <input type="text" name="username" id="username" class="input" value="" size="20"/></label>
            </p>
            <p>
                <label for="user_pass">Password<br/>
                    <input type="password" name="password" id="password" class="input" value="" size="20"/></label>
            </p>
            <p class="submit">
                <input type="submit" name="login" class="button" value="Log In"/>
            </p>
            <p class="regtext">No account yet? <a href="register.php">Register Here</a>!</p>
        </form>
    </div>
</div>
</body>
</html>
<?php include("includes/footer.php"); ?>
<?php if (!empty($message)) {
    echo "<p class=\"error\">" . "MESSAGE: " . $message . "</p>";
} ?>
