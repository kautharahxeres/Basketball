<html>
        <head>
            <title>contact page</title>
            <style>
                div{background-color: lightgrey; width:100%; padding:5px}

                h1{color: yellow;}

                p{ font-family:  verdana;font-size: 20px; color:black;}
                .class1{
                    background-color:yellowgreen;color: forestgreen; font-size: larger;
                }
                button{
                    background: blue ;
                    color: white;
                } 

            </style>
            <link rel="stylesheet" href="css/bootsrap.min.css">   
        </head>
        <body bgcolor="lightgreen">
            <div class="container">
                    <div class="row">
                    <?php
                         include("nav.html");
                     ?>
                    </div>

                    <div class="row" style="border:solid 4px red;">
                        <div class="col-lg-6" style="border:solid 5px ;">
                            <form>
                                <div class="form-group">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="first_name" name="first_name" required>
                                </div>
                                <div>
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="last_name" name="last_name" required>
                                </div>
                                <div>
                                    <label for="telephone">Telephone Number:</label>
                                    <input type="number" class="telephone" name="telephone" required>
                                </div>
                                <div>
                                    <label for="email">Email Address:</label>
                                    <input type="email" class="email" name="email" required>
                                </div>
                                <!-- gender -->
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <select class="form-control" name="gender">
                                        <option value="female">Female</option>
                                        <option value="male">Male</option> 
                                    </select>
                                </div>
                            
                                <!-- movies -->
                                <div class="form-group">
                                    <label for="movies">Movies:</label>
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
                            <form>
                                    <div class="form-group">
                                         
                                        <label for="">Python</label>
                                        <input type="checkbox" name="Python">

                                        <label for="">Java</label>
                                        <input type="checkbox" name="Java">

                                        <label for="">PHP</label>
                                        <input type="checkbox" name="Php">


                                        <label for="">javascript</label>
                                        <input type="checkbox" name="javascript">
                                           
                                    </div>    
                            </form>      
                    
                                    <button type="submit btn btn-success">submit</button>    
                        
                    </div>
            </div>
                        <div class="container">
                                    
                                <div class="col-lg-6" style="border:solid 5px skyblue">
                                    <p>Basketball256@gmail.com is our address.Visit our website for more workouts.</p>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Visit our website for more drills. Call us on 0703507646. "Dribble for life".</h3>
                                </div>
                        </div>
                    
    </body>
</html>