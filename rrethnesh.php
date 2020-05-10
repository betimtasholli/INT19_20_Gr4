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
               ai nd&euml;rkomb&euml;tar.</br></br></br></br></br>
        
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
              </br>
              <strong>Nëse dëshironi të na shkruani email </strong>
              <a id="emailHyperLink" href=mailto:talkfootball@gmail.com? subject="HTML link">kliko këtu </a>.
          </div>
          
             
          <div class="kontakt">
              <h3 style="text-align: center;">Formular per kontakt</h3></br>
              <p>P&euml;rsh&euml;ndetje i nderuar vizitor. P&euml;r m&euml; shum&euml; informata rreth pun&euml;s, stafit, apo ndonj&euml; k&euml;shill&euml;&nbsp;ose sugjerim nga ana juaj drejtuar stafit te Talk football, plot&euml;soni formularin e m&euml;posht&euml;m.</p>
              <p>&Ccedil;do kritik&euml; apo sugjerim nga ana juaj vlen shum&euml; p&euml;r ne.</p>
              <p>Faleminderit p&euml;r koh&euml;n tuaj.</p></br></br>

           <form name="myForm" action="#" onsubmit="return validateForm()" method="post">
               <label for="fname">Emri:</label>
               <input class="kontakt-text" type="text" id="idemri" name="firstname" placeholder="Emri juaj..."></br>
               <label for="lname">Mbiemri:</label>
               <input class="kontakt-text" type="text" id="idmbiemri" name="lastname" placeholder="Mbiemri juaj..."></br>
               <label for="lname">E-mail:</label>
               <input class="kontakt-text" type="text" id="idemail" name="email" placeholder="E-maili juaj..."></br>
               <label for="subject">Komenti:</label> </br>
               <textarea class="kontakt-text" id="idkomenti" name="subject" placeholder="Shkruaj diqka..."></textarea></br>
               <input class="submit-button" type="submit" value="Dergo"><br><br><br>
          </form>
          </div>
        </div> 
    </div>
  </div>

  

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
