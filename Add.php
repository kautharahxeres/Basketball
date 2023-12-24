<html>
    <head>
        <meta charset="utf-8">
        <title>Add info</title>
        <style>
            option{color: forestgreen;}
            h3{color: brown;   }
            button{background: blue ;color: white; }
            div{ width:100%; padding:5px}
            h1{color: yellow;}
            p{ font-family: verdana;font-size: 20px; color:black;}
            .class1{background-color:yellowgreen;color: forestgreen; font-size: larger;}
            .row {display: flex;justify-content: space-between;margin-bottom: 10px;}
              .cell {border: 20px solid yellow;padding: 12px;flex: 3;}
        </style>
    </head>
    <body bgcolor="skyblue">

                <b><h1>This is the add page.</h1></b>
            <h3>Fill in carefully!</h3>
            <div class="container">
                <div class="row" >
                <?php
                    include("nav.html");
                ?>
                </div>  
                <div class="row" >
                            <div class="col-lg-6" >
                            
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
                        
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <h3>OPEN WITH;</h3>
                                    <label for="">Tiktok</label>
                                    <input type="checkbox" name="tiktok">

                                    <label for="">Facebook</label>
                                    <input type="checkbox" name="facebook">

                                    <label for="">Youtube</label>
                                    <input type="checkbox" name="youtube">


                                    <label for="">Instagram</label>
                                    <input type="checkbox" name="instagram">
                                    
                                </div>
                            </div>        
                            
                
                                <button type="btn btn-success">submit</button>    
                    
                </div>
            </div>
            <script src="js/bootstrap.min.js"></script>
    </body>
</html>