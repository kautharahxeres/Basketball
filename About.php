<html>
        <head>
            <meta charset="utf-8">
            <title>About us</title>
            <style>
              /* Add some basic styling for better visualization */
         
              img{
                width: 200px;
                border-radius: 100px;
              }
              h3{color: black;}
              h4{color:white;}
            button{background: blue ;color: white; }
            div{ width:100%; padding:5px}
          
            p{ font-family: verdana;font-size: 20px; color:black;}
           
            .row {display: flex;justify-content: space-between;margin-bottom: 10px;}
              .column {border: 20px solid ;padding: 12px;flex: 3;}
 
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
                              <div class="col-lg-4" style="border:solid 40px;font-size: 30px;color:pink;background-color:teal;">
                                      <h3>This is the About page</h3>
                                      <h2 style="color:white;">Some of the basketball styles.</h2>
                                      <?php
                                include("carousel.html");
                            ?>
                              </div>
                            
                              <div class="col-lg-4" style="border:solid 40px;font-size: 30px;color:pink;background-color:teal;">
                                <h3><b>BASKETBALL.</b></h3>
                                <h4>Its a team sport in which two teams, most commoother on anly of five players each, oppossing one another on a rectangular court.</h4>
                                <h4>.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                              </div>

                              <div class="col-lg-4"style="border:solid 40px;font-size: 30px;color:pink;background-color:teal;">    
                                <h3>Basic drills to warm you up before going for a game.</h3>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                              </div>
                      </div>
                
                  
                        <div class="row" >
                              <div class="col-lg-4" style="border:solid 40px;font-size: 30px;color:black;background-color:skyblue;">
                              
                                <h3>Basic drills to warm you up before going for a game.</h3>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                              </div>  
              
                          
                              <div class="col-lg-4" style="border:solid 40px;font-size: 30px;color:black;background-color:skyblue;">
                              
                              
                                <h3>Basic drills to warm you up before going for a game.</h3>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                              </div>
                              
                              <div class="col-lg-4" style="border:solid 40px;font-size: 30px;color:black;background-color:skyblue;">
                              
                                <h3>Basic drills to warm you up before going for a game.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                                <h4>All about our page.</h4>
                              </div>
                        </div>
          </div>            
                    <button type="submit">submit</button> 
          <script src="js/bootstrap.min.js"></script>       
        </body>  
</html>