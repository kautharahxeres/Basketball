                                <tr>    
                                    <td><?php echo $row['ID'] ?></td>
                                    <td><?php echo $row['ID'] </td>
                                    <td><?php echo $row['Benefits'] ?></td>
                                    <td><?php echo $row['RulesAndRegulations'] ?></td>
                                    <td><?php echo $row['Attire'] ?></td>
                                    <td><?php echo $row['PlayPosition'] ?></td>
                                    <td><?php echo $row['Gender'] ?></td>
                                    <td><?php echo $row['BestBasketballTeam'] ?></td>
                                    <td>
                                        <a href="updateform.php?id=<?php echo $row['ID'];?>">Update info</a>
                                        <a href="updateform.php?id=<?php  echo$row['ID'];?>">Delete</a>    
                                    </td>
                                </tr>