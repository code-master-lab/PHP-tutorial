


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" value="Submit">
</body>

</html>






















<?php
//here we are going to use PHP selfto get current page namecomes under $_SERVER super global variable
// php self is use for geting the current file name
// $_SERVER = A Super Global Variable in PHP
//            It stores information about the **server**, **current page**, and **request**.
//            This info is given by the **web server** (like Apache, Nginx).
//            It includes things like: 
//              - headers
//              - file paths
//              - script locations
//              - browser details
//              - request method (GET or POST)
//              - current URL and much more.
//
// Example: You can use it to find out the current page name, the server name, or which method (POST/GET) was used.
//
// It helps you understand what’s going on behind the scenes of the current webpage.


// foreach ($_SERVER as $key => $value) {
//     echo "$key => $value <br>";
// }
// echo "<br>";


?>