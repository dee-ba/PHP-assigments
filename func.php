<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>FUNCTION</h1>
<h3>Opdracht 1 Write a function to check whether a number is prime or not. 
Note: A prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself.</h3> <br>

<p>Solution</p>
 
<?php
function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 47;
$flag_val = check_prime($num);
if ($flag_val == 1)
   echo "It is a prime number";
else
   echo "It is a non-prime number"
?>



<h3>Opdracht 2 Write a function to reverse a string.</h3> <br>

<p>Solution</p>
 
<?php
function reverse_string($str1)
{
 $n = strlen($str1);
 if($n == 1)
   {
    return $str1;
   }
 else
   {
   $n--;
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
   }
}
print_r(reverse_string('1234')."\n");
?>





<h3>Write a PHP function that checks whether a string is all lowercase.</h3> <br>

<p>Solution</p>
 

<?php

$strings = array('gfg123', 'geeksforgeeks', 'GfG');

foreach ($strings as $testcase) {
	if (ctype_lower($testcase)) {
		echo "Yes <br>";
	} else {
		echo "No <br>";
	}
}
?>


<h3>Opdracht 4 Write a function to sort an array. </h3> <br>

<p>Solution Sort an Array Function</p>
 
<?php
function array_sort($a)
{
 for($x=0;$x< count($a);++$x)
  {
    $min = $x;
  for($y=$x+1;$y< count($a);++$y)
   {
	 if($a[$y] < $a[$min] ) 
	 {
	   $temp = $a[$min];
	   $a[$min] = $a[$y];
	   $a[$y] = $temp;
	 }
	}
  }
 return $a;
 }
$a = array(51,14,1,21,'hj');
print_r(array_sort($a));
?>



<h3>Opdracht 5
Write a PHP function that checks whether a person is eligible to vote.

Condition
Je moet een parameter naam en leeftijd kunnen als parameter kunnen passen aan je function.
Je moet dynamisch kunnen outputten met echo of de persoon oud genoeg is om te stemmen.
Tomi je bent niet oud genoeg om te stemmen.
De stem grens is 18 jaar. 
</h3> <br>

<p>Solution</p>
<?php
function check_stem() 
{
    $naam = "Tomi";
    $leeftijd= 17;
    if ($leeftijd>= 18) {
        echo $naam . ", U kunt stemmen";
    } else {
        echo $naam . ", je bent niet oud genoeg om te stemmen.
        De stem grens is 18 jaar.  ";
    }
}
check_stem(); 

?>





























</body>
</html>