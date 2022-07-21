<?php

include"booking.php";
 
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$tel = $_POST['tel'];
$message = $_POST['message'];

header('Location: '.$newURL);

echo "<head><title>Booking List</title></head>";
$fp = fopen("booking.txt", "a+");
fputs($fp, "$name | $email | $date | $tel | $message\n");
fclose($fp);

header("Location: proses.php");
die();

 ?>