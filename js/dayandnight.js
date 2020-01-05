 <script>
      function dayandnight(){
    var current = new Date();
    var day_night = current.getHours();
    if (day_night<12){
    var copyrightBackgroundColor = document.getElementsByClassName("copyright")[0];
    copyrightBackgroundColor.style.backgroundColor="eee";
    
    }
    
    else {
      var copyrightBackgroundColor = document.getElementsByClassName("copyright")[0];
    copyrightBackgroundColor.style.backgroundColor="#bababa";
    
      }
    }
    </script>