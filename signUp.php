<!DOCTYPE html>
<html>
  <head>
    <title>Talk Football</title>
    <link rel="stylesheet" type="text/css" href="styles/signUp.css" />
  </head>

  <body>
    <div class="main">
      <div class="logo" style="display: flex; justify-content: center;">
        <a href="index.php">
          <img src="images/tflogo.png" />
        </a>
      </div>
      <div class="signUpforms">
        <h2
          style="text-align: center; padding-top: 20px; padding-bottom: 20px;"
        >
          Regjistrohu
        </h2>
        <form
          name="myForm"
          style="padding-left: 40px;"
          action="registration.php"
          method="POST"
        >
          <div class="input-container">
            <label for="emri" style="padding-left: 6px;">Emri</label>
            <br />
            <input
              type="text"
              placeholder="Shkruani emrin tuaj..."
              name="emri"
              id="idemri"
              required
            />
          </div>

          <div class="input-container">
            <label for="mbiemri" style="padding-left: 6px;">Mbiemri</label>
            <br />
            <input
              type="text"
              placeholder="Shkruani mbiemrin tuaj..."
              name="mbiemri"
              id="idmbiemri"
              required
            />
          </div>

          <div class="input-container">
            <label for="email" style="padding-left: 6px;">Email</label>
            <br />
            <input
              type="text"
              placeholder="Shkruani email tuaj..."
              name="email"
              id="idemail"
              required
            />
          </div>

          <div class="input-container">
            <label for="password" style="padding-left: 6px;">Password</label>
            <br />
            <input
              type="password"
              placeholder="Shkruani passwordin tuaj..."
              name="password"
              id="idpasswordi"
              required
            />
          </div>

          <div class="input-container">
            <label for="password" style="padding-left: 6px;"
              >Ri-shkruani passwordin</label
            ><br />
            <input
              type="password"
              placeholder="Ri-shkruani passwordin tuaj..."
              name="rewritePassword"
              id="idpasswordi2"
              required
            />
          </div>

          <label for="date">Data e lindjes: </label>
          <input
            type="date"
            name="datelindja"
            id="iddatelindja"
            required
          /><br /><br />

          <div class="gjinia">
            Gjinia: <input type="radio" name="gender" value="Mashkull" required
            <?php if (isset($gender) && $gender=="Mashkull" ) ?>
            />Mashkull <input type="radio" name="gender" value="Femer"
            <?php if (isset($gender) && $gender=="Femer" ) ?>
            />Femer<br /><br />
          </div>

          <div class="kushtetEPrivatesise" style="display: flex;">
            <label class="switch">
              <input type="checkbox" required />
              <span class="slider round"></span>
            </label>
            <div class="toggleText">
              <p style="padding-left: 10px; padding-top: 5.5px;">
                Pajtohem me kushtet dhe termet e privatesise
              </p>
            </div>
          </div>

          <div
            class="submitButtoni"
            style="padding-top: 10px; padding-bottom: 30px;"
          >
            <input type="submit" value="Regjistrohu" />
          </div>
        </form>
      </div>

      <div class="toLogin">
        <p style="text-align: center;">
          Posedoni nje llogari? <a href="signIn.php">Kycu</a>
        </p>
      </div>
    </div>
  </body>
</html>
