<?php

$username = array("Vivek", "The", "Raut ");
$phone = "123-456-2005";
//  $username = strtolower($username);
//  $username = strtoupper($username);
//  $username = strtoupper($username);
//  $username = trim($username);
//  $username = str_pad($username,20,"$");
//  $phone  = str_replace("123-456","Vivek raut",$phone);
//$username = strrev ($username); 
//$username = str_shuffle($username);
// $equals = strcmp($username," Vivek raut");
// $count = strlen($username);
// $index = strpos($username, " ");
// $firstname = substr($username, 0, 5);
// $lastname = substr($username,  5);
//$fullname = explode(" ", $username);
// foreach ($fullname as $name) {
//     echo $name . "<br>";
// }

$username = implode( "-" ,$username);
echo $username;
