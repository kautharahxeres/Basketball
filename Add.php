<html>
    <head>
        <meta charset="utf-8">
        <title>Add info</title>
        <style>
            option{color: forestgreen;}
            h3{color: black;}
            button{background: blue ;color: white; }
            div{ width:100%; padding:5px}
          
            p{ font-family: verdana;font-size: 20px; color:black;}
           
            .row {display: flex;justify-content: space-between;margin-bottom: 10px;}
              .column {border: 20px solid yellow;padding: 12px;flex: 3;}

        </style>
    </head>
    <body background="hat.png">

                <b><h1>This is the add page.</h1></b>
                <h3 style="color:white;">Fill in carefully!</h3>
                <div class="container"style="height:100%;">
                <div class="row" style="border:solid 40px;font-size: 15px;color:grey;background-color:grey;" >
                <?php
                    include("nav.html");
                ?>
                </div>  
                <div class="row" >
                            <div class="col-lg-6" style="border:solid;font-size: 30px;color:blue;background-color:grey;">
                            
                                    <div class="form-group">
                                        <label for="playposition">Play position:</label>
                                        <input type="text" class="playposition" name="play position" >
                                    </div>
                                    <div>
                                        <label for="teamname">Team Name</label>
                                        <input type="text" class="TeamName" name="Team name" >
                                    </div>
                                    <div>
                                        <label for="Role model">Role model:</label>
                                        <input type="text" class="RoleModel" name="Role Model" >
                                    </div>
                                    <div>
                                        <label for="email">Email Address:</label>
                                        <input type="email" class="Email" name="email" >
                                    </div>
                                  
                                    <!--gender-->
                                    <div class="form-group">
                                        <label for="gender">Gender:</label>
                                        <select class="form-control" name="gender">
                                            <option value="female">Female</option>
                                            <option value="male">Male</option> 
                                        </select>
                                    </div>
                                
                                    <!-- best basketball team -->
                                    <div class="form-group">
                                        <label for="bestbasketballteam">Best basketball team:</label>
                                        <select class="form-control" name="bestbasketballteam">
                                            <option value="Bull">Bulldogs</option>
                                            <option value="Lake">Lakers</option> 
                                            <option value="Strikers">Strikers L.A</option> 
                                            <option value="Sting">Sting chain</option>
                                            <option value="Dribble">Dribble for life</option> 
                                        </select>
                                    </div>   
                                        
                                
                            </div>
                        
                            <div class="col-lg-6" style="border:solid;font-size: 30px;color:purple;background-color:grey" >  
                                    <div class="form-group">
                                    <pulse><h3>OPEN WITH;</h3></pulse>
                                    <ul type="box">
                                        <li>
                                            <label for="">Tiktok</label>
                                            <input type="checkbox" name="tiktok">
                                        </li>  
                                    
                                        <li>
                                            <label for="">Facebook</label>
                                            <input type="checkbox" name="facebook">
                                        </li>
                                    
                                        <li>
                                            <label for="">Youtube</label>
                                            <input type="checkbox" name="youtube">
                                        </li>
                                    

                                        <li>
                                            <label for="">Instagram</label>
                                            <input type="checkbox" name="instagram"> 
                                        </li>
                                   
                                    </ul>
                                   
                <button type="btn btn-success">submit</button>  
                                </div>
                            </div>        
                            
                   
                    
                </div>
            </div>
            <script src="js/bootstrap.min.js"></script>
    </body>
</html>