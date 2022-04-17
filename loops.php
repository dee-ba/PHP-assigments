<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
  header {
    background: #31CCCC;
    padding: 1em;
    text-align: center;

  }


    
  .title {
    background: #FFE4E1;
    text-align: center;

  }

</style>

</head>


<body>

<header>
  <h1><?php echo "Fundamentals Exercises"?></h1>

  
<h1 class="header"><?php echo "Loops"?></h1>
</header>


<p class="title"><?php 
//opdracht 1
echo "Opdracht 1: Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position."?></p>


<?php
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo " $x-";
 }
 else
  {
 echo "$x";
  }
}
?>

<p class="title"><?php 
//opdracht 2
echo "Opdracht 2: Create a script using a for loop to add all the integers between 0 and 30 and display the total."?></p>

<?php
$sum = 0;
for($x=1; $x<=30; $x++)
{
  $sum +=$x;
}
echo "The sum of the integers 0-30 is $sum";
?>


<p class="title"><?php 
//opdracht 3
echo "Opdracht 3: Create a script to construct the following pattern, using nested for loop."?></p>



<?php
    for($x=0; $x<=6;$x++) {    
          for($y=1; $y<=$x;$y++){
		      echo " * " ; }
		      echo "<br>";
          }
    
		  
?>



<h4 class="title"><?php 
//opdracht 4
echo  "Opdracht 4: Create a script to construct the following pattern, using a nested for loop."?></h4>


<?php
$n=5;
for($i=1; $i<=$n; $i++)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo '<br>';
}
for($i=$n; $i>=1; $i--)
{
for($j=1; $j<=$i; $j++)
{
echo '   *   ';
}
echo '<br>';
}
?>




<h4 class="title"><?php 
//opdracht 5
echo "Opdracht 5: Write a PHP script using nested for loop that creates a chess board as shown below. Use table width='270px' and take 30px as cell height and width."?></h4>

   <table width="270px">
  
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>




</body>
</html>