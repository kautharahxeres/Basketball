<html>
    <head>
        <title>display  page</title>
        <link rel="stylesheet" href="css/bootsrap.min.css">
        <style>
            .row {display: flex; justify-content: space-between; margin-bottom: 10px;border: yellow; background:pink;}
            .column {border: 20px solid yellow;padding: 12px; flex: 3;} 
            button {color:white;background:yellow; }
            h3{color: blue;}
          </style>    
       
    </head>
    <body bgcolor="aqua">
        <b><h1>This is the display page.</h1></b>    
        <div class="container">
            
                
                <div class="row"  style="border:solid 8px red;">
                     <?php
                        include("nav.html");
                     ?>
                </div>
                
                <div class="row" style="border:solid 4px black;" >
                    <div class="col-lg-4">
                        <h3>About Basketball</h3> 
                        <p><b>Basketball</b> is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court.</p>
                        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/image3.png" alt="image1" />
            <!-- Add the overlay element -->
            <div class="overlay"></div>
            <!-- Add content on top of the carousel -->
            <div class="carousel-content">
                <h1 style="font-size:50px;">SOFTECH SOLUTIONS UGANDA</h1>
                <h4 style="font-size:30px;">Leading Web Development hub in Uganda</h4>
            </div>
        </div>
        <div class="carousel-item">
            <img src="basket1.webp" alt="image2" />
            <!-- Add the overlay element -->
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>We offer Backend Training</h2>
                <p>We have trained thousands of students in web development</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="basket2.jpg" alt="image3" />
            <!-- Add the overlay element -->
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>Superb training in frontend</h2>
                <p style="text-align: center;">We offer training in HTML5, CSS, Bootstrap5 and Javascript Frameworks</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="basket3.jpg" alt="image4" />
            <!-- Add the overlay element -->
            <div class="overlay"></div>
            <div class="carousel-content">
                <h2>We offer DevOps</h2>
                <p>We have excellent trainings on hosting applications
                    <br>both online and locally using docker, kubernetes, git, CD/CI</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>
                    </div>
                    <hr>
                    <hr> 
                    <div class="col-lg-4">
                        <h3>Basketball rules.</h3>
                        <ul type="blackcircle">
                            <li>The basketball can be moved by either dribbling or passing. </li>
                            <li>Once a player puts two hands on the ball,they cannot then dribble or move with the ball. It must be passed or shot.</li>
                            <li>Per team there should only be five players.</li>
                            <li>The offence has 4 seconds to inbound the ball.</li>
                            <li>Ball and ballhandler must remain inbounds.</li>
                        </ul>

                    </div>
                    <hr>
                    <hr> 
                    <div class="col-lg-4">
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
                <div class="row" style="border:solid 8px red;" >
                    <div class="col-lg-4">
                       <h2>Basketball256@gmail.com is our address.Visit our website for more workouts.</h2>
                    </div>
                    <hr>
                    <hr> 
                    <div class="col-lg-4">
                    <h2>Visit our website for more drills. Call us on 0703507646. "Dribble for life".</h2>  
                    </div>
                    <hr>
                    <hr> 
                    <div class="col-lg-4">
                        <h2> Follow us on tiktok, facebook, instagram and youtube at Basketball256.</h2> 
                    </div>     
            


            </div>

        </div> 
    </body>    
</html>