<?php

session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <form action="index.php" method="post"><br>username<br>
        <input type="text" name="username"><br>password<br>
        <input type="text" name="password" ><br><br>
        <input type="submit" name="login" value="Submit"><br><br>
    </form>
   
</body>

</html>
<?php

if (isset($_POST['login'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        // Store the username and password in session variables
        // $_SESSION['username'] = $_POST['username'];
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['age'] = $_POST['password'];
        // echo $_SESSION['name'] . "<br>";
        // echo $_SESSION['age'] . "<br>";
        header(("Location: home.php"));
        // Redirect to home.php
       
       
    } else {
        echo "Please enter username and password";
    }
}
?>