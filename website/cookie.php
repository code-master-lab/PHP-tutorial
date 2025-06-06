<?php

setcookie("fav_food", "pizza", time() + (86400 * 2), "/"); // 86400 = 1 day
setcookie("fav_drink", "water", time() + (86400 * 3), "/"); // 86400 = 1 day
setcookie("fav_color", "blue", time() + (86400 * 4), "/"); // 86400 = 1 day

foreach ($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br> <br>";
}

if (isset($_COOKIE["fav_food"])) {
    echo "Your favorite food is " . $_COOKIE["fav_food"] . "<br>";
} else {
    echo "Cookie 'fav_food' is not set!<br>";
}

?>

<!-- In PHP, a cookie is a small piece of data stored in the user's browser that helps a website
 remember information like your name, preferences, or login status, so it can give you a 
 better and more personalized experience when you visit again. -->