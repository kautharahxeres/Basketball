<html>
        <head>
            <meta charset="utf-8">
            <title>About us</title>
            <style>
              /* Add some basic styling for better visualization */
             .column{
              background-image:url("flower.jpg");
              background-size:cover;
             background-position:center;
             background-repeat:no-repeat;
             }
              img{
                width: 200px;
                border-radius: 100px;
              }
              h3{color: black;}
            button{background: blue ;color: white; }
            div{ width:100%; padding:5px}
          
            p{ font-family: verdana;font-size: 20px; color:black;}
           
            .row {display: flex;justify-content: space-between;margin-bottom: 10px;}
              .column {border: 20px solid yellow;padding: 12px;flex: 3;}
 
          </style>
            <link rel="stylesheet" href="css/bootsrap.min.css">

        </head>
        
      <body background="photo.png" >
              <h1>This is my about page.</h1> 
            
            <div class="container">
                    
                      <div class="row" style="border:solid 40px;font-size: 15px;color:grey;background-color:white;">
                            <?php
                                include("nav.html");
                            ?>
                       </div>
                       <div class="row">     
                            <div class="col-lg-4" style="border:solid 40px;font-size: 30px;color:magenta;background-color:gold;">
                                    <h3>This is the About page</h3>
                                    <h2 class="text-center">Some of the basketball styles.</h2>
                                    <?php
                                       include("carousel.html");
                                    ?>
                            </div>
                            
                              <div class="col-lg-4" style="border:solid magenta 40px;font-size: 30px;background-color:gold;">
                                    <h3>This is the About page</h3>
                                    <?php
                                       include("tables.html");
                                    ?> <br>
                                              
                                          <?php
                                  include("details.php")
                                        ?>
                              </div>
                              
                              <div class="col-lg-4"style="border:solid 40px;font-size: 30px;color:magenta;background-color:gold;">
                                <h3>This is the About page</h3>
                                            
                                <?php
                                  include("mystylings.html")
                                        ?>
                              </div>
                    </div>
                
                  
                        <div class="row" >
                          <div class="col-lg-4" style="border:solid 40px;font-size: 30px;color:magenta;background-color:gold;">
                            <h3>All about our page.</h3>
                            <h4>Basic drills to warm you up before going for a game.</h4>
                            <h4>All about our page.</h4>
                            <h5>All about our page.</h5>
                            <h5>All about our page.</h5>
                            <h6>All about our page.</h6>
                            <h6>All about our page.</h6>
                          </div>  
          
                       
                          <div class="col-lg-4" style="border:solid 40px;font-size: 30px;color:magenta;background-color:gold;">
                            <h3>All about our page.</h3>
                            <h4>Basic drills to warm you up before going for a game.</h4>
                            <h4>All about our page.</h4>
                            <h5>All about our page.</h5>
                            <h5>All about our page.</h5>
                            <h6>All about our page.</h6>
                            <h6>All about our page.</h6>
                          </div>
                          
                          <div class="col-lg-4" style="border:solid 40px;font-size: 30px;color:magenta;background-color:gold;">
                            <h3>This is the About page</h3>
                            <h4>Basic drills to warm you up before going for a game.</h4>
                            <h4>All about our page.</h4>
                            <h5>All about our page.</h5>
                            <h5>All about our page.</h5>
                            <h6>All about our page.</h6>
                            <h6>All about our page.</h6>
                          </div>
                        </div>
                   
         </div>            
                    <button type="submit btn btn-primary">submit</button> 
          <script src="js/bootstrap.min.js"></script>       
        </body>  
</html>