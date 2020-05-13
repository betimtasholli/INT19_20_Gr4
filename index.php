<?php  
include('dbConnection.php');
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Talk Football</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <script>
      function dayandnight() {
        var current = new Date();
        var day_night = current.getHours();
        if (day_night < 12) {
          var copyrightBackgroundColor = document.getElementsByClassName(
            'copyright'
          )[0];
          localStorage.setItem('backgroundColor', '#eee');
          copyrightBackgroundColor.style.backgroundColor = localStorage.getItem(
            'backgroundColor'
          );
        } else {
          var copyrightBackgroundColor = document.getElementsByClassName(
            'copyright'
          )[0];
          localStorage.setItem('backgroundColor', '#bababa');
          copyrightBackgroundColor.style.backgroundColor = localStorage.getItem(
            'backgroundColor'
          );
        }
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
            <nav>
              <ul>
                <li><a class="aktiv" href="index.php">Kreu</a></li>
                <li><a class="header-link" href="lajmet.php">Lajme</a></li>
                <li>
                  <a class="header-link" href="transfere.php">Transfere</a>
                </li>
                <li>
                  <div class="sub-menu">
                    <a class="header-link">Tabelat</a>
                    <div class="sub-menu-content">
                      <a href="premierleague.php">Premier League</a>
                      <a href="laliga.php">La Liga</a>
                      <a href="seriea.php">Serie A</a>
                      <a href="bundensliga.php">Bundesliga</a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="header-link" href="rrethnesh.php">Rreth nesh</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="slider">
      <div class="container">
        <div class="slider-block">
          <div class="slider1">
            <div class="shouts">
              <img
                class="arrowleft"
                src="images/leftarrow1.svg"
                width="20px"
                height="35px"
                alt=""
              />
              <img
                class="arrowright"
                src="images/rightarrow1.svg"
                width="20px"
                height="35px"
                alt=""
              />
            </div>
            <div>
              <h1 class="titulliILajmit">Arberia e dyta</h1>
              <h3 class="lajmi">
                Ekipi i futbollit Arberia nga Dobraja e Lipjanit pas perfundimit
                te stinorit vjeshtor ne ligen e pare te futbollit kosovar
                gjendet ne vendin e dyte. Per shume kjo eshte befasia e stinorit
                vjeshtor , mirepo ekipi i Arberise kane patur paraqitje shume te
                mira dhe mbetet te shihet a do te vazhdoj forma e mire edhe ne
                vazhdimin kampionatit.
              </h3>
              <div class="readmore">
                <a href="#" style="text-decoration: none; color: #cbcdd0;"
                  >Lexo me shume</a
                >
              </div>
            </div>
          </div>
          <div class="slider2">
            <img
              src="images/arberia.jpg"
              width="100%"
              height="100%"
              alt="Arberia"
            />
          </div>
        </div>
      </div>
    </div>

    <div class="shout">
      <div class="container">
        <div class="flex-row">
          <div class="leftArrowShout" onclick="plusSlides(-1)">
            <img src="images/leftarrow.svg" height="60px" ; />
          </div>
          <div class="shoutText">
            <div class="slideshow-container">
              <div class="Lajmet-slideshow">
                <p>
                  Barcelona rikthen interesimin p&euml;r Willianin &ndash;
                  kontrata e brazilianit te Chelsea skadon n&euml; fund t&euml;
                  sezonit.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  Arsenali k&euml;ndellet n&euml; derbi, mposht Manchester
                  Unitedin me golat e sh&euml;nuar ne pjes&euml;n e par&euml;.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  Me gjith&euml; spekulimet, Mourinho ua mbyll der&euml;n
                  lojtar&euml;ve: Nuk do t&euml; ket&euml; transferime n&euml;
                  janar.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  Juventus ka gati kontrat&euml;n e re, d&euml;shiron ta
                  mbaj&euml; Ronaldon deri kur t&rsquo;i mbush&euml; 38 vjet.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  Arteta mendon p&euml;r transferimet e janarit tek skuadra e
                  Arsenalit &ndash; Upamecano, i pari n&euml; list&euml;.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  Real Madridi po e mbyll&euml; dekad&euml;n me m&euml; s&euml;
                  paku gola t&euml; sh&euml;nuara p&euml;r dallim nga vitet e
                  tjera.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  Behrami pas vizitave mjek&euml;sore: Po st&euml;rvitem me
                  Genoan, rikthimi k&euml;tu do t&euml; jet&euml; i
                  shk&euml;lqyesh&euml;m.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  Messi, asistuesi m&euml; i mir&euml; i dekad&euml;s q&euml; po
                  l&euml;m&euml; pas &ndash; 28 m&euml; shum&euml; se
                  p&euml;rcjell&euml;si i dyt&euml;.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  Lampard p&euml;r fitoren ndaj Evertonit: Nuk fitoi taktika,
                  por shpirti dhe d&euml;shira e Chelseat.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  VAR nuk kapi momentin e loj&euml;s me dor&euml; nga Van Dijk
                  &ndash; aty ku edhe filloi aksioni i golit t&euml; vet&euml;m
                  t&euml; sh&euml;nuar nga Liverpooli.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  Rangers triumfojn&euml; n&euml; derbin e &ccedil;mendur skocez
                  n&euml; fush&euml;n e Celtic, gara p&euml;r titull tani
                  b&euml;het edhe m&euml; interesante.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  Luis Alberto: Sekreti i shk&euml;lqimit tim &euml;sht&euml;
                  Inzaghi, dua t&euml; jem n&euml; Euro 2020 me Spanj&euml;n.
                </p>
              </div>
              <div class="Lajmet-slideshow">
                <p>
                  Deschamps: Shpresoj q&euml; Juventusi ta fitoj&euml;
                  Lig&euml;n e Kampion&euml;ve, Ronaldo &euml;sht&euml; kampion
                  i v&euml;rtet&euml;."
                </p>
              </div>
            </div>

            <script>
              var numriiLajmit = 1;
              shfaqLajmin(numriiLajmit);

              function plusSlides(n) {
                shfaqLajmin((numriiLajmit += n));
              }

              function lajmiiShfaqur(n) {
                shfaqLajmin((numriiLajmit = n));
              }

              function shfaqLajmin(n) {
                var i;
                var varguiLajmeve = document.getElementsByClassName(
                  'Lajmet-slideshow'
                );
                if (n > varguiLajmeve.length) {
                  numriiLajmit = 1;
                }
                if (n < 1) {
                  numriiLajmit = varguiLajmeve.length;
                }
                for (i = 0; i < varguiLajmeve.length; i++) {
                  varguiLajmeve[i].style.display = 'none';
                }
                varguiLajmeve[numriiLajmit - 1].style.display = 'block';
              }
            </script>
          </div>
          <div class="rightArrowShout" onclick="plusSlides(1)">
            <img src="images/rightarrow.svg" height="60px;" />
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="slider-block">
          <div class="contentLeft">
            <div class="slider-block">
              <div class="contentLeft1">
                <h1 class="tittleLC">Maldini kerkon Xhaken</h1>
                <img
                  src="images/xhaka.jpg"
                  alt="Granit Xhaka img"
                  height="180px"
                  width="100%"
                  alt=" "
                />
                <h3 class="newsLC">
                  Perveq Haaland Milani i eshte vene pas edhe yllit shqiptar
                  Granit Xhaka pas problemeve qe Xhaka ka me tifozet e
                  Arsenalit.
                </h3>
                <div class="continueReadingLeft">
                  <a
                    href="#"
                    style="
                      text-decoration: none;
                      font-weight: bold;
                      color: #2e3f51;
                      font-size: 12px;
                    "
                  >
                    Vazhdo leximin >>
                  </a>
                </div>
              </div>
              <div class="contentLeft2">
                <h1 class="tittleLC">Oferta e Milanos per Haaland</h1>
                <img
                  src="images/haaland.jpg"
                  alt="Haaland img"
                  height="180px"
                  width="100%"
                  alt=" "
                />
                <h3 class="newsLC">
                  CNN zbulon se Milani ka bere nje oferte per talentin e
                  Salzburgut , Haaland. Mbetet te shihet a do ta pranoje
                  oferten.
                </h3>
                <div class="continueReadingLeft">
                  <a
                    href="#"
                    style="
                      text-decoration: none;
                      font-weight: bold;
                      color: #2e3f51;
                      font-size: 12px;
                    "
                  >
                    Vazhdo leximin >>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="contentRight">
            <div class="contentRight1">
              <h1 class="tittleLC">Barcelona 0-0 Real Madrid</h1>
              <img
                class="RCimg"
                src="images/elclasico.jpg"
                alt="img from Barcelona vs Real Madrid"
                width="60px"
                height="60px"
                align="left"
              />

              <h3 class="newsLC">
                El Clasico mbyllet me rezultat te barabarte pa gola.Te dyja
                ekipet do e ndajne poziten e pare me pike te barabarta . Real
                Madridi pati me shume mundesi shenimi se Barcelona mirepo Ter
                Stegen beri punen e tij ne menyren me te mire .
              </h3>
              <div class="continueReadingRight">
                <a
                  href="#"
                  style="
                    text-decoration: none;
                    font-weight: bold;
                    color: #2e3f51;
                    font-size: 12px;
                  "
                >
                  Vazhdo leximin >>
                </a>
              </div>
            </div>
            <div class="contentRight2">
              <h1 class="tittleLC">Ronaldo shenon nje gol sensacional</h1>
              <img
                class="RCimg"
                src="images/ronaldo.jpg"
                alt="Cristiano Ronaldo img"
                width="60px"
                height="60px"
                align="left"
              />
              <h3 class="newsLC">
                Ronaldo ka shenuar nje gol me koke kunder Sampdorias per
                Juventusin .Ai kerceu 79 cm nga toka , qe shume pak atlete mund
                ta bejne ate.
              </h3>
              <div class="continueReadingRight">
                <a
                  href="#"
                  style="
                    text-decoration: none;
                    color: #2e3f51;
                    font-size: 12px;
                    font-weight: bold;
                  "
                >
                  Vazhdo leximin >>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="footer-block">
          <div class="about">
            <div class="aboutTop">
              <img
                class="aboutImg"
                src="images/virgil.jpg"
                alt="Virgil Van Dijk img"
                width="90px"
                height="90px"
                align="left"
              />
              <h1 class="aboutTittle">Van Dijk flet per Messin</h1>
              <h3 class="aboutText">
                Mbrojtësi i Liverpoolit, Virgil van Dijk thotë se ai është me
                fat që nuk përballet çdo edicion me Lionel Messin. “Kur ju luani
                ndaj Messit dhe ai e tregon formën më të mirë të tij, ju s’mund
                të bëni asgjë".
              </h3>
            </div>
            <div class="aboutBottom">
              <img
                class="aboutImg"
                src="images/guardiola.jpg"
                alt="Pep Guardiola img"
                width="90px"
                height="90px"
                align="left"
              />
              <h1 class="aboutTittle">
                Guardiola flet per BBC
              </h1>
              <h3 class="aboutText">
                Së fundmi është folur se skaudra e Manchester City po planifikon
                të zëvendësojë trajnerin Pep Guardiola. Rezultatet jo të mira të
                ‘Citizens’ kanë bërë që Liverpool të shkëputet me 11 pikë.
              </h3>
            </div>
          </div>
          <div class="twitter">
            <div class="twitterTop">
              <p class="twitterText">
                <abbr style="color: #2d3f51;"> @Zidane </abbr> ka publikuar
                listën prej 19 futbollistëve të ftuar për ndeshjen e sotme që
                Real Madridi e zhvillon me Getafen nga ora 16:00. Nuk është
                ftuar kapiteni, Sergio Ramos
              </p>
            </div>
            <div class="twitterBottom">
              <p class="twitterText">
                <abbr style="color: #2d3f51;">@Vinicius Junior </abbr>ka vuajtur
                jo pak këtë vit me madrilenët. Ai ka treguar bisedën me Marcelon
                para se të nënshkruante me "Los Blancos". 19-vjeçari ka qenë i
                përgatitur për problemet që do të haste në Bernabeu.
              </p>
            </div>
          </div>
          <div class="gallery">
            <table>
              <tr>
                <td>
                  <a href="Lajmet.html#liverpool">
                    <img
                      class="galleryImg"
                      src="images/liverpool.jpg"
                      width="65px"
                      height="65px"
                      align="left"
                  /></a>
                </td>
                <td>
                  <a href="Lajmet.html#mancityveverton">
                    <img
                      class="galleryImg"
                      src="images/mancityveverton.jpg"
                      width="65px"
                      height="65px"
                      align="center"
                  /></a>
                </td>
                <td>
                  <a href="Transfere.html#deligt">
                    <img
                      class="galleryImg"
                      src="images/deligt.jpg"
                      width="65px"
                      height="65px"
                      align="right"
                  /></a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="Transfere.html#kessie">
                    <img
                      class="galleryImg"
                      src="images/kessie.jpg"
                      width="65px"
                      height="65px"
                      align="left"
                  /></a>
                </td>
                <td>
                  <a href="Transfere.html#icardi">
                    <img
                      class="galleryImg"
                      src="images/icardi.jpg"
                      width="65px"
                      height="65px"
                      align="center"
                  /></a>
                </td>
                <td>
                  <a href="Transfere.html#ibrahimovic">
                    <img
                      class="galleryImg"
                      src="images/ibrahimovic.jpg"
                      width="65px"
                      height="65px"
                      align="right"
                  /></a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="Lajmet.html#arsenal">
                    <img
                      class="galleryImg3"
                      src="images/arsenalvmanutd.jpg"
                      width="65px"
                      height="65px"
                      align="left"
                  /></a>
                </td>
                <td>
                  <a href="Lajmet.html#ancelotti">
                    <img
                      class="galleryImg3"
                      src="images/ancelotti.jpg"
                      width="65px"
                      height="65px"
                      align="center"
                  /></a>
                </td>
                <td>
                  <a href="Lajmet.html#arthur">
                    <img
                      class="galleryImg3"
                      src="images/arthur.jpeg"
                      width="65px"
                      height="65px"
                      align="right"
                  /></a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    <button onclick="shkoLart()" id="butoni" title="Kthehu lart">
      Kthehu lart
    </button>

    <script type="text/javascript">
      mybutton = document.getElementById('butoni');

      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 700 ||
          document.documentElement.scrollTop > 700
        ) {
          mybutton.style.display = 'block';
        } else {
          mybutton.style.display = 'none';
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
