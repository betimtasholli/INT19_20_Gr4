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
        <h2 style="text-align: center; padding-top: 20px; padding-bottom: 20px;">Dergo email</h2>
        <form name="myForm" style="padding-left: 40px;" action="email.php" method="POST">
          <div class="email">
            <label for="email" style="padding-left:6px;">Dergo email:</label></br>
            <input
              type="text"
              placeholder="Emaili..."
              name="Email"
              id="idemail"
            />
          </div>
          <div class="email">
            <label for="password" style="padding-left:6px;">Subjekti:</label></br>
            <input
              type="text"
              placeholder="Subjekti..."
              name="Subjekti"
              id="idsubjekti"
            />
          </div>
          <div class="email">
            <label for="email" style="padding-left:6px;">Mesazhi:</label></br>
            <input
              type="text"
              placeholder="Mesazhi..."
              name="Mesazhi"
              id="idmesazhi"
            />
          </div>
          
          <div class="submitButtoni" style="padding-top: 10px; padding-bottom: 30px;">
            <input type="submit" value="Send" name="send"/>
          </div>
      </div>

    </div>
  </body>
</html>
