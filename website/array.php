
<?php
// array = "variable is special type of variable that can store multiple values in a single variable name"
$foods = array("apple", "banana", "orange", "grape", "mango");

//$foods[0] = "kiwi"; // change the apple of index 0 to kiwi
array_push($foods, "watermelon"); // add watermelon to the end of the array
array_pop($foods); // remove the last element of the array (watermelon)
array_shift($foods); // remove the first element of the array (kiwi)
array_unshift($foods, "strawberry",); // add strawberry to the beginning of the array and remove the first element (kiwi)
array_reverse($foods); // reverse the order of the array
//array_splice($foods, 1, 2); // remove 2 elements starting from index 1 (banana and orange)
$foods = array_reverse($foods); //reverse array stored in $foods variable and than echo it
//sort($foods); // sort the array according to alphabetical order

echo "the number of elements in the array is " . count($foods)  . "<br>"; // count the number of elements in the array

foreach ($foods as $index => $food) {
    echo "Food at index {$index} is {$food} <br>";
}

















//echo  $foods[0] = "apple" . "<br>"; // index 0
//echo $foods[1] = "banana" . "<br>"; // index 1
//echo $foods[2] = "orange" . "<br>"; // index 2
//echo $foods[3] = "grape" . "<br>"; // index 3
//echo $foods[4] = "mango" . "<br>"; // index 4



?>
