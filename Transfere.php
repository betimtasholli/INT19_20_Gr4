<?php  
include('dbConnection.php');
?>


<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/transferet.css" />
    <script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous">
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
              <li><a class="aktiv" href="transfere.php">Transfere</a></li>
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
              <li><a class="header-link" href="rrethnesh.php">Rreth nesh</a></li>
            </ul>
          </div>
        </div>
      </div>
</div>

<div class="slider">
     <div class="container">
      <div class="slider-block">
        <div class="sliderLeft">
          <div class="padding-15">
            <figure>
            <img id="deligt" src="images/deligt.jpg" width="100%" alt="De Ligt me fanelle te Juventusit">
            <figcaption></figcaption>
          </figure>
          <section> 
            <h1 class="slidertitle">Zyrtare : De Ligt futbollist i Juventusit</h1>
            <h3 class="slidertext">Juventus FC njofton se marr&euml;veshja me Amsterdamsche Football Club Ajax NV p&euml;r blerjen p&euml;rfundimtare t&euml; t&euml; drejtave t&euml; regjistrimit t&euml; lojtarit Matthijs de Ligt &euml;sht&euml; arritur p&euml;r nj&euml; shum&euml; prej 75 milion&euml; euro, e pagueshme p&euml;r pes&euml; vite financiare, dhe kosto shtes&euml; prej 10,5 milion&euml; euro".
             "Juventusi dhe lojtari kan&euml; n&euml;nshkruar nj&euml; kontrat&euml; 5-vje&ccedil;are deri m&euml; 30 qershor 2024&rdquo;, thuhet n&euml; njoftimin e klubit italian. Kuptohet q&euml; 10.5 milion&euml; euro shpenzime shtes&euml; shkojn&euml; drejt komisionit p&euml;r agjentin e tij Mino Raiola, nd&euml;rsa lojtari do t&euml; fitoj&euml; 12 milion&euml; euro n&euml; vit, s&euml; bashku me bonuse. </h3>
            </section>
            </div>
           </div>

        <div class="sliderRight">
          <div class="padding-15">
            <figure>
            <img src="images/kane.jpg" width="100%" alt="Harry Kane">
            <figcaption></figcaption>
          </figure>
          <section>
            <h1 class="slidertitle">Harry Kane afer transferimit te PSG</h1>
          <h3 class="slidertext">Sulmuesi anglez, Harry Kane mund t&euml; jet&euml; transferimi i par&euml; i PSG gjat&euml; afatit kalimtar t&euml; janarit.Pas paraqitjeve fantastike me Tottenhamin n&euml; dy vitet e fundit, Harry Kane &euml;sht&euml; b&euml;r&euml; nj&euml;ri nd&euml;r sulmuesit m&euml; t&euml; k&euml;rkuar.
            Anglezi i talentuar s&euml; fundmi &euml;sht&euml; lidhur me nj&euml; kalim t&euml; mundsh&euml;m tek gjiganti francez Paris SG.
            Mediat spanjolle kan&euml; shkruar se PSG do t&euml; ofroj&euml; rreth 200 milion&euml; euro gjat&euml; muajit janar p&euml;r transferimin e Kanes n&euml; "Le Parc des Princes".Gjithashtu p&euml;r Kane mbeten n&euml; gar&euml; edhe skuadrat tjera t&euml; m&euml;dha si Chelsea, Man United dhe Manchester City.&nbsp;</h3>
          </section>
          </div>
          </div>
      </div>
   </div>
</div>
 

  

<div class="content">
  <div class="container">

      <div class="slider-block">

      <div class="contentpost1">
        <img id="kessie" src="images/kessie.jpg" width="223" height="131" alt="kessie">
      <h3 class="contentText">Mesfushori i Milanit, Franck Kessie mund t&euml;
         largohet p&euml;r n&euml; Lig&euml;n Premier n&euml;se klubet
         angleze paguajn&euml; 20 milion&euml; euro p&euml;r sh&euml;rbimet e tij.</h3>
      </div>

      <div class="contentpost2">
        <img src="images/alena.jpg" width="223" height="131" alt="alena">
        <h3 class="contentText">Real Betisi ka njoftuar se arritur ta huazoj&euml; Carles Alenan nga Barcelona.
          Skuadra spanjolle i mori sh&euml;rbimet e mesfushorit deri n&euml; fund t&euml; k&euml;tij sezoni
           nga rivali i La Liga-s&euml;.</h3>
      </div>

      <div class="contentpost3">
        <img src="images/kurzawa.jpg" width="223" height="131" alt="kurzawa">
        <h3 class="contentText">Kurzawa pritet ti bashkohet Interit n&euml; afatin e janarit, transferimi
           i Kurzawas n&euml; Serie A pritet t&rsquo;i kushtoj&euml; Interit jo m&euml; shum&euml; se
           3 milion&euml; euro.&nbsp;</h3>
      </div>

      <div class="contentpost4">
        <img src="images/smalling.jpg" width="223" height="131" alt="smalling">
        <h3 class="contentText">Roma shpejton p&euml;r transferimin e Smalling, 
          qend&euml;rmbrojt&euml; si po k&euml;rkohet nga shum&euml; skuadra angleze.</h3>
      </div>
      
      </div>


      <div class="slider-block">

      <div class="contentpost1">
        <img src="images/ruiz.jpg" width="223" height="131" alt="ruiz">
      <h3 class="contentText">Klubi i madh spanjoll, Real Madridi mendohet se po p&euml;rgatit
         nj&euml; ofert&euml; gjat&euml; ver&euml;s prej 70 milion eurosh p&euml;r mesfushorin 
         e Napolit, Fabian Ruiz.</h3>
    </div>

    <div class="contentpost2">
      <img src="images/eriksen.jpg" width="223" height="131" alt="eriksen">
      <h3 class="contentText">Klube t&euml; shumta n&euml;p&euml;r Evrop&euml; jan&euml; vendosur t&euml; 
        luftojn&euml; p&euml;r n&euml;nshkrimin e mesfushorit t&euml; Tottenham Hotspur
         Christian Eriksen, nd&euml;rsa s&euml; fundmi gar&euml;s i jan&euml; bashkuar
          edhe Interi dhe Juventusi.</h3>
    </div>

    <div class="contentpost3">
      <img src="images/sancho.jpg" width="223" height="131" alt="sancho">
      <h3 class="contentText">Chelsea po e k&euml;rkon me ngulm transferimin e Jadon Sanchos nga Borussia Dortmundi.
         Daily Mail&nbsp;raporton se skuadra gjermane u ka b&euml;r&euml; me dije bluve se 
         p&euml;r ta transferuar Sanchon, duhet t&euml; paguajn&euml; 120 milion&euml; euro.</h3>
    </div>

    <div class="contentpost4">
      <img src="images/vidal.jpg" width="223" height="131" alt="vidal">
      <h3 class="contentText">Vidal duket se nuk do t&euml; largohet nga Barcelona.&nbsp;Mundo Deportivo ka
         shkruar se tekniku i Barcelon&euml;s, Valverde i ka kumtuar Vidalit se nuk do ta
          lejoj largimin e tij, p&euml;r shkak t&euml; paraqitjeve tejet t&euml; mira n&euml;
           ndeshjet e fundit.</h3>
    </div>    

</div>

    </div>
</div>



<div id="footer">
 <div class="container">
  <div class="slider-block">
    <div class="footerLeft">
      <div class="footerLeftPost">
        <img id="icardi" class="footerLeftPhoto" src="images/icardi.jpg" alt="Mauro Icardi img" width="225" height="235" alt="Icardi" align="left">
        <article>
        <h1 class="footerTitle">Icardi te PSG p&euml;r teste mjek&euml;sore</h1>
         <h3 class="footerText">Mauro Icardi m&euml; nuk &euml;sht&euml; lojtari i skuadr&euml;s s&euml; Interit, ku kaloi p&euml;r gjasht&euml; vite t&euml; karrier&euml;s si futbollist.</strong>
          Sulmuesi argjentinas tashm&euml; &euml;sht&euml; huazuar te francez&euml;t e Paris Saint-Germain, e cila n&euml; fund t&euml; sezonit mund ta blej&euml; kartonin e lojtarit.
          Sipas raportimeve t&euml; para, futbollisti do t&euml; ark&euml;toj&euml; 8 milion&euml; euro. n&euml; vit plus bonuset q&euml; do t&euml; jen&euml; t&euml; varura prej rezultateve pozitive t&euml; kampionit t&euml; Ligue 1.
          Theksojm&euml; se parisien&euml;t do t&euml; ken&euml; mund&euml;si q&euml; n&euml; fund t&euml; sezonin ta transferojn&euml; futbollistin, i cili do t&rsquo;iu kushtoj&euml; 50 milion&euml; euro p&euml;r pes&euml; sezone q&euml;ndrimi te sheik&euml;t e Ligue 1.
         
        </h3> 
      </article>
      </div>
    
    </div>
    <div class="footerRight">
      <div class="footerRight1">
        <img src="images/wanbissaka.jpg" width="100" height="100" alt="Wan-Bissaka" align="right"> 
        <h1 class="footerTitle">Zyrtare: Bissaka lojtar i Unitedit</h1>
        <h3 class="footerText">
              Manchester Unitedi ka zyrtarizuar sot (e shtun&euml;) transferimin e mbrojt&euml;sit t&euml; djatht&euml;, Aaron Wan-Bissaka, i cili vjen nga Crystal Palace.
							Ka p&euml;rfunduar me sukses saga e transferimit t&euml; mbrojt&euml;sit anglez nga Crystal Palace te Manchester Unitedit. Aaron eshte njeri nga mbrojtesit e djathte me te mire ne lige.
							
        </h3>

      </div>
      <div class="footerRight2">
        <img id="ibrahimovic" src="images/ibrahimovic.jpg" width="100" height="100" alt="Ibrahimovic" align="right">
        <h1 class="footerTitle"> Zyrtare : Ibrahimovic lojtar i AC Milan</h1>
        <h3 class="footerText"> Suedezi Zlatan Ibrahimovic rikthehet tek ekipi italian Milano. Ky transferim u krye si transfer i lire pasi qe Ibrahimovicit i ka skaduar kontrata me LA Galaxy. Ai ka nenshkruar kontrate 6 mujore ku do te perfitoje 3 milion&euml; euro , dhe do te kete mundesi vazhdimi edhe per nje vit. Pritet qe ridebutimin ta beje kunder Sampdorias</h3>

      </div>
    </div>
</div>
</div>
</div>

<div class="toggleButton">
  <div class="container">
    <button id="footerToggle">Fshih/Shfaq</button>
  </div>
</div>


<script>
$(document).ready(function(){
$("#footerToggle").click(function(){
$("#footer").toggle();
});
});
</script>


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