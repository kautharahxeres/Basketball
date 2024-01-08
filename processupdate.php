<?php
   require_once("connect.php");

   $Drl=$_POST['Drills'];
   $Bfts=$_POST['Benefits'];
   $RAR=$_POST['RulesAndRegulations'];
   $Atr=$_POST['Attire'];
   $PPosition=$_POST['PlayPosition'];
   $Gdr=$_POST['Gender'];
   $BBTeam=$_POST['BestBasketballTeam'];

   $query ="INSERT INTO dribble(Drills, Benefits, RulesAndRegulations, Attire, PlayPosition, Gender, BestBasketballTeam) VALUES(?,?,?,?,?,?,?)";

   $statement=mysqli_prepare($connect ,$query);

   mysqli_stmt_bind_param($statement, "sssssss", $Drl, $Bfts, $RAR, $Atr, $PPosition, $Gdr, $BBTeam);

   if( mysqli_stmt_execute($statement)){
      header("Location: Training.php");
   }
   else {
      die("Execute failed:" . mysqli_error($connect));
   } 
   
?>