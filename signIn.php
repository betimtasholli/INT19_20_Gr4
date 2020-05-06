<!DOCTYPE html>
<html>
  <head>
    <title>Talk Football</title>
    <link rel="stylesheet" type="text/css" href="styles/signIn.css" />
  </head>

  <body>
    <div class="main">
      <div class="logo">
        <a href = "index.php">
          <img
            src="images/tflogo.png"
            style="display: block; margin-left: auto; margin-right: auto;"
          />
        </a>  
      </div>
      <div class="signUpforms">
        <h2 style="text-align: center; padding-top: 20px; padding-bottom: 20px;">Kycu</h2>
        <form name="myForm" style="padding-left: 40px;" action="validation.php" method="POST">
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
          <div class="kushtetEPrivatesise" style="display: flex">
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
            <div class="toggleText">
              <p style="padding-left: 10px; padding-top: 5.5px; " >Me mbaj te kycur</p>
            </div>
          </div>
          <div class="submitButtoni" style="padding-top: 10px; padding-bottom: 30px;">
            <input type="submit" value="Kycu" />
          </div>
      </div>
      <div class="toLogin">
        <p style="text-align: center;">Nuk keni llogari akoma? <a href="signUp.php">Regjistrohu</a> </p>
        
      </div>
    </div>
  </body>
</html>
