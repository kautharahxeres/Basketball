<html>
        <head>
            <meta charset="utf-8">
            <title>Contact Information</title>
            <style>
                div{ width:100%; padding:5px; }
                .row {display: flex;justify-content: space-between;margin-bottom: 10px;}
                .column {border: 20px solid yellow;padding: 12px;flex: 3;}
            </style>
            <link rel="stylesheet" href="css/bootsrap.min.css">   
        </head>
        <body background="hat.png">
            <div class="container">
                    <div class="row">
                    <?php
                         include("nav.html");
                     ?>
                    </div>

                    <div class="row" style="border:solid;background-color:blue;">
                        <div class="col-lg-6" style="border:solid ;background-color:black;" >
                            <form style="font-size: 30px;">
                                <div class="form-group" style="color:white;">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="firstName" name="first Name">
                                </div>
                                <div  style="color:white;">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="lastName" name="last Name" >
                                </div>
                                <div style="color:white;" >
                                    <label for="telephone">Tel. Number:</label>
                                    <input type="number" class="Telephone" name="Telephone">
                                </div>
                                <div style="color:white;" >
                                    <label for="email">Email Address:</label>
                                    <input type="email" class="Email" name="Email">
                                </div>
                                <!-- gender -->
                                <div class="form-group"style="color:white;" >
                                    <label for="gender">Your Gender:</label>
                                    <select class="form-control" name="gender">
                                        <option value="female">Female</option>
                                        <option value="male">Male</option> 
                                    </select>
                                </div>
                            
                                <!-- best movie -->
                                <div class="form-group" style="color:white;">
                                    <label for="movies">Best Movie:</label>
                                    <select class="form-control" name="movies">
                                        <option value="xo">Xo kitty</option>
                                        <option value="Man">Man down</option> 
                                        <option value="under">Under world</option> 
                                        <option value="grown">Growmish</option>
                                        <option value="love">Love birds</option> 
                                    </select>
                                </div>   
                            </form>        
                            
                        </div>
                        <div class="col-lg-6" style="border:solid;font-size: 30px;color:white;background-color:black;">
                            
                                    <div class="form-group" >
                                        <h3>USE MORE OF!</h3>
                                        <ul type="yellow circle">
                                            <li>   
                                                <label for="">Python</label>
                                                <input type="checkbox" name="Python">
                                            </li>
                                            <li>
                                                <label for="">Java</label>
                                                <input type="checkbox" name="Java">
                                            </li>
                                            <li>
                                                <label for="">PHP</label>
                                                <input type="checkbox" name="Php">
                                            </li>
                                            <li>
                                                <label for="">javascript</label>
                                                <input type="checkbox" name="javascript">
                                            </li>
                                        </ul>    
                                    </div>    
                                    <input type="submit" >
                                
                        </div>
                                     
                    </div>
            
                        <div class="row" style="background-color:blue; ">
                                    
                               
                                <div class="col-lg-12"style="border:solid; font-size: 30px;color:white;background-color:black;">
                                <p>Basketball256@gmail.com is our address.Visit our website for more workouts.</p>
                                    <h3>Visit our website for more drills. Call us on 0703507646. "Dribble for life".</h3>
                                </div>
                        </div>

            </div> 
            <script src="js/bootstrap.min.js"></script>     
    </body>
</html>