<?php  
include('dbConnection.php');
?>


<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/tabelat.css" />
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
                <div class="sub-menu"><a class="aktiv">Tabelat</a>
                  <div class="sub-menu-content">
                    <a href="premierleague.php">Premier League</a>
                    <a href="laliga.php">La Liga</a>
                    <a href="seriea.php">Serie A</a>
                    <a href="bundensliga.php">Bundesliga</a>
                  </div>
                </div>
              </li>
              <li><a class="header-link" href="rrethnesh.php">Rreth nesh</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container">
      <div class="widelogo">
        <img src="images/bundensliga.png" style="width:auto; height: 150px; margin-left: auto; margin-right: auto; display: block;"/>
      </div>
      <table style="color: #656565; padding-bottom: 50px;"> 
        <tr class="bottomBorder" bgcolor="#fff" height="35">
          <td width="32" align="left" >No</td>
          <td width="70" align="center">badge</td>
          <td width="500" align="left">Team</td>
          <td width="100" align="center">MP</td>
          <td width="100" align="center">W</td>
          <td width="100" align="center">D</td>
          <td width="100" align="center">L</td>
          <td width="100" align="center">G</td>
          <td width="100" align="center">Pts</td>
        </tr>
        <tr class="bottomBorder" bgcolor="#fff" height="30">      
          <td width="32" align="center" style= " background-color:#004682; color:#fff;">1.</td>
          <td width="70" align="center"><img src="images/Leipzig.png" width="25px" height="25px"/></td>
          <td width="500" align="left">RB Liepzig</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">11</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">2</td>
          <td width="100" align="center">27</td>
          <td width="100" align="center">37</td>
        </tr>
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#004682; color:#fff;">2.</td>
          <td width="70" align="center"><img src="images/Monchengladbach.png" width="25px" height="25px"/></td>
          <td width="500" align="left">B. Monchengladbach</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">11</td>
          <td width="100" align="center">2</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">15</td>
          <td width="100" align="center">35</td>
        </tr>
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#004682; color:#fff;">3.</td>
          <td width="70" align="center"><img src="images/Bayern.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Bayern Munich</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">11</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">24</td>
          <td width="100" align="center">33</td>
        </tr>      
          <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#004682; color:#fff;">4.</td>
          <td width="70" align="center"><img src="images/Dortmund.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Dortmund</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">30</td>
        </tr>      
          <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#7f0029; color:#fff;">5.</td>
          <td width="70" align="center"><img src="images/Schalke.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Schalke</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">30</td>
        </tr>       
         <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">6.</td>
          <td width="70" align="center"><img src="images/Leverkusen.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Bayer Leverkusen</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">2</td>
          <td width="100" align="center">28</td>
        </tr>                
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">7.</td>
          <td width="70" align="center"><img src="images/Hoffenheim.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Hoffenheim</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">-3</td>
          <td width="100" align="center">27</td>
        </tr>         
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">8.</td>
          <td width="70" align="center"><img src="images/Freiburg.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Freiburg</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">7</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">26</td>
        </tr>               
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">9.</td>
          <td width="70" align="center"><img src="images/Wolfsburg.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Wolfsburg</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">0</td>
          <td width="100" align="center">24</td>
        </tr>         
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">10.</td>
          <td width="70" align="center"><img src="images/Augsburg.png" width="25px" height="25px"/></td>
          <td width="100" align="left">Augsburg</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">-3</td>
          <td width="100" align="center">23</td>
        </tr>                
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">11.</td>
          <td width="70" align="center"><img src="images/UnionBerlin.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Union Berlin</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">2</td>
          <td width="100" align="center">9</td>
          <td width="100" align="center">-4</td>
          <td width="100" align="center">20</td>
        </tr>        
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">12.</td>
          <td width="70" align="center"><img src="images/Hertha.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Hertha Berlin</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">-7</td>
          <td width="100" align="center">19</td>
        </tr>                
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">13.</td>
          <td width="70" align="center"><img src="images/Eintracht.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Eintracht Frankfurt</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">9</td>
          <td width="100" align="center">-2</td>
          <td width="100" align="center">18</td>
        </tr>        
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">14.</td>
          <td width="70" align="center"><img src="images/Mainz.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Mainz</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">0</td>
          <td width="100" align="center">11</td>
          <td width="100" align="center">-14</td>
          <td width="100" align="center">18</td>
        </tr>                
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">15.</td>
          <td width="70" align="center"><img src="images/Koln.png" width="25px" height="25px"/></td>
          <td width="500" align="left">FC Koln</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">2</td>
          <td width="100" align="center">10</td>
          <td width="100" align="center">-13</td>
          <td width="100" align="center">17</td>
        </tr>                              
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#bd0000; color:#fff;">16.</td>
          <td width="70" align="center"><img src="images/dusseldorf.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Dusseldorf</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">10</td>
          <td width="100" align="center">-18</td>
          <td width="100" align="center">15</td>
        </tr>               
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#bd0000; color:#fff;">17.</td>
          <td width="70" align="center"><img src="images/Werder.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Werder Bremen</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">9</td>
          <td width="100" align="center">-28</td>
          <td width="100" align="center">14</td>
        </tr>        
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#bd0000; color:#fff;">18.</td>
          <td width="70" align="center"><img src="images/Paderborn.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Paderborn</td>
          <td width="100" align="center">17</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">11</td>
          <td width="100" align="center">-16</td>
          <td width="100" align="center">12</td>
        </tr>
      </table>
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
