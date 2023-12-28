<body>
    <form action="assignments2.php" method="post">
        oranges:<input type="checkbox" name="fruits[]" value="oranges"><br> 
        apples:<input type="checkbox" name="fruits[]" value="apples"><br>  
        mangoes:<input type="checkbox" name="fruits[]" value="mangoes"><br>
        <input type="submit">
    </form> 
</body>
<br>   
<?php
$fruits =$_POST["fruits"];
echo $fruits[1];

$grades =array("kautharah"=>"A+", "Mercy"=>"A-");
echo $grades["kautharah"];



?>
