<!-- <?php
// while loop = do some code infinitely while some condition remain true 


$counter = 0;

while ($counter < 10) {
    $counter++;     // increment writen before printing the value of counter        
    echo $counter . "<br>";
}
?>  -->
// echo $counter; // display the value of the counter
// if $counter write after the echo than answer will be deferent



<?php
$number = 1;

echo "<h3>Even numbers from 1 to 20:</h3>";

while ($number <= 20) {
    if ($number % 2 == 0) {
        echo $number . "<br>";
    }
    $number++;
}
?>
