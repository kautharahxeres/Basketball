
<?php
    require_once ("connect.php"); 
   
    // $query = "SELECT * FROM basketball WHERE ID=?";
    // $result = mysqli_query($connect,$query);
   

?>
<html>
    <head>
        <meta acharset="UTF-8">
        <title>Add info</title>
        <style>
            div{ width:100%; padding:5px}
            p{ font-family: verdana;font-size: 20px; color:black;}
            .row {display: flex;justify-content: space-between;margin-bottom: 10px;}
            .column {border: 20px solid yellow;padding: 12px;flex: 3;}
            h4{color:blue;}
        </style>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body style="background-color:lightblue;">
        <h3 style="color:blue;">Fill in carefully!</h3>
        <div class="container-fluid">
        <div class="row"  >
        <?php
            include("nav.html");
        ?>
        </div>  
        <div class="row" >
            <?php
              if(isset($_GET['ID'])){
                $id = $_GET['ID'];
                 }
                //  (global variable) string $query
                 $query= "SELECT * FROM dribble WHERE id =?";
                 $stmt = mysqli_prepare($connect, $query);
                 mysqli_stmt_bind_param($stmt, "i", $id);
                 mysqli_stmt_execute($stmt);
                 $result = mysqli_stmt_get_result($stmt);
                 $data = mysqli_fetch_assoc($result);
                 if ($data){}
            ?>
                <div class="col-lg-6" style="background-color:pink; border:solid blue; border-radius:50px; ">
                
                        <form action="processupdate.php" method="POST">
                            <input type="hidden" name="ID" value="<?php echo $data ['id'];?>">
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
                            <center><button type="submit" class="btn btn-primary">submit</button></center>    
                        </form>
                 <?php ?>           
                </div>
                
                <div class="col-lg-6" style="background-color:pink; border:solid blue; border-radius:50px; ">  
                        <form>
                            <center><h4> GET MORE INFORMATION FROM;</h4></center>
                            <ul type="box">
                                <li>
                                    <label for="Tiktok">Tiktok</label>
                                    <input type="checkbox" name="tiktok"><br>
                                    <a href="https://tiktok.com">Tiktok</a>
                                </li>  
                            
                                <li>
                                    <label for="Facebook">Facebook</label>
                                    <input type="checkbox" name="facebook"><br>
                                    <a href="https://facebook.com">Facebook</a>
                                </li>
                            
                                <li>
                                    <label for="Youtube">Youtube</label>
                                    <input type="checkbox" name="youtube"><br>
                                    <a href="https://youtube.com">Youtube</a>
                                </li>
                            

                                <li>
                                    <label for="Instagram">Instagram</label>
                                    <input type="checkbox" name="instagram"><br>
                                    <a href="https://instagram.com">instagram</a> 
                                </li>
                            <hr>
                            </ul>
                            <center>
                                <h4>We are located on Equinox shopping mall ,Chopper building Opp.Catelage Restaurant Room132.</h4>
                                <h4>For more information, call us on;.</h4>
                                <h4>+256758678458, +256757687476, +256658954975.</h4>
                                <h4>Basketball256@gmail.com is our email address.</h4>
                                <h4>"DRIBBLE FOR LIFE"</h4>    
                                <h4>*******WE LOOK FORWARD TO SERVING YOU*******
                                <?php
                                    include("manylogos.php");
                                ?>
                                </h4>
                            </center>    
                        </form>
                </div>            
        </div>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>