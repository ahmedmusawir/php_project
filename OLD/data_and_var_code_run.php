<html>
<head>
 
</head>

<body>

<section id="variables">
<?php
//VARIABLES

$var = 10;
echo "<table>";
echo "<tr><td>The Value of \$var is: <span class='var'>" . $var . "</span></td><br /></tr>"; 

$my_var = "Hello PHP";
echo "<tr><td>The Value of \$my_var is: <span class='var'>" . $my_var . "</span></td></tr>";
$my_var = "Hello PHP Again";
echo "<tr><td>The New Value of \$my_var is: <span class='var'>" . $my_var . "</span></td></tr>";
$var = 100;
echo "<tr><td>The New Value of \$var is: <span class='var'>" . $var . "</span></td></tr>"; 
echo "</table>";

?>
</section> <!-- END OF VARIABLES -->

<section id="strings">

<!--STRINGS-->

<?php
//STRINGS

echo "Using Double Quotes for String <br/>";
echo 'Using Single Quotes for String <br/>';
$my_var1 = "Hello PHP";

echo "The Value of \$my_var1 is: " . $my_var1 . " <br/>"; 
echo "The Value of \$my_var1 is:  $my_var1  Again <br/>"; 
echo "The Value of \$my_var1 is:  {$my_var1}  Again <br/>"; 
echo 'The Value of $my_var1 is:  $my_var1  [with single quote] Again <br/>'; 

?> 

<hr/>

<!--STRING FUNCTIONS-->

<?php

$firstString = "The quick brown fox";
$secondString = " jumped over the lazy dog.";

$thirdString = $firstString;
$thirdString .= $secondString;

echo "";
echo "$thirdString <br/>";

?>


Lowercase: <?php echo strtolower($thirdString); ?><br/> 
Uppercase: <?php echo strtoupper($thirdString); ?><br/> 
Uppercase first-letter: <?php echo ucfirst($thirdString); ?><br/> 
Uppercase words: <?php echo ucwords($thirdString); ?><br/> 
Length: <?php echo strlen($thirdString); ?><br/> 
Trim: <?php echo $fourthString = $firstString . trim($secondString); ?> <br/>
Find: <?php echo strstr($thirdString, "brown"); ?> <br/>
Replace: <?php echo str_replace("quick", "super-fast", $thirdString); ?> <br/>

</section> <!-- END OF STRINGS -->

<section id="numbers">
<?php 
//NUMBERS

  $var1 = 3;
  $var2 = 4;

?>

Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br/>
+= : <?php $var2 += 4; echo $var2; ?><br/>
-= : <?php $var1 -= 4; echo $var1; ?><br/>
*= : <?php $var2 *= 4; echo $var2; ?><br/>
/= : <?php $var1 /= 4; echo $var1; ?><br/>

Decrement : <?php $var2--; echo $var2; ?><br/>
Increment : <?php $var2++; echo $var2; ?><br/>

-::Floating Point Numbers::- <br/>

Fraction 4/3 : <?php  echo 4/3 ?><br/>

Floating Point : <?php echo $myFloat = 3.4; ?><br/>
Round : <?php echo round($myFloat, 1); ?><br/>
Ceitdng : <?php echo ceil($myFloat); ?><br/>
Floor : <?php echo floor($myFloat); ?><br/>
</section> <!-- END OF NUMBERS -->

</body>
</html>