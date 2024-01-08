<?php

    require_once('db.php');
    $query ="select * from Dribble";
    $result = mysqli_query($connect,$query);


?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-ua-Compactible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Fetch data From Database in Php</title>
    </head>
    <body class="bg-black">
       <div class="container">
            <div class="row">
                <?php
                    include("nav.html");
                ?>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text-center">Fetch Data From Database in Php</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>ID</td>
                                    <td>Drills</td>
                                    <td>Benefits</td>
                                    <td>Rules And Regulations</td>
                                    <td>Attire</td>
                                    <td>Play Position</td>
                                    <td>Gender</td>
                                    <td>Best Basketball Team</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <?php

                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <td><?php echo $row['ID'] ?></td>
                                    <td><?php echo $row['Drills'] ?></td>
                                    <td><?php echo $row['Benefits'] ?></td>
                                    <td><?php echo $row['RulesAndRegulations'] ?></td>
                                    <td><?php echo $row['Attire'] ?></td>
                                    <td><?php echo $row['PlayPosition'] ?></td>
                                    <td><?php echo $row['Gender'] ?></td>
                                    <td><?php echo $row['BestBasketballTeam'] ?></td>
                                    <td>
                                        <a href="updateform.php?id='<?php $row['ID'];?>'">Update info</a>
                                        <a href="updateform.php?id='<?php $row['ID'];?>'">Delete</a>
                                        
                                    </td>
                                </tr>
                                <?php
                                }

                                ?>
                      
                                
                            </table>
                        </div>
                    </div>
            </div>
       </div>
       <script src="js/bootstrap.min.js"></script>
    </body>
</html>