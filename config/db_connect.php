<?php 

 //connect to database
 $conn = mysqli_connect('localhost', 'root', 'Wynne!324', 'mariopizzadb');

 //check connection
 if(!$conn) {
     echo 'Connection error: ' . mysqli_connect_error();
 }

?>