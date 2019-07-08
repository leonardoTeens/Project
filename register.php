<?php require_once("includes/connection.php"); ?>
<?php

if (isset($_POST["register"])) {
    if (!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
		$password = $_POST['password'];


        $query = mysqli_query($con, "SELECT * FROM users WHERE username='" . $username . "'");
        if (!mysqli_num_rows($query)) {
            $result = mysqli_query($con,
                "INSERT INTO users (full_name, email, username,password) VALUES('$full_name','$email', '$username', '$password')"
            );

            if ($result) {
                // TODO: add autologin for registered users (Select his nickname from database and set into session)
				$user = array(
					$_POST['full_name'],
					$_POST['email'];
				);
                unset($_SESSION['error_message']);
                header('Location: index.php');

            } else {
                $_SESSION['error_message'] = "Failed to insert data information!";
            }

        } else {
            $_SESSION['error_message'] = "That username already exists! Please try another one!";
        }

    } else {
        $_SESSION['error_message'] = "All fields are required!";
    }
}

if(isset($_SESSION['error_message'])) {
    header('Location: register_template.php');
}
?>

