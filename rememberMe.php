<?php 
include("dbConnection.php");

if(isset($_SESSION['perdoruesiId'])){
  header("location:index.php");
  exit;
}
elseif ( isset($_COOKIE['rememberme'])){

  $perdoruesiId = decryptCookie($_COOKIE['rememberme']);
  $sql_query = "select count(*) as cntUser,id from perdoruesi where perdoruesiId='".$perdoruesiId."'";
  $result = mysqli_query($connection,$sql_query);
  $row = mysqli_fetch_array($result);

  $count = $row['cntUser'];

  if( $count > 0 ){
    $_SESSION['perdoruesiId'] = $perdoruesiId; 
    header('Location: index.php');
    exit;
  }
}

function encryptCookie( $value ) {
  $key = 'youkey';
  $newvalue = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $key ), $value, MCRYPT_MODE_CBC, md5( md5( $key ) ) ) );
  return( $newvalue );
 }

function decryptCookie( $value ) {
  $key = 'youkey';
  $newvalue = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $key ), base64_decode( $value ), MCRYPT_MODE_CBC, md5( md5( $key ) ) ), "\0");
  return( $newvalue );
 }

if(isset($_POST['kycu'])){
  $email = mysqli_real_escape_string($connection,$_POST['Email']);
  $passwordi = mysqli_real_escape_string($con,$_POST['Password']);
  if ($email != "" && $passwordi != ""){
    $sql_query = "select count(*) as cntUser,id from perdoruesi where email='".$email."' and passwordi='".$passwordi."'";
    $result = mysqli_query($connection,$sql_query);
    $row = mysqli_fetch_array($result);
  
    $count = $row['cntUser'];
    if($count > 0){
      $perdoruesiId = $row['perdoruesiId'];
      if( isset($_POST['rememberme']) ){
       $days = 30;
       $value = encryptCookie($perdoruesiId);
       setcookie ("rememberme",$value,time()+ ($days * 24 * 60 * 60 * 1000));
      }
    $_SESSION['perdoruesiId'] = $perdoruesiId; 
    header('Location: index.php');
    exit;}
    else{
      echo "Invalid";
    }  
  }
}

?>