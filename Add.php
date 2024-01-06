<html>
    <head>
        <meta charset="UTF-8">
        <title>Add info</title>
        <style>
            div{ width:100%; padding:5px}
            p{ font-family: verdana;font-size: 20px; color:black;}
            .row {display: flex;justify-content: space-between;margin-bottom: 10px;}
            .column {border: 20px solid yellow;padding: 12px;flex: 3;}
        </style>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body bgcolor="lightblue">

                
                <h3 style="color:blue;">Fill in carefully!</h3>
                <div class="container-fluid">
                <div class="row"  >
                <?php
                    include("nav.html");
                ?>
                </div>  
                <div class="row" >
                            <div  class="col-lg-6">
                                <form action="Action.php" method="POST">
                                    <div class="form-group">
                                        <label for="Drills">Drills:</label>
                                        <input type="text" name="Drills" class="form-control" placeholder="workouts you know">
                                    </div>
                                    <div class="form-group">
                                        <label for="Benefits">Benefits:</label>
                                        <input type="text" name="Benefits" class="form-control" placeholder="gains after working out">
                                    </div>
                                    <div class="form-group">
                                        <label for="RulesAndRegulations">RulesAndRegulations:</label>
                                        <input type="text" name="RulesAndRegulations" class="form-control" placeholder="rules">
                                    </div>
                                    <div class="form-group">
                                        <label for="Attire">Attire:</label>
                                        <input type="text" name="Attire" class="form-control" placeholder="dress code">
                                    </div>
                                    <div class="form-group">
                                        <label for="PlayPosition">Play Position:</label>
                                        <input type="text" name="PlayPosition" class="form-control" placeholder="What do you play?">
                                    </div>
                                  
                                    <!--gender-->
                                    <div class="form-group">
                                        <label for="Gender">Gender:</label>
                                        <select class="form-control" name="Gender">
                                            <option value="female">Female</option>
                                            <option value="male">Male</option> 
                                        </select>
                                    </div>
                                
                                    <!-- best basketball team -->
                                    <div class="form-group">
                                        <label for="BestBasketballTeam">Best basketball team:</label>
                                        <select class="form-control" name="BestBasketballTeam">
                                            <option value="Bull">Bulldogs</option>
                                            <option value="Lake">Lakers</option> 
                                            <option value="Strikers">Strikers L.A</option> 
                                            <option value="Sting">Sting chain</option>
                                            <option value="Dribble">Dribble for life</option> 
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">submit</button>    
                                </form>        
                               
                            </div>
                        
                            <div class="col-lg-6">  
                                <form>
                                    <h3>FOLLOW US AND YOU GET MORE FROM;</h3>
                                    <ul type="box">
                                        <li>
                                            <label for="">Tiktok</label>
                                            <input type="checkbox" name="tiktok"><br>
                                            <a href="https://tiktok.com">Tiktok</a>
                                        </li>  
                                    
                                        <li>
                                            <label for="">Facebook</label>
                                            <input type="checkbox" name="facebook"><br>
                                            <a href="https://facebook.com">Facebook</a>
                                        </li>
                                    
                                        <li>
                                            <label for="">Youtube</label>
                                            <input type="checkbox" name="youtube"><br>
                                            <a href="https://youtube.com">Youtube</a>
                                        </li>
                                    

                                        <li>
                                            <label for="">Instagram</label>
                                            <input type="checkbox" name="instagram"><br>
                                            <a href="https://instagram.com">instagram</a> 
                                        </li>
                                   
                                    </ul>
                                    <h2>Basketball256@gmail.com is our email address.
                                        "DRIBBLE FOR LIFE"
                                        Kausha drills.
                                    </h2>
                                     
                                </form>
                            </div>        
                            
                   
                    
                </div>
            </div>
            <script src="js/bootstrap.min.js"></script>
    </body>
</html>