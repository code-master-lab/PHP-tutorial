<!-- <?php
        $age = 18;
        $citizen = true;


        if (!$age >= 18 || !$citizen) {
            echo " you can vote ";
        } else {
            echo " you cannot vote ";
        }
        ?> -->


<?php
$child = true;
$senior = false;
$ticket = null;
if ($child || $senior) {
    $ticket = 10;
} else {
    $ticket = 15;
}
echo " the ticket price is  {$ticket} dollars";

?>