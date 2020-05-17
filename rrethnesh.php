<?php  
include('dbConnection.php');
?>


<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/rrethnesh.css" />
    <script>
      function validateForm() {
        var x = document.forms["myForm"]["idemri"].value;
        var y = document.forms["myForm"]["idmbiemri"].value;
        var z = document.forms["myForm"]["idemail"].value;
        var g = document.forms["myForm"]["idkomenti"].value;
        if (x == "") {
          alert("Ju lutem plotësoni emrin!");
          return false;
        }
        if (y == "") {
          alert("Ju lutem plotësoni mbiemrin!");
          return false;
        }
        if (z == "") {
          alert("Ju lutem plotësoni e-mailin!");
          return false;
        }
        if (g == "") {
          alert("Ju lutem plotësoni komentin!");
          return false;
        }
        sessionStorage.setItem('myEmail', document.forms["myForm"]["idemail"].value);

      }
      </script>
  </head>

  <body>
    <div class="top-bar">
      <div class="container">
        <div class="flex-row">
          <div class="social-area">
            <a href="https://www.linkedin.com" target="_blank">
              <div class="social-circle">
                <img
                  class="social-icon"
                  src="images/linkedin.svg"
                  height="16"
                  alt=""
                />
              </div>
            </a>
            <a href="https://www.twitter.com" target="_blank">
              <div class="social-circle">
                <img
                  class="social-icon"
                  src="images/twitter.svg"
                  height="16"
                  alt=""
                />
              </div>
            </a>
            <a href="https://www.facebook.com" target="_blank">
              <div class="social-circle">
                <img
                  class="social-icon"
                  src="images/facebook.svg"
                  height="16"
                  alt=""
                />
              </div>
            </a>
            <a href="https://www.pinterest.com" target="_blank">
              <div class="social-circle">
                <img
                  class="social-icon"
                  src="images/pinterest.svg"
                  height="16"
                  alt=""
                />
              </div>
            </a>
            <a href="https://www.rss.com" target="_blank">
              <div class="social-circle">
                <img
                  class="social-icon"
                  src="images/rss.svg"
                  height="16"
                  alt=""
                />
              </div>
            </a>
          </div>
          <div class="rightSideTopBar">
            <?php 
            session_start();
            if(!isset($_SESSION['logged'])){ ?>
            <div class="lsButtons">
              <div class="signup">
                <a href="signUp.php"
                  ><button class="sign-buttons">Sign Up</button></a
                >
              </div>
              <div class="signin">
                <a href="signIn.php"
                  ><button class="sign-buttons">Sign In</button></a
                >
              </div>
            </div>
            <?php } 
            else{ ?>
            <div class="emailLogout" style="display: flex;">
              <div class="email" style="padding-right: 7px; padding-top: 3px;">
                <p style="color: white;"><?php echo $_SESSION['email']; ?></p>
              </div>
              <div class="logout" style="padding-right: 7px;">
                <a href="changePassword.php"
                  ><button class="sign-buttons">Change Password</button></a
                >
              </div>
              <div class="logout" style="padding-right: 7px;">
                <a href="logOut.php"
                  ><button class="sign-buttons">Log Out</button></a
                >
              </div>
            </div>
            <?php } ?>

            <div class="search-form">
              <input
                class="search-input"
                type="text"
                name="search"
                placeholder=""
              />
              <img
                src="./images/search-solid.svg"
                class="search-icon"
                width="10px"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header">
      <div class="container">
        <div class="flex-row">
          <div>
            <a class="page-name-text" href="index.php">
              Talk Football
            </a>
            <p class="description-text">
              Lajmet me te reja nga futbolli
            </p>
          </div>
          <div class="menu">
            <ul>
              <li><a class="header-link" href="index.php">Kreu</a></li>
              <li><a class="header-link" href="lajmet.php">Lajme</a></li>
              <li><a class="header-link" href="transfere.php">Transfere</a></li>
              <li>
                <div class="sub-menu"><a class="header-link">Tabelat</a>
                  <div class="sub-menu-content">
                    <a href="premierleague.php">Premier League</a>
                    <a href="laliga.php">La Liga</a>
                    <a href="seriea.php">Serie A</a>
                    <a href="bundensliga.php">Bundesliga</a>
                  </div>
                </div>
              </li>
              <li><a class="aktiv" href="rrethnesh.php">Rreth nesh</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  

    <div class="footer">
      <div class="container">
        <div class="slider-block">

          <div class="about">
            <h3 style="text-align: center;">Rreth nesh</h3></br>
              Talkfootball.com &euml;sht&euml; portal i pavarur n&euml; gjuh&euml;n shqipe,
              me seli n&euml; Prishtin&euml;, i themeluar n&euml; fund t&euml; vitit 2019, 
              nga Betim Tasholli, Egzon Gashi, Albin Semetishti dhe Arlind Berisha.
               N&euml; k&euml;t&euml; portal gjenden lajme nga futbolli vendor dhe
               ai nd&euml;rkomb&euml;tar.</br></br>

               <?php   // OOP implementation.

              require 'Author.php';
              require 'Director.php';
              require 'Employees.php';

             $Director  = new Director('Egzon', 'Gashi', '13 janar 2000', '2010', 'Lipjan','250$', '3');
             $Employee1 = new Employees('Albin', 'Semetishti', '12 janar 2001', '2011', 'Ferizaj', '245$');
             $Employee2 = new Employees('Betim', 'Tasholli', '5 shkurt 2001', '2012', 'Mitrovice te Veriut', '230$');
             $Employee3 = new Employees('Arlind', 'Berisha', '8 gusht 1999', '2014', 'Peje', '200$');

              echo '<strong>Drejtori i web-faqes:</strong><br>';
              echo $Director->firstName . ' ' . $Director->lastName . ' i lindur me ' . $Director->get_birthDate() . '. Jeton ne ' . $Director->get_city() . '. Eshte drejtori i web-faqes nga viti ' . $Director->get_startYear() . '. Ka gjithsej ' . $Director->get_numriIPuntoreve() . ' puntore. Paga e tij mujore eshte ' . $Director->get_wage() . '.<br><br>';

              echo '<strong>Puntoret:</strong><br>';
              echo $Employee1->firstName . ' ' . $Employee1->lastName . ' i lindur me ' . $Employee1->get_birthDate() . '. Jeton ne ' . $Employee1->get_city() . '. Eshte puntor i web-faqes nga viti ' . $Employee1->get_startYear() . '. Paga e tij mujore eshte ' . $Employee1->get_wage() . '.<br>';
              echo $Employee2->firstName . ' ' . $Employee2->lastName . ' i lindur me ' . $Employee2->get_birthDate() . '. Jeton ne ' . $Employee2->get_city() . '. Eshte puntor i web-faqes nga viti ' . $Employee2->get_startYear() . '. Paga e tij mujore eshte ' . $Employee2->get_wage() . '.<br>';
              echo $Employee3->firstName . ' ' . $Employee3->lastName . ' i lindur me ' . $Employee3->get_birthDate() . '. Jeton ne ' . $Employee3->get_city() . '. Eshte puntor i web-faqes nga viti ' . $Employee3->get_startYear() . '. Paga e tij mujore eshte ' . $Employee3->get_wage() . '.<br>';

              ?>

              </br>
               <adress>
                <strong>Adresa:</strong></br>
                Rr.Llagjeja E Re, Sllovi</br>
                Lipjan 14000,</br>
                Republika e Kosov&euml;s.&nbsp;</br>
                </adress></br>
                <adress>
              <strong>Numri i telefonit:</strong></br>
               +383 (0) 45 475 533</br>
              +383 (0) 44 473 231</br></br>
              <strong>E-mail:</strong></br>
              talkfootball@gmail.com</br>
              talkfootball2019@outlook.com</br></br>
                </adress>
               
             <?php   // Implementimi i READ FROM MYSQL DATABASE.

              $emaila = $_SESSION['email'];

              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "talkfootball";

              $conn = new mysqli($servername, $username, $password, $dbname);

              if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
              } 

              $sql = "SELECT perdoruesiId, emri, mbiemri, dataELindjes, gjinia, email FROM perdoruesi where email ='$emaila'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {

              while($row = $result->fetch_assoc()) {
              echo "<strong>Te dhenat e juaja:</strong><br>";
              echo "Numri i identifikimit: " . $row["perdoruesiId"]. "<br>Emri: " . $row["emri"]. "<br>Mbiemri: " . $row["mbiemri"]. "<br>" . "Data e lindjes: " . $row["dataELindjes"] . "<br>" . "Gjinia: "  . $row["gjinia"] . "<br>" . "E-mail: "  . $row["email"] . "<br>"                           ;
              }
              } else {
              echo "0 results";
              }
              $conn->close();
              ?>

              </br>
              <a href="sendemail.php" subject="HTML link">Dergo email</a></br></br>
              <strong>Nëse dëshironi të na shkruani email </strong>
              <a id="emailHyperLink" href=mailto:talkfootball41@gmail.com? subject="HTML link">kliko këtu.</a></br></br></br>
            
            </div>
          
             
          <div class="kontakt">
              <h3 style="text-align: center;">Formular per kontakt</h3></br>
              <?php

                $file = "rrethnesh.txt";
                $document = file_get_contents($file);

                $lines = explode("\n", $document);

                foreach($lines as $newline){
                  echo $newline,'<br>';
                }

              ?>
              </br></br>

           <form name="myForm" action="#" onsubmit="return validateForm()" method="post">
               <label for="fname">Emri:</label>
               <input class="kontakt-text" type="text" id="idemri" name="firstname" placeholder="Emri juaj..."></br>
               <label for="lname">Mbiemri:</label>
               <input class="kontakt-text" type="text" id="idmbiemri" name="lastname" placeholder="Mbiemri juaj..."></br>
               <label for="lname">E-mail:</label>
               <input class="kontakt-text" type="text" id="idemail" name="email" placeholder="E-maili juaj..."></br>
               <label for="subject">Komenti:</label> </br>
               <textarea class="kontakt-text" id="idkomenti" name="subject" placeholder="Shkruaj diqka..."></textarea></br>
               <input class="submit-button" type="submit" name="submit" value="Dergo"><br><br><br>
          </form>
          </div>
        </div> 
    </div>
  </div>
    <?php
    if(isset($_POST['submit'])){
      $emri = $_POST['firstname'];
      $mbiemri = $_POST['lastname'];
      $email = $_POST['email'];
      $komenti = $_POST['subject'];
      

      $kritika = $emri." ".$mbiemri."  ".$email." : ".$komenti. "\r\n" ;
      $file = "kritikat.txt";
      file_put_contents($file, $kritika, FILE_APPEND);
    }
    ?>

  

    <button onclick="shkoLart()" id="butoni" title="Kthehu lart">Kthehu lart</button>

      <script type="text/javascript">
      mybutton = document.getElementById("butoni");

      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
      if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
      mybutton.style.display = "block";
      } else {
      mybutton.style.display = "none"; 
      }
      }

      function shkoLart() {
      document.documentElement.scrollTop = 0; 
      }
      </script>

    <div class="copyright">
      <div class="container">
        <div class="copyrightline">
          <div class="flex-row">
            <p class="copyright-text">
              Copyright 2020 - All Rights Reserved 
            </p>
            <p class="copyright-text">Talk Football</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
