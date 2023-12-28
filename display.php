<html>
    <head>
        <meta charset="utf-8">
        <title>Our display </title>
        <link rel="stylesheet" href="css/bootsrap.min.css">
        <style>
            .row {display: flex; justify-content: space-between; margin-bottom: 10px; }
            .column {border: 20px solid yellow;padding: 12px; flex: 3;} 
            button {color:white; background:yellow; }
           h3{color:blue;}
            img{
                width: 130px;
                border-radius: 100px;
               }
            
          </style>    
       
    </head>
    <body bgcolor="bromn">
        <b><h1>This is the display page.</h1></b>    
        <div class="container">
            
                
                    <div class="row"  style="border:brown 8px  ;background-color:black;  ">
                        <?php 
                            include("nav.html");
                        ?>
                    </div>
                 
                <div class="row" style="border:solid 4px black;background-color:pink;font-size: 20px;" >
                    <div class="col-lg-4" style="border:solid 8px brown;background-color:white;">
                        <h3>About Basketball</h3> 
                        <p><b>Basketball</b> is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court.</p>
                        <img src="basket1.jpg"  height="200">
                        <img src="basket2.jpg"  height="200">
                        <img src="basket3.jpg"  height="200">
                        <video width="130px" height="200"  controls>
                            <source src="vid.mp4" type="video/mp4">
                            <source src="vid.ogg" type="video/ogg">Your browser does not support the video tag.
                        </video>
                      
                    </div>
                     
                    <div class="col-lg-4" style="border:solid 8px brown;background-color:white;" >
                        <h3>Basketball rules.</h3>
                        <ul type="blackcircle">
                            <li>The basketball can be moved by either dribbling or passing. </li>
                            <li>Once a player puts two hands on the ball,they cannot then dribble or move with the ball. It must be passed or shot.</li>
                            <li>Per team there should only be five players.</li>
                            <li>The offence has 4 seconds to inbound the ball.</li>
                            <li>Ball and ballhandler must remain inbounds.</li>
                        </ul>

                    </div>
                  
                    <div class="col-lg-4" style="border:solid 8px brown;background-color:white;">
                        <h3>Basic positions in basketball.</h3>
                         <ul type="blackcircle">
                            <li>Center </li>
                            <li>Power forward</li>
                            <li>Small forward</li>
                            <li>Point guard</li>
                            <li>Shooting guard</li>
                        </ul>

                    </div>
             </div>
                <div class="row" style="border:solid 8px brown;border-radius:50px;background-color:pink;" >
                    <div class="col-lg-4"style="border:solid 8px brown;border-radius:50px;background-color:white;">
                       <marquee><h2>Basketball256@gmail.com is our address.Visit our website for more workouts.</h2></marquee>
                    </div>
                    
                    <div class="col-lg-4"style="border:solid 8px brown;border-radius:50px;background-color:white;">
                    <marquee><h2>Visit our website for more drills. Call us on 0703507646. "Dribble for life".</h2> </marquee> 
                    </div>
                    
                    <div class="col-lg-4"style="border:solid 8px brown;border-radius:50px;background-color:white;">
                       <marquee><h2> Follow us on tiktok, facebook, instagram and youtube @Basketball256.</h2></marquee>  
                    </div>     
 

            </div>

        </div> 
        <script src="js/bootstrap.min.js"></script> 
    </body>    
</html>