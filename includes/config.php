<?php
 
$conn = mysqli_connect('localhost', 'root', '', 'aviano-db');

if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}

$sql = 'SELECT * FROM customer';

$result = mysqli_query($conn, $sql);

$customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

?> 


