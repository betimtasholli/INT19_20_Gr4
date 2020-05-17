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
        <img src="images/laliga.png" style="width:auto; height: 150px; margin-left: auto; margin-right: auto; display: block;"/>
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
          <td width="70" align="center"><img src="images/barcelona.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Barcelona</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">12</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">26</td>
          <td width="100" align="center">39</td>
        </tr>
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#004682; color:#fff;">2.</td>
          <td width="70" align="center"><img src="images/realmadrid.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Real Madrid</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">10</td>
          <td width="100" align="center">7</td>
          <td width="100" align="center">1</td>
          <td width="100" align="center">21</td>
          <td width="100" align="center">37</td>
        </tr>
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#004682; color:#fff;">3.</td>
          <td width="70" align="center"><img src="images/sevilla.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Sevilla</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">10</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">34</td>
        </tr>      
          <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#004682; color:#fff;">4.</td>
          <td width="70" align="center"><img src="images/amadrid.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Atlético Madrid</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">2</td>
          <td width="100" align="center">9</td>
          <td width="100" align="center">32</td>
        </tr>      
          <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#7f0029; color:#fff;">5.</td>
          <td width="70" align="center"><img src="images/realsociedad.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Real Sociedad</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">9</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">9</td>
          <td width="100" align="center">31</td>
        </tr>       
         <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">6.</td>
          <td width="70" align="center"><img src="images/getafe.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Getafe CF</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">9</td>
          <td width="100" align="center">30</td>
        </tr>                
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">7.</td>
          <td width="70" align="center"><img src="images/bilbao.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Ath. Bilbao</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">7</td>
          <td width="100" align="center">7</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">7</td>
          <td width="100" align="center">28</td>
        </tr>         
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">8.</td>
          <td width="70" align="center"><img src="images/valencia.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Valencia</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">7</td>
          <td width="100" align="center">7</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">28</td>
        </tr>               
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">9.</td>
          <td width="70" align="center"><img src="images/levante.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Levante</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">2</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">-2</td>
          <td width="100" align="center">26</td>
        </tr>         
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">10.</td>
          <td width="70" align="center"><img src="images/villareal.png" width="25px" height="25px"/></td>
          <td width="100" align="left">Villarreal</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">7</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">7</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">25</td>
        </tr>                
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">11.</td>
          <td width="70" align="center"><img src="images/granada.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Granada</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">7</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">-1</td>
          <td width="100" align="center">24</td>
        </tr>        
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">12.</td>
          <td width="70" align="center"><img src="images/osasuna.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Osasuna</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">1</td>
          <td width="100" align="center">23</td>
        </tr>                
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">13.</td>
          <td width="70" align="center"><img src="images/realbetis.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Real Betis</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">7</td>
          <td width="100" align="center">-6</td>
          <td width="100" align="center">23</td>
        </tr>        
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">14.</td>
          <td width="70" align="center"><img src="images/valladolid.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Valladolid</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">8</td>
          <td width="100" align="center">6</td>
          <td width="100" align="center">-6</td>
          <td width="100" align="center">20</td>
        </tr>                
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">15.</td>
          <td width="70" align="center"><img src="images/alaves.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Alaves</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">9</td>
          <td width="100" align="center">-9</td>
          <td width="100" align="center">19</td>
        </tr>        
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">16.</td>
          <td width="70" align="center"><img src="images/eibar.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Eibar</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">9</td>
          <td width="100" align="center">-10</td>
          <td width="100" align="center">19</td>
        </tr>                
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#f3f3f3;">17.</td>
          <td width="70" align="center"><img src="images/mallorca.png" width="25px" height="25px"/></td>
          <td width="500" align="left">RCD Mallorca</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">11</td>
          <td width="100" align="center">-14</td>
          <td width="100" align="center">15</td>
        </tr>        
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#bd0000; color:#fff;">18.</td>
          <td width="70" align="center"><img src="images/celtavigo.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Celta Vigo</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">5</td>
          <td width="100" align="center">10</td>
          <td width="100" align="center">-13</td>
          <td width="100" align="center">14</td>
        </tr>               
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#bd0000; color:#fff;">19.</td>
          <td width="70" align="center"><img src="images/leganes.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Leganes</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">3</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">11</td>
          <td width="100" align="center">-14</td>
          <td width="100" align="center">13</td>
        </tr>        
        <tr class="bottomBorder" bgcolor="#fff" height="30">
          <td width="32" align="center" style= " background-color:#bd0000; color:#fff;">20.</td>
          <td width="70" align="center"><img src="images/espanyol.png" width="25px" height="25px"/></td>
          <td width="500" align="left">Espanyol</td>
          <td width="100" align="center">18</td>
          <td width="100" align="center">2</td>
          <td width="100" align="center">4</td>
          <td width="100" align="center">12</td>
          <td width="100" align="center">-22</td>
          <td width="100" align="center">10</td>
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
