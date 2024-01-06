<html>
    <head>
        <meta charset="utf-8">
        <title>Our display </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            .card{background}
            .row {display: flex; justify-content: space-between; margin-bottom: 10px;}
            .column {border: 20px solid yellow;padding: 12px; flex: 3;} 
            button {color:white; background:yellow; }
            h2{color:black;}
            h5{color:black;}
        </style>    
       
    </head>
    <body>
            
        <div class="container">
                <div class="row" style="border:8px;">
                    <?php 
                        include("nav.html");
                    ?>
                </div>
                 
                <div class="row" >
                    <div class="col-lg-4" >
                        <div class="card">
                            <?php
                                
                                function displaycurrentdateandtime() {
                                    date_default_timezone_set('Africa/Nairobi');
        
                                    $currentDateTime = date('Y-M-D H:i:s');
        
                                    
                                    echo "Current Date and Time:". $currentDateTime;
                                }
                                    displaycurrentdateandtime();
                            ?>
                                <h2>About Basketball.</h2> 
                                <h5><b>Basketball</b> is a team sport in which two teams, most commonly of five players each,
                                opposing one another on a rectangular court.</h5>
                        </div>  
                    </div>
                     
                    <div class="col-lg-4" >
                        <div class="card" >
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

                    <div class="col-lg-4">
                        <div class="card">
                            <h2>
                                <marquee>Basketball256@gmail.com is our address.Visit our website for more workouts.</marquee>
                            
                            </h2>
                        </div>        
                    </div>
                        
                    <div class="col-lg-4">
                        <div class="card" >
                            <h2>
                                <marquee>Visit our website for more drills. Call us on 0703507646. "Dribble for life". </marquee>
                                
                            </h2>
                        </div>  
                    </div>
                    
                    
                    <div class="col-lg-4">
                        <div class="card" >
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