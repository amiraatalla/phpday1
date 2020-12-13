<!-- Amira Atalla -->

<?php
 echo "welcome to php";

 echo "<br>";
 echo "<br>";
 echo "*******************";
 echo "<br>";
 echo "<br>";

 $x=5;
 $y="welcome";
 $z=TRUE;

 echo "x info : ";
 var_dump($x);
 echo "<br>";

 echo "x dataType : ";
 echo  gettype($x);
 echo "<br>";
 echo "<br>";

 echo "x info  :  ";
 var_dump($y);
 echo "<br>";

 echo "x dataType : ";
 echo  gettype($y);
 echo "<br>";
 echo "<br>";


 echo "x info : ";
 var_dump($z);
 echo "<br>";

 echo "x dataType : ";
 echo  gettype($z);


 echo "<br>";
 echo "<br>";
 echo "*******************";
 echo "<br>";
 echo "<br>";

 echo "Numbers from 0 to 15 first way :- ". "<br>";
 echo "<br>";
 for ($i=0; $i <= 15 ; $i++) { 
    echo $i. "  ";
 }

 echo "<br>";
 echo "<br>";

 echo "Numbers from 0 to 15 second way :- ". "<br>";
 echo "<br>";

 $i=0;
 while($i <= 15){ 
    echo $i. "  ";
    $i++;
 }


 echo "<br>";
 echo "<br>";
 echo "*******************";
 echo "<br>";
 echo "<br>";

 define("CONST1","ITI");
 echo "Constant value : ".CONST1;

 echo "<br>";
 echo "<br>";
 echo "*******************";
 echo "<br>";
 echo "<br>";


 echo "getType of all variables :- ". "<br>";
 echo "<br>";

 echo "Type of x : ".gettype($x).'<br>';
 echo "<br>";
 echo "Type of y : ".gettype($y).'<br>';
 echo "<br>";
 echo "Type of z : ".gettype($z).'<br>';
 echo "<br>";
 echo "Type of i : ".gettype($i).'<br>';
 echo "<br>";
 echo "Type of CONST1 : ".gettype(CONST1).'<br>';
 
 echo "<br>";
 echo "<br>";
 echo "*******************";
 echo "<br>";
 echo "<br>";

 echo "isset of all variables :- ". "<br>";
 echo "<br>";

 echo "Existance of x : ".empty($x).'<br>';
 echo "<br>";
 echo "Existance of y : ".empty($y).'<br>';
 echo "<br>";
 echo "Existance of z : ".empty($z).'<br>';
 echo "<br>";
 echo "Existance of i : ".empty($i).'<br>';
 

 echo "<br>";
 echo "<br>";
 echo "*******************";
 echo "<br>";
 echo "<br>";
 

 echo "empty of all variables :- ". "<br>";
 echo "<br>";

 echo "Empty of x : ".isset($x).'<br>';
 echo "<br>";
 echo "Empty of y : ".isset($y).'<br>';
 echo "<br>";
 echo "Empty of z : ".isset($z).'<br>';
 echo "<br>";
 echo "Empty of i : ".isset($i).'<br>';
 

 echo "<br>";
 echo "<br>";
 echo "*******************";
 echo "<br>";
 echo "<br>";
 

 $number1 =40;
 $number2 = 60 ;
 $sum = $number1 + $number2;
 if($sum > 50){
    echo"Accepted";
 }
 else{
    echo"Not accepted";
 }


 echo "<br>";
 echo "<br>";
 echo "*******************";
 echo "<br>";
 echo "<br>";

 echo"<h1><center>Salary of employees</center></h1>"."<br>";

 echo"<table style='border : 3px solid #000; padding:2px;'>";

    echo"<tr>";
        echo"<td>";
        echo"<span style='color:blue; border : 3px solid #ccc;'> Salary of Mr.A is </span>";
        echo"</td>";
        echo"<td>";
        echo"<span style='border : 3px solid #ccc;'> 1000$ </span> ";
        echo"</td>";
    echo"</tr>";
    echo"<tr>";
        echo"<td>";
        echo"<span style='color:blue; border : 3px solid #ccc;'> Salary of Mr.A is </span>";
        echo"</td>";
        echo"<td>";
        echo"<span style='border : 3px solid #ccc;'> 1000$ </span> ";
        echo"</td>";
    echo"</tr>";
    echo"<tr>";
        echo"<td>";
        echo"<span style='color:blue; border : 3px solid #ccc;'> Salary of Mr.A is </span>";
        echo"</td>";
        echo"<td>";
        echo"<span style='border : 3px solid #ccc;'> 1000$ </span> ";
        echo"</td>";
    echo"</tr>";
 echo"</table>";
 

 echo "<br>";
 echo "<br>";
 echo "*******************";
 echo "<br>";
 echo "<br>";

 echo"Casting : "."<br>";

 function convertNambersToString($num){
   echo (string)$num;
   echo"<br>";
   echo gettype((string)$num);
 }
 convertNambersToString(999);
 

 echo "<br>";
 echo "<br>";
 echo "<center>****************Thank You ^_^**********</center>";
 echo "<br>";
 echo "<br>";
?>