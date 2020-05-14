<?php
include('dbConnection.php');

session_start();

//$email = mysqli_real_escape_string($connect, $_POST['email']);
//$passwordi = mysqli_real_escape_string($connect, $_POST['password']);
$email = $_POST['Email'];
$passwordi = $_POST['Password'];
$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];


$s = "select * from perdoruesi where email=? && passwordi=?";
//$s = "select * from perdoruesi where email='$email' && passwordi='$passwordi'";
//$rezultati = mysqli_query ($connect , $s);

$stmt = mysqli_stmt_init($connect);

if (!mysqli_stmt_prepare($stmt, $s)){
  echo 'ERROR';
}
else {
  mysqli_stmt_bind_param($stmt, 'ss', $email, $passwordi);
  mysqli_stmt_execute($stmt);
  $rezultati = mysqli_stmt_get_result($stmt);
}

$num = mysqli_num_rows($rezultati);

if($num == 1 ){
  $_SESSION['logged']=true;
  $_SESSION['email']=$email;
  header('location:index.php');
  if(!empty($_POST['rememberme'])){
    setcookie('email' , $email, time()+3600*24);
    setcookie('password', $passwordi , time()+3600*24);
  }
  else{
    setcookie('email' , "", time()+3600*24);
    setcookie('password', "" , time()+3600*24);
    
  }
}
else {
  $_SESSION['logged']=false;
  header('location:signIn.php');
}



?>
