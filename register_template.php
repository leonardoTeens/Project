<?php include("includes/header.php");?>

<?php if (!empty($_SESSION['error_message'])) {
    echo "<p class=\"error\">" . "MESSAGE: " . $_SESSION['error_message']. "</p>";
} ?>
    <a style="left:1%;position:relative;text-decoration:none;" href="index.php">Main →</a>
    <a style="left:1%;position:relative;text-decoration:none;" href="register.php">Registration</a>
    <div class="container mregister">
        <div id="login">
            <h1>REGISTER</h1>
            <form name="registerform" id="registerform" action="register.php" method="post">
                <p>
                    <label for="user_login">Full Name<br/>
                        <input type="text" name="full_name" id="full_name" class="input" size="32" value=""/></label>
                </p>


                <p>
                    <label for="user_pass">Email<br/>
                        <input type="email" name="email" id="email" class="input" value="" size="32"/></label>
                </p>

                <p>
                    <label for="user_pass">Username<br/>
                        <input type="text" name="username" id="username" class="input" value="" size="20"/></label>
                </p>

                <p>
                    <label for="user_pass">Password<br/>
                        <input type="password" name="password" id="password" class="input" value="" size="32"/></label>
                </p>


                <p class="submit">
                    <input type="submit" name="register" id="register" class="button" value="Register"/>
                </p>

                <p class="regtext">Already have an account? <a href="login.php">Login Here</a>!</p>
            </form>

        </div>
    </div>

<?php include("includes/footer.php"); ?>