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

<section id="arrays">
<?php
//ARRAYS

<h2>Arrays</h2>
	<?php $array1 = array(4,8,15,16,23,42); ?>
	<?php echo $array1[0]; ?>
	<br/>
	<br/>
	<?php $array2 = array(6, "fox", "dog", array("x", "y", "z")); ?>
	<?php echo $array2[3][1]; ?>
	<?php $array2[3] = "cat"; ?>
	<br/>
	<br/>
	<?php echo $array2[3]; ?>
	<br/>
	<br/>
	<?php $array3 = array('firstName' => "Kevin", 'lastName' => "Skoglund"); ?>
	<?php echo $array3['firstName'] . " " . $array3['lastName']; ?>
	<br/>
	<?php $array3['firstName'] = "Larry"; ?>
	<?php echo $array3['firstName'] . " " . $array3['lastName']; ?>
	<br/>
	<br/>
	Array2 looks like:
	<pre><?php print_r($array2); ?></pre>

<h2>Array Functions</h2>

<?php $array4 = array(4,8,15,16,23,42); ?>

Count: <?php echo count($array4); ?> <br/> 
Max Value: <?php echo max($array4); ?> <br/> 
Min Value: <?php echo min($array4); ?> <br/>
<br/> 
Sort: <?php sort($array4); print_r($array4); ?> <br/> 
Reverse Sort: <?php rsort($array4); print_r($array4); ?> <br/> 
<br/> 

Implode: <?php echo $string1 = implode(" * ", $array4); ?> <br/> 
Explode: <?php print_r(explode(" * ", $string1)); ?> <br/> 
<br/> 

In array: <?php echo in_array(15, $array4); //Returns True or False ?> <br/> 

</section> <!-- END OF ARRAYS -->

<section id="booleans">
<h2>Booleans</h2>
<h4>True = 1 and False = [nothing]</h4>

	<?php 
		$bool1 = true;
		$bool2 = false;
	?>
	$bool1: <?php echo $bool1; ?>
	<br/>
	$bool2: <?php echo $bool2; ?>
	<br/>
	<?php 
		$var1 = 3;
		$var2 = "cat";
		$var4 = 0;
		$var5 = NULL;
	?>


<h2>The isset</h2>

$var1 is set: <?php echo isset($var1); ?> <br/> 
$var1 is set: <?php echo isset($var2); ?> <br/> 
$var1 is set: <?php echo isset($var3); ?> <br/> 
<br/> 
<?php unset($var1); echo "\$var1 was unset: " ?><br/><br/>
$var1 is set: <?php echo isset($var1); ?> <br/> 
$var1 is set: <?php echo isset($var2); ?> <br/> 
$var1 is set: <?php echo isset($var3); ?> <br/> 
<br/> 
$var2 is Empty: <?php echo empty($var2); ?> <br/> 
$var3 is Empty: <?php echo empty($var3); ?> <br/> 
$var4 is Empty: <?php echo empty($var4); ?> <br/> 
$var5 is Empty: <?php echo empty($var5); ?> <br/> 

</section> <!-- END OF BOOLEANS -->

<section id="typecasting">
<h2>Typecasting</h2>
<h4>True = 1 and False = [nothing]</h4>

	<?php 
		$var1 = "2 brown foxes";
		$var2 = $var1 + 3;
		echo $var2;
	?>
	<br/>
	<?php 
		echo gettype($var1); echo "<br/>";
		echo gettype($var2); echo "<br/>";
		settype($var2, "string");
		echo gettype($var2); echo "<br/>";
		$var3 = (int) $var1;
		echo gettype($var3); echo "<br/>";

	?>
<br/>

is_array: <?php echo is_array($var1); ?> <br/> 
is_bool: <?php echo is_bool($var1); ?> <br/> 
is_float: <?php echo is_float($var1); ?> <br/> 
is_int: <?php echo is_int($var1); ?> <br/> 
is_null: <?php echo is_null($var1); ?> <br/> 
is_numeric: <?php echo is_numeric($var1); ?> <br/> 
is_string: <?php echo is_string($var1); ?> <br/> 

<h2>Constants</h2>
	<?php
		$max_width = 980;
		define("MAX_WIDTH", 980);
		echo MAX_WIDTH; echo "<br/>";
		$max_width += 1;
		echo "\$max_width : " . $max_width;
		echo "<br/>";
		$MAX_WIDTH += 1;
		echo "MAX_WIDTH: " . MAX_WIDTH;

	?>

</section> <!-- END OF TYPE CASTING -->


</body>
</html>