<?php

echo "<h1>hello world!</h1> <br/>";
$x= 2;
$y="John";

echo "<h1>I am  $x years old.</h1><br/>";
echo strtoupper("<h1>My name is $y.</h1><br/>");
echo strtoupper ("<h1>I always love being $x years old</h1><br/>.");
;
?>
<html>
    <body>

        <?php
        $x =20;
        $y = 100;

        echo strtoupper ("<h1>All I can assure you is that $x+$y is 120.Right?</h1> <br/>");
        ?>
        
    </body>
</html>
p{ font-family:  verdana;font-size: 20px; color:black;}


<style>
              div{background-color: pink; width:100%; padding:5px}

              h1{color: #40a944;  text-align: center;}

              p{ font-family:  verdana;font-size: 20px; color: red;}
              #class1{
                  background-color: blue;color: yellow; text-align: right; font-size: larger;
              }
              .row {
              display: flex;
              justify-content: space-between;
              margin-bottom: 10px;
              border: yellow;
            }
            .cell {
              border: 20px solid yellow;
              padding: 12px;
              flex: 3;
            } button{
                     color:blue;
                }
                li{color:forestgreen}
                hr{color:black}
          </style>
          <link rel="stylesheet" href="css/bootsrap.min.css">
                        <center><button type="submit btn btn-primary">submit</button></center> 
                        <script src="js/bootstrap.min.js"></script>