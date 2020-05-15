<?php  
include('dbConnection.php');
?>


<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/lajmet.css" />
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
              <li><a class="aktiv" href="lajmet.php">Lajme</a></li>
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
          </div>
        </div>
      </div>
    </div>
    <div class="slider">
      <div class="container">
        <div style="background-color: #212d3a;">
          <img
            id="liverpool"
            src="images/liverpool.jpg"
            width="100%"
            alt="liverpool"
          />

          <div class="sliderNews">
            <h1 class="sliderTittle">
              Liverpooli vazhdon me fitore n&euml; PL
            </h1>
            <h3 class="sliderText">
              Liverpooli ka marr&euml; fitoren e 11-t&euml; radhazi n&euml;
              Lig&euml;n Premier, teksa para tifoz&euml;ve t&euml; vet ka
              mposhtur leht&euml;sisht Sheffield Unitedin 2-0.The Reds kaluan
              shpejt n&euml; ep&euml;rsi kur n&euml; minut&euml;n e kat&euml;rt
              <span style="font-weight: bold;"> Salah </span> sh&euml;noi nga
              af&euml;rsia pas asistimit nga Robertson.Ndërkohë në minutën e
              64-të, <span style="font-weight: bold;"> Sadio Mane </span> shënoi
              golin e dytë në ndeshje pas një bashkëveprimi të mirë me
              Salah.Liverpool ngrit edhe më shumë epërsinë me vendin e dytë,
              pasi tani ka 58 pikë, 13 më shumë se Leicesteri dhe ka një ndeshje
              më pak se ndjekësit e tyre.
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container">
        <div class="contentTop">
          <div class="content-block">
            <div class="contentLeft">
              <img
                id="mancityveverton"
                src="images/mancityveverton.jpg"
                width="99%"
                alt=""
              />
              <h1
                style="color:#1f1f1f; font-size:20px;padding-top: 5px; padding-left:5px"
              >
                Manchester City mposht Evertonin
              </h1>
              <h3
                style="color:#807d77; font-size: 14.5px; padding-top:5px; padding-left:5px"
              >
                Manchester City ka arritur të shënojë fitore në shtëpi ndaj
                Evertonin me rezultat 2-1. Ndeshja doli të jetë e fortë dhe u
                zhbllokua vetëm në pjesën e dytë, pasi pjsa e parë nuk solli
                gola. Me të filluar pjesa e dytë Gabirel Jesus shënoi dy herë.
                Por ndeshjen interesante e bëri goli i Richarlison që shënoi në
                minutën e 71-të për 2-1. Deri në fund nuk kishte më gola dhe
                Manchester City arriti t’i marr tri pikë, që e mbajnë në vendin
                e tretë me 44 pikë.
              </h3>
            </div>
            <div class="contentRight">
              <img
                id="ancelotti"
                src="images/ancelotti.jpg"
                width="99%"
                alt=""
              />
              <h1
                style="color:#1f1f1f; font-size:20px;padding-top: 5px; padding-left:5px"
              >
                Ancelotti: Guardiola është gjeni
              </h1>
              <h3
                style="color:#807d77; font-size: 14.5px; padding-top:5px; padding-left:5px"
              >
                Carlo Ancelotti e ka vlerësuar lartë Pep Guardiolan dhe taktikat
                e tij. Italiani ka thënë për spanjollin se është një gjeni i
                futbollit dhe se i vlerëson lartë taktikat e tij. “Pep është
                trajner fantastik. Kam marrëdhënie të mira me të. Jo shumë në
                ndeshje, por ne e takojmë njëri-tjetrin në konferenca
                nganjëherë. Kemi shumë respekt për njëri-tjetrin”, ka thënë
                Ancelotti. “Në raste të caktuara, ai është gjeni sepse gjithmonë
                përpiqet të bëjë diçka të veçantë në fushë”.
              </h3>
            </div>
          </div>
        </div>
        <div class="contentBottom">
          <div class="content-block">
            <div class="contentLeft">
              <img
                id="topiarte"
                src="images/topiarte.jpeg"
                width="99%"
                alt=""
              />
              <h1
                style="color:#1f1f1f; font-size:20px;padding-top: 5px; padding-left:5px"
              >
                Kush do ta fitoje topin e arte kete fundjave?
              </h1>
              <h3
                style="color:#807d77; font-size: 14.5px; padding-top:5px; padding-left:5px"
              >

              <?php   // Implementimi i explode, implode, trim, substr, printf, str_replace & strlen.
              
              echo "Lionel Messi apo Cristiano Ronaldo? Cili do të jetë pasuesi i Luka Modricit si fitues i Topit të Artë? ";
              echo "Votat qe do e caktojne fituesin e topit te arte, vijne nga: ";

              $array = ['kapitenet e ekipeve', 'gazetaret e shteteve te ndryshme', 'ekspertet e futbollit'];
              echo implode(', ', $array);   // IMPLODE!
              echo ". ";
              
              echo " Ja disa statistika te kanditatave per fitimin e topit te arte: \n".'</br></br>';

              $kanditati1 = '56 40 70 5';
              list($golat, $asistet, $paraqitje, $trofet) = explode(' ', $kanditati1);   // EXPLODE!

              echo str_replace("LM10","Lionel Messi","1. LM10 - Barcelona") . '</br>';   // STR_REPLACE!
              echo "Golat: " . $golat . '</br>';
              echo "Asistet: " . $asistet . '</br>';
              echo "Paraqitje: " . $paraqitje . '</br>';
              echo "Numri i trofeve: " . $trofet . '</br></br>';

              $kanditati2 = '74 50 40 6';
              list($golat, $asistet, $paraqitje, $trofet) = explode(' ', $kanditati2);

              echo str_replace("CR7","Cristiano Ronaldo","2. CR7 - Juventus") . '</br>';  // STR_REPLACE!
              echo "Golat: " . $golat . '</br>';
              echo "Asistet: " . $asistet . '</br>';
              echo "Paraqitje: " . $paraqitje . '</br>';
              echo "Numri i trofeve: " . $trofet . '</br></br>';

              $number = 5;   
              $str1 = "topit te arte";   // PRINTF!
              printf("Ja vlen te theksohet se te dy jane nga %u here fitues te %s.",$number,$str1);

              echo substr("padyshim, Prandaj konsiderohen si dy lojtaret me te mire te te gjitha kohrave.",9)."<br>";   //SUBSTRS!

              echo "Te dy kane shenuar gola me shifer " . strlen($golat) . " shifrore." . '</br>';   // STRLEN!

              $str = "   Fituesi do te zgjedhet te dielen ne ora 19:00 ne Amsterdam te Holandes. ";
              echo trim($str);   // TRIM!

              ?>

              </h3>
            </div>
            <div class="contentRight">
              <img id="arthur" src="images/arthur.jpeg" width="99%" alt="" />
              <h1
                style="color:#1f1f1f; font-size:20px;padding-top: 5px; padding-left:5px"
              >
                Arthur Melo mungon edhe në janar
              </h1>
              <h3
                style="color:#807d77; font-size: 14.5px; padding-top:5px; padding-left:5px"
              >
                Arthur Melo i ka dhënë një lajm të hidhur Barcelonës, pasi do të
                mungojë edhe në janar. Mesfushori brazilian nuk ka luajtur që
                nga starti i muajit dhjetor, derisa ishte zëvendësuar në minutën
                e 73-të në fitoren ndaj Atletico Madridit.Arthur ka pësuar
                lëndim në kofshë dhe pritej se do të rikthehej më 4 janar në
                përballjen ndaj Espanyolit.Mirëpo bëhet e ditur se lojtari do të
                mungojë edhe në janar.
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="footer-block">
          <div class="footerLeft">
            <video controls style="width: 100%; ">
              <source src="videos/milanvliverpool.mp4" type="video/mp4" />
            </video>

            <h1
              style="padding-bottom:5px; padding-top:5px; color:#505050; font-size:18px; padding-left: 5px;padding-right: 5px;"
            >
              AC Milan 3 - 3 Liverpool
            </h1>
          </div>
          <div class="footerCenter">
            <video controls style="width: 100%; ">
              <source src="videos/barcvpsg.mp4" type="video/mp4" />
            </video>

            <h1
              style="padding-bottom:5px; padding-top:5px; color:#505050; font-size:18px; padding-left: 5px;padding-right: 5px;"
            >
              Barcelona 6 - 1 PSG
            </h1>
          </div>
          <div class="footerRight">
            <video controls style="width: 100%; ">
              <source src="videos/swzvsrb.mp4" type="video/mp4" />
            </video>

            <h1
              style="padding-bottom:5px; padding-top:5px; color:#505050; font-size:18px; padding-left: 5px;padding-right: 5px;"
            >
              Switzerland 2 - 1 Serbia
            </h1>
          </div>
        </div>
      </div>
    </div>

    <button onclick="shkoLart()" id="butoni" title="Kthehu lart">
      Kthehu lart
    </button>

    <script type="text/javascript">
      mybutton = document.getElementById('butoni');

      window.onscroll = function() {
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
