<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Index .</title>
     <style>
     div{background-color:black; width:100%; padding:5px}
      h2{color: black;  text-align: center;}
      h3{color:white;text-decoration-style:wavy;}
      p{ font-family:  verdana;font-size: 20px; color: red;}
    .class1{background-color: blue;color: yellow; text-align: right; font-size: larger;}
    .row {display: flex;justify-content: space-between;margin-bottom: 10px; }
    .column {border: 20px solid yellow;padding: 12px;flex: 3;} 
    button{color:blue;}
    li{color:forestgreen}
    img{
      width: 200px;
      border-radius: 100px;
    } 
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
  </head>
  <body background="basket3.jpg" >
    <div class="container">
      
          <div class="row" >
            <?php 
              include("nav.html");
            ?>
          </div>
      
        
          <div class="row"style="border:solid 2px black; border-radius:50px;background-color:teal;" >
            <div class="col-lg-4" style="border:solid 2px black;border-radius:50px; background-color:lightblue;">
              <b><h2>Why I love programming.</h2></b>
              <ul type="circle">
                <li><p>Javascript</p></li>
                <li><p>Java</p></li>
                <li><p>Python</p></li>
                <li><p>PHP</p></li>
                <li><p>Bootsrap</p></li>
              </ul>
              <video width="300px" height="200"  controls>
                  <source src="vid.mp4" type="video/mp4">
                  <source src="vid.ogg" type="video/ogg">Your browser does not support the video.
              </video>
            </div>
            <div class="col-lg-4" style="border:solid 2px black;border-radius:50px;background-color:purple;" >
             <h3>WEB IMAGE CORNER!!</h3>
             <marquee>
                <img src="basket1.jpg" >
                <img src="basket2.jpg" >
                <img src="basket3.jpg" >
             </marquee>
            </div>
            <div class="col-lg-4" style="border:solid 2px black;border-radius:50px; background-color:lightblue;" >
              <h2>About my project</h2>
              <ul type="blackcircle">
                <li><p>We get to learn about new basic skills of basketball.</p></li>
                <li><p>Short-term drills for warm-up before starting a game.</p></li>
                <li><p>Best basketball players in the world.</p></li>
                <li><p>How to train in the fastest way possible so as to win a game.</p></li>
                <li><p>How to dribble fastest in a game.</p></li>
                <h2>"IT'S ALL ABOUT BASKETBALL"</h2>
              </ul>
            </div>
          </div>

          <div class="row" style="border:solid 2px black; border-radius:50px; background-color:teal;" >
              <div class="col-lg-4"style="border:solid 2px black;border-radius:50px;background-color:purple;">
                  <h2>Basketball256@gmail.com is our address.Visit our website for more workouts.</h2>
              </div>
              
              <div class="col-lg-4"style="border:solid 2px black;border-radius:50px;background-color:lightblue;">
                  <h2>Visit our website for more drills. Call us on 0703507646. "Dribble for life".</h2>  
              </div>
               
              <div class="col-lg-4"style="border:solid 2px black;border-radius:50px;background-color:purple;">
                  <h2> Follow us on tiktok, facebook, instagram and youtube  @Basketball256.</h2> 
              </div>
        </div>         
   
    </div>
    <script src="js/bootstrap.min.js"></script> 
  </body>
</html>
                