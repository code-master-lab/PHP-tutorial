<?php
$age = 100;

if ($age >= 100) {
    echo " you are to old to alive <br> ";
} elseif ($age >= 18) {
    echo "you have entered the adult age group";
} elseif ($age == 0) {
    echo " your not bron yet";
} else {
    echo "you are not an adult yet";
}
?>

<?php
$adult = true; // true is bollen value like 1 or 0

if ($adult == true) {
    echo "you are an adult <br>";
} else {
    echo "you are not an adult";
}

?>




<?php // createing a programme of paying
$hours = 40; // number of hours worked in a week
$rate = 10;
$weeklyPay = null;


if ($hours <= 0) {  // when the user is not working
    $weeklyPay = 0;
    echo " your not working thise week" . "<br>";
    echo " your pay for thise week is {$weeklyPay}₹ thise week";
} elseif ($hours <= 40) { // when the user is working less than 40 hours
    $weeklyPay = $hours * $rate;
    echo " your weekly pay is {$weeklyPay}₹ thise week";
} else { // when the user is working more than 40 hours
    $weeklyPay = ($hours * $rate) + (($hours - 40) * ($rate * 1.5));
    echo " your weekly pay is {$weeklyPay}₹ thise week";
}



?>