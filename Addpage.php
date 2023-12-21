<html>
    <head>
        <title>Add page</title>
        <style>
            option{color: forestgreen;}
            h3{color: brown;   }
            button{background: blue ;color: white; }
            div{background-color: lightgrey; width:100%; padding:5px}
            h1{color: yellow;}
            p{ font-family:  verdana;font-size: 20px; color:black;}
            .class1{background-color:yellowgreen;color: forestgreen; font-size: larger;}
        </style>
    </head>
    <body bgcolor="skyblue">

        <b><h1>This is the add page.</h1></b>
    <h3>Fill in carefully!</h3>
    <div class="container">
        <div class="row" style="border:solid 4px red;">
         <?php
            include("nav.html");
          ?>
            <div class="col-lg-6" style="border:solid 5px ;">
                <form>
                    <div class="form-group">
                        <label for="playposition">Play position:</label>
                        <input type="text" class="playposition" name="play position" required>
                    </div>
                    <div>
                        <label for="teamname">Team Name</label>
                        <input type="text" class="TeamName" name="Team name" required>
                    </div>
                    <div>
                        <label for="Role model">Role model:</label>
                        <input type="text" class="RoleModel" name="Role Model" required>
                    </div>
                    <div>
                        <label for="email">Email Address:</label>
                        <input type="email" class="Email" name="email" required>
                    </div>
                    <img src="bitmogi.jpg" width="50" height="20">
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
                </form>        
                
            </div>
                <form>
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
                </form>      
        
                        <button type="btn btn-success">submit</button>    
            
        </div>
</div>

    </body>
</html>