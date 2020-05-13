<?php

try{
  $servername = 'localhost';
  $user = 'root';
  $password = '';
  $name = 'talkFootball';
  $connect = mysqli_connect($servername, $user, $password, $name);
}

catch (Exception $e){
  echo $e->errorMessage();
}

?>