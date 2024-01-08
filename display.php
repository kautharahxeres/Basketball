<html>
    <head>
        <meta charset="utf-8">
        <title>Our display </title>
       
        <style>
            .row {display: flex; justify-content: space-between; margin-bottom: 10px;}
            .column {border:20px solid; padding:12px; flex:3;} 
            h2{color:black;}
            h5{color:black;}
        </style>    
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body style="background-color:pink;">  
        <div class="container">
                <div class="row" style="border:8px;">
                    <?php 
                        include("nav.html");
                    ?>
                </div>
                <img src="capture.JPG" width="1100" height="150"><hr>
                <div class="row">
                    <div class="col-lg-4" >
                       <div class="card">
                            <img src="good1.jpg" width="350" height="200">
                       </div>
                    </div>
                    <div class="col-lg-4" >
                    <div class="card" style="background-color:lightblue;">
                            <?php
                                
                                function dateandtime() {
                                    date_default_timezone_set('Africa/Nairobi');
        
                                    $currentDateTime = date('Y-M-D H:i:s');
        
                                    
                                    echo "Current Date and Time:". $currentDateTime;
                                }
                                    dateandtime();
                            ?>
                                <h2>About Basketball.</h2> 
                                <h5><b>Basketball</b> is a team sport in which two teams, most commonly of five players each,
                                opposing one another on a rectangular court.</h5>
                        </div>
                    
                    </div>
                    <div class="col-lg-4" >
                       <div class="card">
                            <img src="good2.jpg" width="350" height="200">
                       </div>
                    </div>
                   
                </div>
                
                <div class="row" >
                    <div class="col-lg-4" >
                        <div class="card" style="background-color:lightblue;">
                            <ul type="blackcircle">
                               <li><h5>It is all about aiming for th ehoop that you will make the best basket.</h5></li> 
                                <li><h5> Aim to make a basket.</h5></li>
                                <li><h5>Defence is the major to key to pronological success in basketball.</h5></li>
                                <li><h5>Pass ball always and keep a close eye contact to your opponent.</h5></li>
                            </ul>    
                       </div> 
                    </div>
                     
                    <div class="col-lg-4" >
                        <div class="card">
                            <img src="good3.jpg" width="350" height="200">
                        </div>     
                    </div>
                  
                    <div class="col-lg-4" >
                        <div class="card" style="background-color:lightblue;">
                            <h2>Basic positions in basketball.</h2>
                            <h5>
                                <ul type="blackcircle">
                                    <li>Center </li>
                                    <li>Power forward</li>
                                    <li>Small forward</li>
                                    <li>Point guard</li>
                                    <li>Shooting guard</li>    
                                </ul>
                            </h5>
                        </div>
                    </div>
                
                </div>
                <div class="row">
                    <div class="col-lg-4" >
                        <div class="card">
                            <img src="good4.jpg" width="350" height="300">
                        </div>           
                    </div>
                    <div class="col-lg-4" >
                        <div class="card" style="background-color:lightblue;" >
                            <h2>Basketball rules.</h2>
                            <h5>
                                <ul type="blackcircle">
                                    <li>The basketball can be moved by either dribbling or passing. </li>
                                    <li>Once a player puts two hands on the ball,they cannot then dribble or move with the ball. It must be passed or shot.</li>
                                    <li>Per team there should only be five players.</li>
                                    <li>The offence has 4 seconds to inbound the ball.</li>
                                    <li>Ball and ballhandler must remain inbounds.</li>
                                </ul>    
                            </h5>        
                        </div>
                    </div>
                    <div class="col-lg-4" >
                       <div class="card">
                            <img src="good5.jpg" width="350" height="300">  
                       </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-4" >
                        <div class="card" style="background-color:lightblue;">
                        <ul type="balckcircle">    
                            <li><h5>Sometimes you get to think that short people don't play basketball.</h5></li>
                            <li><h5> But get to know this.</h5></li>
                            <li><h5> It is all about having skills that you make a basket.</h5></li>
                            <li><h5>Jumping skills are more so helpful.</h5></li>
                        </ul>
                        </div>           
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img src="ball6.jpg" width="350" height="250">    
                        </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="card" style="background-color:lightblue;">
                       <ul type="blackcircle">    
                            <li><h5>Displine is another key to being a great player.</h5></li>
                            <li><h5>Have a piece of mind in you so as to enable you to make the best out of basketball.</h5></li>
                            <li><h5>Basketball is not only a game but also a physiotherapy.</h5></li>
                            <li><h5>Learn basketball for the better.*****</h5></li>
                       </ul>    
                       </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-lg-4" >
                        <div class="card">
                            <img src="good7.jpg" width="350" height="300">
                        </div>           
                    </div>
                    <div class="col-lg-4" >
                        <div class="card" style="background-color:lightblue;" >
                            <h2>Basketball basics.</h2>
                            <h5>
                                <ul type="blackcircle">
                                    <li>Find basketball. </li>
                                    <li>Learn Basketball. </li>
                                    <li>Love basketball. </li>
                                    <li>Practise basketball. </li>
                                    <li>Achieve basketball skills.</li>
                                    <li>Memorise basketball skills.</li>
                                    <li>Apply basketball skills.</li>
                                    <li>Then you'll win a basketball game.</li>
                                </ul>    
                            </h5>        
                        </div>
                    </div>
                    <div class="col-lg-4" >
                       <div class="card">
                            <img src="goog8.jpg" width="350" height="300">  
                       </div>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-lg-4" >
                        <div class="card">
                            <img src="ball4.jpg" width="350" height="300">
                        </div>           
                    </div>  
                    <div class="col-lg-4" >
                        <div class="card">
                            <img src="ball7.jpg" width="350" height="300">
                        </div>
                    </div>
                    <div class="col-lg-4" >
                        <div class="card">
                            <img src="ball5.jpg" width="350" height="300">
                        </div>           
                    </div>               
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card" style="background-color:lightblue;">
                            <h2>
                                <marquee>
                                    Basketball256@gmail.com is our address.Visit our website for
                                    more workouts.Visit our website for more drills. Call us on 0703507646.
                                    "Dribble for life".
                                </marquee>
                            
                            </h2>
                        </div>        
                    </div>
                        
                    <div class="col-lg-4">
                        <div class="card" style="background-color:lightblue;">
                            <h2>
                                <marquee>
                                    <?php
                                        include("manylogos.php");
                                    ?>
                                </marquee>
                                
                            </h2>
                        </div>  
                    </div>
                    
                    
                    <div class="col-lg-4">
                        <div class="card" style="background-color:lightblue;">
                            <h2>
                                <marquee>Follow us on tiktok, facebook, instagram and youtube @Basketball256. </marquee>
                            </h2>
                        </div>
                    </div>
                </div>    
                
        </div> 
        <script src="js/bootstrap.min.js"></script> 
    </body>    
</html>