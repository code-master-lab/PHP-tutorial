<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="newimportant.php" method="post">
        <h2>Enter a Username</h2>
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="SEND TO SERVER">
    </form>
</body>

</html>
<?php
if (isset($_POST["login"])) { // post is case sensative
    $username = $_POST["username"];
    echo "hello $username" ;
}
?>