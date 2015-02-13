<html>
<head>
  <style type="text/css">
  	li {
  		font-size: 1.5em;
  		color: hotpink;
  	}
  	li:nth-child(odd) {
  		background: grey;
  		color: white;
  	}
  	span {
  		color: crimson;
  	}
  </style>
</head>

<body>

<!-- BASIC COMMENTING AND OUTPUT OPTIONS  -->

<?php

// this is a single line comment
# This is another way to make comment
/*
This is a 
Multi Line 
Comment 
*/

/*
echo "<ul>";
echo "<li>Hello World !! -- using echo</li>";
print "<li>Hello World !! -- using print</li>";

echo "<li>Hello" . " World !! -- String Concatenation</li>";
echo "<li>Adding Numbers:  2 + 2 = </li>"; 
echo 2+2;
echo "<li>The End</li>";
echo "</ul>";
*/
?>

<!-- VARIABLES -->

<?php

/*
$var = 10;
echo "<ul>";
echo "<li>The Value of \$var is: <span>" . $var . "</span></li><br />"; 

$my_var = "Hello PHP";
echo "<li>The Value of \$my_var is: <span>" . $my_var . "</span></li><br />";
$my_var = "Hello PHP Again";
echo "<li>The New Value of \$my_var is: <span>" . $my_var . "</span></li><br />";
$var = 100;
echo "<li>The New Value of \$var is: <span>" . $var . "</span></li><br />"; 
echo "</ul>";
*/
?>

<!--STRINGS-->

<?php

/*
echo "<ul>";
echo "<li>Using Double Quotes for String</li>";
echo "<li>Using Single Quotes for String</li>";
$my_var1 = "Hello PHP";

echo "<li>The Value of \$my_var1 is: <span>" . $my_var1 . "</span></li>"; 
echo "<li>The Value of \$my_var1 is: <span> $my_var1 </span> Again</li>"; 
echo "<li>The Value of \$my_var1 is: <span> {$my_var1} </span> Again</li>"; 
echo '<li>The Value of $my_var1 is: <span> $my_var1 </span> [with single quote] Again</li>'; 
echo "</ul>";
*/
?> 

<!--STRING FUNCTIONS-->

<?php
/*
$firstString = "The quick brown fox";
$secondString = " jumped over the lazy dog.";

$thirdString = $firstString;
$thirdString .= $secondString;

echo "<ul>";
echo "<li>$thirdString</li>";
*/
?>
<!--

<li>Lowercase: <?php echo strtolower($thirdString); ?></li> 
<li>Uppercase: <?php echo strtoupper($thirdString); ?></li> 
<li>Uppercase first-letter: <?php echo ucfirst($thirdString); ?></li> 
<li>Uppercase words: <?php echo ucwords($thirdString); ?></li> 
<li>Length: <?php echo strlen($thirdString); ?></li> 
<li>Trim: <?php echo $fourthString = $firstString . trim($secondString); ?></li> 
<li>Find: <?php echo strstr($thirdString, "brown"); ?></li> 
<li>Replace: <?php echo str_replace("quick", "super-fast", $thirdString); ?></li> 

</ul>

-->

<!-- NUMBERS -->
<?php 

  $var1 = 3;
  $var2 = 4;

?>
<ul>
<li>Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?></li>
<li>+= : <?php $var2 += 4; echo $var2; ?></li>
<li>-= : <?php $var1 -= 4; echo $var1; ?></li>
<li>*= : <?php $var2 *= 4; echo $var2; ?></li>
<li>/= : <?php $var1 /= 4; echo $var1; ?></li>

<li>Decrement : <?php $var2--; echo $var2; ?></li>
<li>Increment : <?php $var2++; echo $var2; ?></li>

<li>-::Floating Point Numbers::- </li>

<li>Fraction 4/3 : <?php  echo 4/3 ?></li>

<li>Floating Point : <?php echo $myFloat = 3.4; ?></li>
<li>Round : <?php echo round($myFloat, 1); ?></li>
<li>Ceiling : <?php echo ceil($myFloat); ?></li>
<li>Floor : <?php echo floor($myFloat); ?></li>

</ul>



















</body>
</html>