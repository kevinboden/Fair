<!DOCTYPE html>
 <html lang="de">
 <head>
 <title>Developer Page</title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="css/style-developer.css" type="text/css" />
 </head>

 <body>

  <div class="container">
    
    <div class="header">
      Developer Page
    </div>

    <div class="tabs">
      <div>
        Beitrag erstellen für:
      </div>
      <div id= "food" onclick="changeColor(this.id) ,changeValue(this.id)">
          Food
      </div>
      <div id= "beauty" onclick="changeColor(this.id),changeValue(this.id)">
          Beauty
      </div>
      <div id= "fashion" onclick="changeColor(this.id),changeValue(this.id)">
          Fashion
      </div>
      <div id= "lifestyle" onclick="changeColor(this.id),changeValue(this.id)"> 
          Lifestyle
      </div>
    </div>

    <div class="inputBox">
      <form action="upload.php" method="post">
        <input type="hidden" id="type" name="type" value="default">
        <div>
          <textarea style="width: 50em;" class="inputText" placeholder="Text eingeben" name="content" id="contentBlog"></textarea>
        </div>
        <div class="buttonBox">
          <button type="submit" class="submitButton"  id="contentButton">Upload</button>
        </div>
      </form>
    </div>
    
  </div>

  <script>
    function changeColor(id) {
        
        var div = document.getElementById(id);

        var food = document.getElementById('food');
        var fashion = document.getElementById('fashion');
        var lifestyle = document.getElementById('lifestyle');
        var beauty = document.getElementById('beauty');
        var tabs = [food, fashion, lifestyle, beauty];

        tabs.forEach (function(item){
          item.style.background = 'white';
          item.style.color = 'black';
        });
              
        div.style.background = 'black';
        div.style.color = 'white';
    }

    function changeValue($id) {
      document.getElementById("type").value = $id;
    }
  </script>
 </body>

 </html>
