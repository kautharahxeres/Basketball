<body>
    <?php
$d=date("D");
if($d=="Fri"){
    echo"Today is a $d,please have a nice weekend!";
}

else{
    echo "Today is $d, please have a nice day!";
}
echo "<h1>hello world!</h1> <br/>";
  $x= 2;
  $y="John";

  echo "I am  $x years old.<br/>";
  echo strtoupper("My name is $y.<br/>");
  echo strtoupper ("I always love being $x years old.<br/>");
  ;
  $constantAge = 25;

  $variableAge = 30;
  
  
  echo "$constantAge<br>"."$variableAge<br>";
  function SendEmail($aro,$ani)

  {echo "Hello $aro and $ani,how a you?<br>" ;}

  SendEmail("cake","soda");
  SendEmail("biscuit","sugar");
  SendEmail("sweet","chocolate");



  function add($num1, $num2)
  
  {echo  "The sum of $num1 + $num2 is 50.<br>" ;}
  

  add(20,30);
  add(10,40);
  add(5,45);
  ?>
</body>