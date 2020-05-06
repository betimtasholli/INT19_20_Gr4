<!DOCTYPE html>
<html>
  <head>
    <title>Talk Football</title>
    <link rel="stylesheet" type="text/css" href="styles/signUp.css" />
  </head>

  <body>
    <div class="main">
      <div class="logo">
        <a href="index.php">
          <img
            src="images/tflogo.png"
            style="display: block; margin-left: auto; margin-right: auto;"
          />
        </a>  
      </div>
      <div class="signUpforms">
        <h2 style="text-align: center; padding-top: 20px; padding-bottom: 20px;">Regjistrohu</h2>
        <form name="myForm" style="padding-left: 40px;">
          <div class="emri">
            <label for="emri" style="padding-left:6px;">Emri</label></br>
            <input
              type="text"
              placeholder="Shkruani emrin tuaj..."
              name="Emri"
              id="idemri"
            />
          </div>
          <div class="mbiemri">
            <label for="mbiemri" style="padding-left:6px;">Mbiemri</label></br>
            <input
              type="text"
              placeholder="Shkruani mbiemrin tuaj..."
              name="Mbiemri"
              id="idmbiemri"
            />
          </div>
          <div class="email">
            <label for="email" style="padding-left:6px;">Email</label></br>
            <input
              type="text"
              placeholder="Shkruani email tuaj..."
              name="Email"
              id="idemail"
            />
          </div>
          <div class="password">
            <label for="password" style="padding-left:6px;">Password</label></br>
            <input
              type="password"
              placeholder="Shkruani passwordin tuaj..."
              name="Password"
              id="idpasswordi"
            />
          </div>
          <div class="retypepass">
            <label for="password" style="padding-left:6px;">Ri-shkruani passwordin</label></br>
            <input
              type="password"
              placeholder="Ri-shkruani passwordin tuaj..."
              name="Password"
              id="idpasswordi2"
            />
          </div>
          <label for="date">Data e lindjes: </label>
          <input type="date" name="datelindja" id="iddatelindja" /></br></br>
          <div class="gjinia">
            Gjinia:
            <input type="radio" name="gender" value="male" />Mashkull
            <input type="radio" name="gender" value="female" />Femer</br></br>
          </div>
          <div class="kushtetEPrivatesise" style="display: flex">
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
            <div class="toggleText">
              <p style="padding-left: 10px; padding-top: 5.5px; " >Pajtohem me kushtet dhe termet e privatesise</p>
            </div>
          </div>
          <div class="submitButtoni" style="padding-top: 10px; padding-bottom: 30px;">
            <input type="submit" value="Regjistrohu" />
          </div>
      </div>
      <div class="toLogin">
        <p style="text-align: center;">Posedoni nje llogari? <a href="signIn.php">Kycu</a> </p>
        
      </div>
    </div>
  </body>
</html>
