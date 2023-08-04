<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Shokas</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" type="image/x-icon" href="./new.png">
</head>
<body  style="background-image: url(./images/background.png);background-repeat: no-repeat;max-width: 100%;">
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location:music.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

<div>
    <a href="home.php" >
      <input type="button" class="back" value="<<<<" style="outline:none;margin-left: 30px;padding: 10px;border-radius: 20px;color: orange;
      background-color: black;border: none;font-size: 20px;">
    </a>
  </div>



<center>
<form class="form" method="post" name="login">
    <center><img src="./shokaslogo.png" style="max-width:50%;margin-left:20px;" alt=""></center>
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="text" class="login-input" name="password" placeholder="Password"required />
        <input type="submit" value="Login" name="submit" class="login-button"required />
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>
</center>
<?php
    }
?>
</body>
</html>