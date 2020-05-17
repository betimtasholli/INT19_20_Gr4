<!DOCTYPE html>
<html>
  <head>
    <title>Talk Football</title>
    <link rel="stylesheet" type="text/css" href="styles/signIn.css" />

      <script type="text/javascript">
        $(document).ready(function() {
        var frm = $('#myForm');
        frm.submit(function(e){
            e.preventDefault();

            var formData = frm.serialize();
            formData += '&' + $('#Nderro').attr('name') + '=' + $('#Nderro').attr('value');
            $.ajax({
                type: frm.attr('method'),
                url: frm.attr('action'),
                data: formData,
                success: function(data){
                    $('#message').html(data).delay(3000).fadeOut(3000);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#message').html(textStatus).delay(2000).fadeOut(2000);
                }

                });
        });
      });
      </script>
  </head>

  <body>
    <div class="main">
      <div class="logo" style="display: flex; justify-content: center;">
        <a href="index.php">
          <img src="images/tflogo.png" />
        </a>
      </div>
      <div class="signUpforms">
        <h2 style="text-align: center; padding-top: 20px; padding-bottom: 20px;">Nderro fjalekalimin</h2>
        <form name="myForm" style="padding-left: 40px;" action="newPassword.php" method="POST">
          <div class="oldPassword">
            <label for="password" style="padding-left:6px;"> Old Password</label></br>
            <input
              type="password"
              placeholder="Shkruani passwordin e vjeter"
              name="oldPassword"
              id="oldPassword"
            />
          </div>
          <div class="newPassword">
            <label for="password" style="padding-left:6px;">Passwordi i ri</label></br>
            <input
              type="password"
              placeholder="Shkruani passwordin e ri"
              name="newPassword"
              id="newPassword"
            />
          </div>
          <div class="retypeNewPassword">
            <label for="password" style="padding-left:6px;">Konfirmoni passwordin e ri</label></br>
            <input
              type="password"
              placeholder="Shkruani passwordin e ri"
              name="retypeNewPassword"
              id="retypeNewPassword"
            />
          </div>
          <div class="submitButtoni" style="padding-top: 10px; padding-bottom: 30px;">
            <input type="submit" value="Nderro" name="Nderro"/>
          </div>
      </div>
      <div class="toLogin">
        <p style="text-align: center;">Nuk keni llogari akoma? <a href="signUp.php">Regjistrohu</a> </p>
        
      </div>
    </div>
  </body>
</html>
