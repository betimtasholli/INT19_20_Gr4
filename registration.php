<?php
include('dbConnection.php');
session_start();



$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];
$email = $_POST['email'];
$passwordi = $_POST['password'];
$dataELindjes = $_POST['datelindja'];
$gjinia = $_POST['gender'];
$rewritePassword = $_POST['rewritePassword'];


$s = "select * from perdoruesi where email='$email'";
$rezultati = mysqli_query ($connect , $s);

$num = mysqli_num_rows($rezultati);

if($num == 1 ){
  echo "Ekziston nje perdorues me kete email!";
  header('location:signUp.php');
}


else {
  
  if ($passwordi != $rewritePassword){
    echo '<script type="text/javascript">'; 
    echo 'alert("Passwordet nuk jane te ngjajshem! Ju lutem shkruani passwordet e ngjajshem!");';
    echo 'window.location= "signUp.php";';
    echo '</script>'; 
  }
  
  elseif(!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $email)){
    echo '<script type="text/javascript">'; 
    echo 'alert("Emaili nuk eshte valid! Ju lutem shenoni nje email valid");';
    echo 'window.location= "signUp.php";';
    echo '</script>'; 
  } 

  elseif (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password )){
    echo '<script type="text/javascript">'; 
    echo 'alert("Passwordi duhet te permbaje 8 karaktere se paku, nje shkronje te madhe, se paku nje numer, se paku nje simbol!");';
    echo 'window.location= "signUp.php";';
    echo '</script>'; 
  }

  
  else{
  $reg = "insert into perdoruesi(emri, mbiemri, email, passwordi, dataElindjes, gjinia) values ('$emri','$mbiemri','$email','$passwordi','$dataELindjes','$gjinia')";
  mysqli_query($connect,$reg);
  echo"Regjistrimi u krye me sukses";
  header('location:signIn.php');}
}


?>