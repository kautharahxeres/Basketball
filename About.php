<html>
        <head>
            <meta charset="utf-8">
            <title>About us</title>
            <style>
              /* Add some basic styling for better visualization */
              .row {display: flex;justify-content: space-between;margin-bottom: 10px;border: yellow; background-color: pink;}
              .cell {border: 20px solid yellow;padding: 12px;flex: 3;}
              button{color:blue;}
              img{
                width: 200px;
                border-radius: 100px;
               } 
          </style>
            <link rel="stylesheet" href="css/bootsrap.min.css">

        </head>
        
      <body bgcolor="skyblue">
              <h1>This is my about page.</h1> 
            
            <div class="container">
                    
                      <div class="row">
                            <?php
                                include("nav.html");
                            ?>
                       </div>
                       <div class="row">     
                            <div class="col-lg-4">
                                    <h3>This is the About page</h3>
                                    <h1 class="text-center">some of the basketball styles.</h1>
                                    <div id="MyCarousel" class="carousel-slide" data-bs-ride="carousel" data-bs-interval="300"></div>
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="myimage.jpg"  alt="image1" />
                                        </div>

                                        <div class="carousel-item">
                                            <img class="img-fluid"  src="basket1.jpg" alt="image2" />
                                        </div>

                                        <div class="carousel-item">
                                            <img class="img-fluid" src="basket2.jpg" alt="image3" />
                                        </div>

                                        <div class="carousel-item">
                                            <img class="img-fluid" src="basket3.jpg" alt="image4" />
                                        </div>

                                    </div>
                                      <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden"></span>
                                      </a>
                                      <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">t</span>
                                      </a>
                                    </div>
                            </div>
                            
                              <div class="col-lg-4">
                                <h3>This is the About page</h3>
                              </div>
                              
                              <div class="col-lg-4">
                                <h3>This is the About page</h3>
                              </div>
                    </div>
                
                  
                        <div class="row">
                          <div class="col-lg-4">
                            <h3>This is the About page</h3>
                          </div>  
          
                       
                          <div class="col-lg-4">
                            <h3>This is the About page</h3>
                          </div>
                          
                          <div class="col-lg-4">
                            <h3>This is the About page</h3>
                          </div>
                        </div>
                   
         </div>            
                    <button type="submit btn btn-primary">submit</button> 
          <script src="js/bootstrap.min.js"></script>       
        </body>  
</html>