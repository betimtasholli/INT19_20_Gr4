<?php
include('dbConnection.php');
session_start();



$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];
$email = $_POST['email'];
$passwordi = $_POST['password'];
$dataELindjes = $_POST['datelindja'];
$gjinia = $_POST['gender'];


$s = "select * from perdoruesi where email='$email'";
$rezultati = mysqli_query ($connect , $s);

$num = mysqli_num_rows($rezultati);

if($num == 1 ){
  echo "Ekziston nje perdorues me kete email!";
  header('location:signUp.php');
}
else {
  $reg = "insert into perdoruesi(emri, mbiemri, email, passwordi, dataElindjes, gjinia) values ('$emri','$mbiemri','$email','$passwordi','$dataELindjes','$gjinia')";
  mysqli_query($connect,$reg);
  echo"Regjistrimi u krye me sukses";
  header('location:signIn.php');
}


?>