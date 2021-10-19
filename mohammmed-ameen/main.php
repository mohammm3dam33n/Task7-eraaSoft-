<h3 style="color:white;background-color:blue;padding:20px;text-align:center">Assignment4</h3>




<?php 
// -	Make a function to Search about this word ( good ) or another word  in this text (you have a  nice dream , be a good man to attach this dream)
// use regex  - php regex - preg_match 

// input	Required. The string in which the search will be performed
$text = "you have a  nice dream , be a good man to attach this dream";
// pattern	Required. Contains a regular expression indicating what to search for
$pattern = "/good/i";
echo preg_match($pattern,$text);

echo "<hr>";

function SearchWord($pattern,$text){
  return preg_match($pattern,$text);
}
echo SearchWord("/good/i","you have a  nice dream , be a good man to attach this dream");
echo "<hr>";
?>




<?php 
//  -	Write a function to get factorial number - recursive
function calculator($a,$b){
   $calc=($a*$b);
   return $calc;
}
echo calculator(5,5);
echo "<hr>";
?>




<?php
// write a php program to check if the number is prime number  or not ( use rand  number )
// Modulus=> Remainder of $x divided by $y
 $num=13;
 for ($i = 2; $i < $num; $i++){
     if ($num % $i == 0) {
         echo 'NOT prime';
         break;
     }               
 }
 echo  "$num Is Prime";    
 echo "<hr>";
?>
<?php 
// -	Write a function that take a parameter and check if this     
// parameter is prime or not  - not recommended 
function checkTheNumber($num){
  for ($i = 2; $i < $num; $i++){
      if ($num % $i == 0) {
          echo "$num NOT prime";
          break;
      }else{
        echo  "$num Is Prime";
        break;    
      }              
  }
  }
  checkTheNumber(13);


?>

