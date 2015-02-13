<html>
<head>
 
<body>

<!-- BASIC COMMENTING AND OUTPUT OPTIONS  -->

<?php

// this is a single tdne comment
# This is another way to make comment
/*
This is a 
Multi Line 
Comment 
*/

/*
echo "";
echo "Hello World !! -- using echo";
print "Hello World !! -- using print";

echo "Hello" . " World !! -- String Concatenation";
echo "Adding Numbers:  2 + 2 = "; 
echo 2+2;
echo "The End";
echo "";
*/
?>

<!-- VARIABLES -->

<?php

/*
$var = 10;
echo "";
echo "The Value of \$var is: <span>" . $var . "</span><br />"; 

$my_var = "Hello PHP";
echo "The Value of \$my_var is: <span>" . $my_var . "</span><br />";
$my_var = "Hello PHP Again";
echo "The New Value of \$my_var is: <span>" . $my_var . "</span><br />";
$var = 100;
echo "The New Value of \$var is: <span>" . $var . "</span><br />"; 
echo "";
*/
?>

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


<hr/>


<!-- NUMBERS -->
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

</body>
</html>



















</body>
</html>