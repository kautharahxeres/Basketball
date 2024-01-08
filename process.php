<?php
   require_once("db.php");

   $Fname=$_POST['FirstName'];
   $Sname=$_POST['SecondName'];
   $Tnumber=$_POST['TelephoneNumber'];
   $Eaddress=$_POST['EmailAddress'];
   $Tm=$_POST['Team'];
 

   $query ="INSERT INTO Information(FirstName, SecondName, TelephoneNumber, EmailAddress, Team) VALUES(?,?,?,?,?)";

   $statement=mysqli_prepare($connect ,$query);

   mysqli_stmt_bind_param($statement, "sssss",$Fname, $Sname, $Tnumber, $Eaddress, $Tm);

   if( mysqli_stmt_execute($statement)){
      echo "Data submitted Successfully";
   }
   else {
      die("Execute failed:" . mysqli_error($connect));
   } 
   
?>