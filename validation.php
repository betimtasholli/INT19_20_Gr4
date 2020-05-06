<?php
include('dbConnection.php');

session_start();

$email = $_POST['Email'];
$passwordi = $_POST['Password'];

$s = "select * from perdoruesi where email='$email' && passwordi='$passwordi'";
$rezultati = mysqli_query ($connect , $s);

$num = mysqli_num_rows($rezultati);

if($num == 1 ){
  header('location:index.php');
}
else {
  header('location:signIn.php');
}



?>
