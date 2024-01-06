<html>
        <head>
            <meta charset="utf-8">
            <title>About us</title>
            <style>
              /* Add some basic styling for better visualization */
              table{background-color:purple;}
             image{border-radius:100px;
            width:100px;}
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
        
      <body >
              
            
            <div class="container-fluid">
                    
                      <div class="row" >
                            <?php
                                include("nav.html");
                            ?>
                      </div>
                      <div class="row">     
                              <div class="col-lg-6" >
                               <div class="card">
                                  <?php
                                    include("carousel.html");
                                  ?>
                                </div>
                              </div>
                            
                              <div class="col-lg-6">
                                <div class="card">
                                  <center>
                                    <h3><b>****BASKETBALL****</b></h3>
                                  </center>
                                  <h4>Its a team sport in which two teams, most comprised  of only 
                                  five players in each teamss, opposing one another on a rectangular court.</h4>
                                  <?php 
                                    include("tables.html");
                                  ?>
                                </div>
                              </div>
                      </div>
                
                  
                      <div class="row" >
                              
                              <div class="col-lg-4" >
                                <div class="card">
                                    <video width="400" height="400"  controls>
                                      <source src="vid3.mp4" type="video/mp4">
                                      <source src="vid3.ogg" type="video/ogg">Your browser does not support the video tag.
                                    </video>
                                </div>
                              </div>  
              
                          
                              
                              <div class="col-lg-4" >
                                  <b><h2 style="color:green;" >GET TO KNOW THIS !!!</h2></b>
                                  <ol type="i">
                                      <li> <h5> Its a team sport in which two teams, mostly comprised with only 
                                        five players in each team, oppossing one another on a rectangular court.</h5></li>
                                      <li><h5> This page gets to teach you about the major basics of basketball </h5></li>
                                      <li><h5> One gets to learn cool simple steps to becoming the champion of basketball.</h5></li>
                                      <li><h5> All we say is that you can become the best version of yourself by just following the 
                                        simple drills, warm-ups , techniques and overall rules of basketball,you get to learn in the most 
                                        easy way with "Kausha Drills" .</h5></li>
                                  </ol>
                                  <h2>"DRIBBLE FOR LIFE"</h2>
                                  
                            <a href="https://google.com">Google</a>
                              </div>
                              
                              <div class="col-lg-4" >
                                <div class="card" >
                                  <video width="400" height="400"  controls>
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