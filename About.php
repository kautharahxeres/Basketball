<html>
        <head>
            <meta charset="utf-8">
            <title>About us</title>
            <style>
              /* Add some basic styling for better visualization */
             
              h3{color: black;}
              h4{color:black;}
            button{background: blue ;color: white; }
            div{ width:100%; padding:5px}
          
            p{ font-family: verdana;font-size: 20px; color:black;}
           
            .row {display: flex;justify-content: space-between;margin-bottom: 10px;}
              .column {border: 20px solid ;padding: 12px;flex: 3;}
 
          </style>
            <link rel="stylesheet" href="css/bootstrap.min.css">

        </head>
        
      <body style="background-color:lightblue;">
              
            
            <div class="container-fluid">
                    
                      <div class="row" >
                            <?php
                                include("nav.html");
                            ?>
                      </div>
                      <div class="row">     
                              <div class="col-lg-6" >
                               
                                  <?php
                                    include("carousel.html");
                                  ?>
                               
                              </div>
                            
                              <div class="col-lg-6" >
                                <div class="card" style="background-color: pink;">
                                  <center>
                                    <h3><b>****BASKETBALL****</b></h3>
                                  </center>
                                  <h4>Its a team sport in which two teams, most comprised  of only 
                                  five players in each teamss, opposing one another on a rectangular court.</h4><hr>
                                  <?php 
                                    include("tables.html");
                                  ?>
                                </div>
                              </div>
                      </div>
                
                  
                      <div class="row" >
                              
                              <div class="col-lg-4" >
                                <div class="card" style="background-color:pink;">
                                    <video width="400" height="350" style=" border-radius:50px;"  controls>
                                      <source src="vid3.mp4" type="video/mp4">
                                      <source src="vid3.ogg" type="video/ogg">Your browser does not support the video tag.
                                    </video>
                                </div>
                              </div>  
              
                          
                              
                              <div class="col-lg-4" >
                                <div class="card" style="border:solid; background-color: pink;">
                                <center>
                                  <b><h2 style="color:green;" >GET TO KNOW THIS !!!</h2></b>
                                    <ol type="i">
                                        <li> <h6> Its a team sport in which two teams, mostly comprised with only 
                                          five players in each team, oppossing one another on a rectangular court.</h6></li>
                                        <li><h6> This page gets to teach you about the major basics of basketball </h6></li>
                                        <li><h6> One gets to learn cool simple steps to becoming the champion of basketball.</h6></li>
                                        <li><h6> All we say is that you can become the best version of yourself by just following the 
                                          simple drills, warm-ups , techniques and overall rules of basketball,you get to learn in the most 
                                          easy way with "Kausha Drills" .</h6></li>
                                    </ol>
                                    <h2>"DRIBBLE FOR LIFE"</h2>
                                </center>
                                
                                </div>
                              </div>
                              
                              <div class="col-lg-4" >
                                <div class="card" style="background-color:pink;" >
                                  <video width="400" height="350"  style=" border-radius:50px;" controls>
                                    <source src="vid4.mp4" type="video/mp4">
                                    <source src="vid4.ogg" type="video/ogg">Your browser does not support the video tag.
                                  </video>
                                </div>
                              </div>
                      </div>
                      
          </div>            
                    <button type="submit">submit</button> 
          <script src="js/bootstrap.min.js"></script>       
        </body>  
</html>