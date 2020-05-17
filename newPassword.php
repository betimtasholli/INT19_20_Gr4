<?php

    include 'dbConnection.php';
    session_start();

    if (isset($_POST['Nderro'])) {

        $email = $_SESSION['email'];
        $password = $_POST['oldPassword'];
        $newpassword = $_POST['newPassword'];
        $confirmnewpassword = $_POST['retypeNewPassword'];

        $s = "select * from perdoruesi where email='$email' && passwordi='$password'";
        $rezultati = mysqli_query ($connect , $s);
        $num = mysqli_num_rows($rezultati);

        if($num == 1 ){
          if(($newpassword == $confirmnewpassword)  && (preg_match("/^(?=[^\d]*\d)(?=[A-Z\d ]*[^A-Z\d ]).{8,}$/i", $newpassword))){
            mysqli_query($connect, "UPDATE perdoruesi set passwordi='" . $_POST["newPassword"] . "' WHERE email='" . $_SESSION["email"] . "'");
            header('location:logOut.php');
          }
          else{
            echo "Passwordet nuk perputhen ose nuk jane ne rregull";
            header('location:changePassword.php');
          }

        }
        else{
          echo "Passwordi egzistues eshte gabim";
          header('location:changePassword.php');
         
        }



    }
        

        
?>