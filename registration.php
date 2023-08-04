<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Shkoas</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" type="image/x-icon" href="./new.png">
</head>
<body>
<center>
       
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '$password', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form' >
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

</center>

<div>
    <a href="home.php" >
      <input type="button" class="back" value="<<<<" style="outline:none;margin-left: 30px;padding: 10px;border-radius: 20px;color: orange;
      background-color: black;border: none;font-size: 20px;">
    </a>
  </div>
  <center>
<div>
    <form class="form" action="" method="post">
        <center><img src="./shokaslogo.png" style="max-width:50%;" alt=""></center>
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress" required />
        <input type="text" class="login-input" name="password" placeholder="Password" required />
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
</div>
</center>
<?php
    }
?>
</body>
</html>