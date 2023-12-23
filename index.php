<html lang="en">
  <head>
    <title> Index .</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
     div{background-color:pink; width:100%; padding:5px}
      h1{color: #40a944;  text-align: center;}
      p{ font-family:  verdana;font-size: 20px; color: red;}
    .class1{background-color: blue;color: yellow; text-align: right; font-size: larger;}
    .row {display: flex;justify-content: space-between;margin-bottom: 10px;border: yellow; }
    .column {border: 20px solid yellow;padding: 12px;flex: 3;} 
    button{color:blue;}
    li{color:forestgreen}
    img{
      width: 200px;
      border-radius: 100px;
    } 
    </style>
  </head>
  <body>
    <div class="container">
      
          <div class="row" style= "border:solid 2px black; border-radius:50px;k;">
          <?php 
            include("nav.html");
          ?>
          </div>
      
        
          <div class="row"style="border:solid 2px black; border-radius:50px;" >
            <div class="col-lg-4" style="border:solid 2px black;border-radius:50px; background-color:aqua;">
              <b><h3>Why I love programming.</h3></b>
              <ul type="circle">
                <li><p>Javascript</p></li>
                <li><p>Java</p></li>
                <li><p>Python</p></li>
                <li><p>PHP</p></li>
                <li><p>Bootsrap</p></li>
              </ul>
            </div>
            <div class="col-lg-4" style="border:solid 2px black;border-radius:50px;" >
             <h3> MY IMAGE</h3>
             <img src="mulungi.jpg" >
            </div>
            <div class="col-lg-4" style="border:solid 2px black;border-radius:50px; background-color:aqua;" >
              <h3>About my project</h3>
              <ul type="s circle">
                <li><p>We get to learn about new basic skills of basketball.</p></li>
                <li><p>Short-term drills for warm-up before starting a game.</p></li>
                <li><p>Best basketball players in the world.</p></li>
                <li><p>How to train in the fastest way possible so as to win a game.</p></li>
                <li><p>How to dribble fastest in a game.</p></li>
                <h2>"IT'S ALL ABOUT BASKETBALL"</h2>
              </ul>
            </div>
          </div>

          <div class="row" style="border:solid 2px black; border-radius:50px;" >
              <div class="col-lg-4"style="border:solid 2px black;border-radius:50px;">
                  <h2>Basketball256@gmail.com is our address.Visit our website for more workouts.</h2>
              </div>
              
              <div class="col-lg-4"style="border:solid 2px black;border-radius:50px;">
                  <h2>Visit our website for more drills. Call us on 0703507646. "Dribble for life".</h2>  
              </div>
               
              <div class="col-lg-4"style="border:solid 2px black;border-radius:50px;">
                  <h2> Follow us on tiktok, facebook, instagram and youtube at Basketball256.</h2> 
              </div>
        </div>         
      </form>
    </div>  
  </body>
</html>
                