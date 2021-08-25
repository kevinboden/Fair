
<!DOCTYPE html>
<html lang="de">
  <head>
    <title>Fair</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="http://localhost/Fair/css/style.css" type="text/css" />
  </head>
  
  <body>

  <?php
  $test = 1;
  
  ?>
  <div class="container">
    <div class="header">
      <div class="formular">
        <form action="login.php" method="post">
            <div>
              <input type="text" placeholder="Text eingeben" name="psw" id="pswInput">
              <button type="submit" id="pswButton">Anmelden</button>
            </div>
        </form>
      </div>
      <div class="title">
        Verenas wundervolle Website
      </div>  
    </div>

  
    <div class="tabs">
        <a href="Previews.php?type=food">Food</a> 
        <a href="Previews.php?type=beauty">Beauty</a> 
        <a href="Previews.php?type=fashion">Fashion</a> 
        <a href="Previews.php?type=lifestyle">Lifestyle</a> 
    </div>
  
    <div class="bg-img">
      <div class="slides">
        <div class="topnav bullets">
          <div id="circle"></div>
          <div id="circle"></div>
          <div id="circle"></div>
          <div id="circle"></div>
        </div>
      </div>
    </div>
  
    <div class="socialmedia">
      <div><img src="img/facebook.png" style="width: 5em; height: 5em"></div>
      <div><img src="img/youtube.png" style="width: 8em; height: 5em"></div>
      <div><img src="img/instagram.png" style="width: 5em; height: 5em"></div>
      <div><img src="img/twitter.png" style="width: 5em; height: 5em"></div>
    </div>

    <script src="js/index.js"></script>
 </body>

 </html>
