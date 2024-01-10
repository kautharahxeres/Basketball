<html lang="en">
  <head>

    <meta charset="utf-8">
    <title> Index .</title>
    <style>
      video{border:solid; margin-bottom:20px; border-radius:15px;}
      div{width:100%; padding:5px}
      h2{color: black;  text-align: center;}
      h3{color:white;}
      p{ font-family:  verdana;font-size: 20px; color: red;}
      .class1{color: yellow; text-align: right; font-size: larger;}
      .row {display: flex;justify-content: space-between;margin-bottom: 10px; }
      .column {border: 20px solid ;padding: 12px;flex: 3;} 
       
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
  </head>
  <body style="background-color:pink;">
    <div class="container">
      
          <div class="row" >
            <?php 
              include("nav.html");
            ?>
  
          </div>
      
        
          <div class="row"style="border:solid 2px green; border-radius:50px;background-color:green;" >
            <div class="col-lg-4" style="border:solid 2px green;border-radius:50px; background-color:lightblue;">
              <b><h2>Welcome to Kausha Drills!!!</h2></b>
              <ul type="circle">
                <li><p>We have alot in stock for you.</p></li>
                <li><p>We offer basketball training online and one attains skills in the shortest time possible.</p></li>
                <li><p>We have tutorials where one get to learn simple moves in the greatest shortest time.</p></li>
                <li><p>On our page, you get to know to more about basketball.</p></li>
                <li><p>****basketball is a skill and you gat to attain one now***</p></li>
              </ul>
              <video width="300px" height="200"  controls>
                  <source src="vid.mp4" type="video/mp4">
                  <source src="vid.ogg" type="video/ogg">Your browser does not support the video.
              </video>
            </div>
            <div class="col-lg-4" style="border:solid 2px green;border-radius:50px;background-color:purple;" >
             <h3>--WEB IMAGE CORNER!!</h3>
             <marquee>
                <img src="good1.jpg" width= "400" height= "600">
                <img src="good2.jpg" width= "400" height= "600">
                <img src="good4.jpg" width= "400" height= "600">
                <img src="good5.jpg" width= "400" height= "600">
                <img src="good6.jpg" width= "400" height= "600">
                <img src="good7.jpg" width= "400" height= "600">
                <img src="goog8.jpg" width= "400" height= "600">
                <img src="good3.jpg" width= "400" height= "600">
             </marquee>
            </div>
            <div class="col-lg-4" style="border:solid 2px green;border-radius:50px; background-color:lightblue;" >
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

          <div class="row" style="border:solid 2px green; border-radius:50px; background-color:green;" >
              <div class="col-lg-4"style="border:solid 2px green;border-radius:50px;background-color:purple;">
                  <h2>Basketball256@gmail.com is our address.Visit our website for more workouts.</h2>
              </div>
              
              <div class="col-lg-4"style="border:solid 2px green;border-radius:50px;background-color:lightblue;">
                  <h2>Visit our website for more drills. Call us on 0703507646. "Dribble for life".</h2>  
              </div>
               
              <div class="col-lg-4"style="border:solid 2px green;border-radius:50px;background-color:purple;">
                  <h2> Follow us on tiktok, facebook, instagram and youtube  @Basketball256.</h2>
                  <?php
                         
                        function displaycurrentdateandtime() {
                              date_default_timezone_set('Africa/Nairobi');

                              $currentDateTime = date('Y-M-D H:i:s');

                             
                              echo "Current Date and Time:". $currentDateTime;
                        }
                              displaycurrentdateandtime();
                    ?>
                      
              </div>
        </div>
        <div class="row">
        
              
              <h2 class="display-6 text-center"  style="background-color:white">Fetch Data From Database in Php</h2>
                  <?php while ($row = mysqli_fetch_assoc($result))?>
                      <div class="col-md-4 mb-4">
                          <div class="card-header">
                              <?php echo $row['ID'] ;?>
                          </div>
                          <div class="card-body">
                              <p class ="card-text"><?php echo $row['ID'] ?>;</p>
                          </div>
                          <div class="card-body">
                              <p class ="card-text"><?php echo $row['Drills'] ?>;</p>
                          </div>
                          <div class="card-body">
                              <p class ="card-text"><?php echo $row['Benefits'] ?>;</p>
                          </div>
                          <div class="card-body">
                              <p class ="card-text"><?php echo $row['RulesAndRegulations'] ?>;</p>
                          </div>
                          <div class="card-body">
                              <p class ="card-text"><?php echo $row['Attire'] ?>;</p>
                          </div>
                          <div class="card-body">
                              <p class ="card-text"><?php echo $row['PlayPosition'] ?>;</p>
                          </div>
                          <div class="card-body">
                              <p class ="card-text"><?php echo $row['Gender'] ?>;</p>
                          </div>
                          <div class="card-footer">
                              <p class ="card-text"><?php echo $row['BestBasketballTeam'] ?>;</p>
                          </div>
                      </div>
        </div>         
   
    </div>
    <script src="js/bootstrap.min.js"></script> 
  </body>
</html>
                