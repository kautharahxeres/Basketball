<?php
   require_once("connect.php");

  $fname=$_POST['FirstName'];
   $sname=$_POST['SecondName'];
   $tnumber=$_POST['TelephoneNumber'];
   $eaddress=$_POST['EmailAddress'];
   $PPosition=$_POST['PlayPosition'];
   $tm=$_POST['Team']

   $query ="INSERT INTO Information(FirstName, SecondName, TelephoneNumber, EmailAddress, PlayPosition, Team) VALUES(?,?,?,?,?,?)";

   $statement=mysqli_prepare($connect ,$query);

   mysqli_stmt_bind_param($statement, "ssssss", $fname, $sname, $tnumber, $eaddress, $PPosition, $tm);

   if( mysqli_stmt_execute($statement)){
      echo "Data submitted Successfully";
   }
   else {
      die("Execute failed:" . mysqli_error($connect));
   } 
   
?>