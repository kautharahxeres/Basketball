<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Information</title>
        <style>
            div{ width:100%; padding:5px; }
            .row {display: flex;justify-content: space-between;margin-bottom: 10px;}
            .column {border: 20px solid ;padding: 12px;flex: 3;}
        </style>
        <link rel="stylesheet" href="css/bootstrap.min.css">   
    </head>
    <body background="ball9.jpg">
        <div class="container">
            <div class="row">
            <?php
                    include("nav.html");
                ?>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card"  style="border:solid  ;background-color:pink;" >
                        <form  action="mega.php" method="POST">
                            <div class="form-group" style="color:purple;">
                                <label for="FirstName">First Name:</label>
                                <input type="text" name="FirstName" class="form-control"  placeholder="given name">
                            </div>
                            <div  style="color:purple;">
                                <label for="SecondName">Second Name:</label>
                                <input type="text" name="SecondName" class="form-control"  placeholder="surname" >
                            </div>
                            <div style="color:purple;" >
                                <label for="TelephoneNumber">Telephone Number:</label>
                                <input type="number" name="TelephoneNumber" class="form-control"  placeholder="contact">
                            </div>
                            <div style="color:purple;" >
                                <label for="EmailAddress">Email Address:</label>
                                <input type="Email" name="EmailAddress" class="form-control" placeholder="gmail">
                            </div>
                            <!-- team name -->
                            <div class="form-group"style="color:purple;" >
                                <label for="Team">Team:</label>
                                <select  name="Team" class="form-control">
                                    <option value="Yes">"Yes, I have a team"</option>
                                    <option value="No">"No, I have no team"</option> 
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">submit</button>
                        </form>               
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
                </div>
                                
            </div>
    
            <div class="row">
                <div class="col-lg-12"style="border:solid; font-size: 30px;background-color:pink;">
                    <p>Basketball256@gmail.com is our address.Visit our website for more workouts.</p>
                    <p>Visit our website for more drills. Call us on 0703507646. "Dribble for life".</p>
                </div>
            </div>

        </div> 
        <script src="js/bootstrap.min.js"></script>     
    </body>
</html>