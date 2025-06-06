<?php

   include ('database.php');

   // Ensure $conn is initialized as a mysqli connection
   // Example: $conn = mysqli_connect('localhost', 'username', 'password', 'database');
   // If database.php already sets $conn, this line is not needed.

   $sql = "INSERT INTO users (user,password) VALUES ('apple','vivekraut')";
          
    mysqli_query($conn, $sql); 
    
   mysqli_close($conn);
   
?>




