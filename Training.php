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
    <body style="background-color:black">
       <div class="container">
            <div class="row">
                <?php
                    include("nav.html");
                ?>
            </div>
            <div class="row mt-5">
                <div class="col">
                    
                            <h2 class="display-6 text-center"  style="background-color:white">Fetch Data From Database in Php</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center" style="background-color:lightblue">
                                <tr class="bg-dark text-white" >
                                    <td style="background-color:pink">ID</td>
                                    <td  style="background-color:pink">Drills</td>
                                    <td  style="background-color:pink">Benefits</td>
                                    <td style="background-color:pink" >Rules And Regulations</td>
                                    <td style="background-color:pink" >Attire</td>
                                    <td style="background-color:pink" >Play Position</td>
                                    <td style="background-color:pink" >Gender</td>
                                    <td style="background-color:pink" >Best Basketball Team</td>
                                    <td style="background-color:pink" >Action</td>
                                </tr>
                             
                                    <?php

                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                               
                               <tr>    
                                    <td><?php echo $row['ID']; ?></td>
                                    <td><?php echo $row['Drills']; ?></td>
                                    <td><?php echo $row['Benefits']; ?></td>
                                    <td><?php echo $row['RulesAndRegulations'];?></td>
                                    <td><?php echo $row['Attire']; ?></td>
                                    <td><?php echo $row['PlayPosition']; ?></td>
                                    <td><?php echo $row['Gender']; ?></td>
                                    <td><?php echo $row['BestBasketballTeam']; ?></td>
                                    <td>
                                        <a href="updateform.php?id=<?php echo $row['ID'];?>">Update info</a>
                                        <a href="updateform.php?id=<?php  echo$row['ID'];?>">Delete</a>    
                                    </td>
                                </tr>
                               </div>
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