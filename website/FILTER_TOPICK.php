<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="FILTER_TOPICK.php" method="post">
        username : <br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>



        <input type="submit" name="login" value="login">
    </form>
</body>

</html>

<?php
if (isset($_POST["login"])) {

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    
    if (empty($email)) {
        echo " your email wasn't valid";
    } else {
        echo " you are email is : $email ";
    }
}

?>


















<!-- <?php
        // thise scrcipt is related filter_sanitize
        if (isset($_POST["login"])) {
            $username = filter_input(
                INPUT_POST,
                "username",
                FILTER_SANITIZE_SPECIAL_CHARS
            ); //filter need 3 aurgument 
            $age = filter_input(
                INPUT_POST,
                "age",
                FILTER_SANITIZE_NUMBER_INT
            );

            $email = filter_input(
                INPUT_POST,
                "email",
                FILTER_SANITIZE_EMAIL
            );


            echo "$email";
        }

        ?> -->