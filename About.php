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
                    
                      <div class="row">
                            <?php
                                include("nav.html");
                            ?>
                       </div>
                       <div class="row">     
                            <div class="col-lg-4" style="border:solid 40px;font-size: 30px;color:blue;background-color:lightblue;">
                                    <h3>This is the About page</h3>
                                    <h2 class="text-center">some of the basketball styles.</h2>
                                    <?php
                                       include("carousel.html");
                                    ?>
                            </div>
                            
                              <div class="col-lg-4" style="border:solid 40px;font-size: 30px;color:black;background-color:lightblue;">
                                    <h3>This is the About page</h3>
                              
                                  <table background="Tulips,jpg">
                                    <tr>
                                      <th>number</th>
                                      <th>first name</th>
                                      <th>second name</th>
                                      <th>Address</th>
                                    </tr>
                                    <tr>
                                      <td>1</td>
                                      <td>Mercy</td>
                                      <td>Akampulira</td>
                                      <td>0754638295</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>Owen</td>
                                      <td>Mugarura</td>
                                      <td>0752389072</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>Mahoro</td>
                                      <td>Keeza</td>
                                      <td>0793456245</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Raymond</td>
                                        <td>Masette</td>
                                        <td>0734265743</td>
                                      
                                    </tr>
                                  </table><br>
                                              
                                          <?php
                                  include("details.php")
                                        ?>
                              </div>
                              
                              <div class="col-lg-4"style="border:solid 40px;font-size: 30px;color:blue;background-color:lightblue;">
                                <h3>This is the About page</h3>
                              </div>
                    </div>
                
                  
                        <div class="row" >
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