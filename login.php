<?php require_once("includes/connection.php");
include('includes/session.php') ?>
<?php
if (isset($_POST["login"])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = mysqli_query($con,"SELECT * FROM users WHERE username='" . $username . "' AND password='" . $password . "'");

        if (mysqli_num_rows($query)) {
            while ($row = mysqli_fetch_assoc($query)) {
                $dbusername = $row['username'];
                $dbpassword = $row['password'];
                $dbid = $row['id'];
                $dbemail = $row['email'];
                $dbfullName = $row['full_name'];
                            }
            if ($username == $dbusername && $password == $dbpassword) {
                //TODO: add normal logging user into session (write user array with his all settings: id, name, email, nickname etc.)
                $_SESSION['user']['username'] = $username; // you need write this bullshit as like $_session['user']['name']
                $_SESSION['user']['id'] = $dbid;
                $_SESSION['user']['email'] = $dbemail;
                $_SESSION['user']['full_name'] = $dbfullName;
                header('Location: index.php');
            }
        } else {
            $message = "Invalid username or password!";
        }

    } else {
        $message = "All fields are required!";
    }
}
?>

<?php  {
    include('login_form.php');
}
?>
	