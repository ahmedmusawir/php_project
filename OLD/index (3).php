<html>
<head>
 <style type="text/css">
    tr {
      font-size: 2em;
      color: #00BFFF;
    }
    tr:nth-child(odd) {
      background: #A9E2F3;
      color:  #0174DF;
    }
    span.var {
      color:  #5858FA;
    }
  </style>
</head>

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
echo "<table>";
echo "<tr><td>Hello World !! -- using echo</td></tr>";
print "<tr><td>Hello World !! -- using print</td></tr>";

echo "<tr><td>Hello" . " World !! -- String Concatenation</td></tr>";
echo "<tr><td>Adding Numbers:  2 + 2 = </td></tr>"; 
echo 2+2;
echo "<tr><td>The End</td></tr>";
echo "</table>";
*/
?>

<!-- VARIABLES -->

<?php

/*
$var = 10;
echo "<table>";
echo "<tr><td>The Value of \$var is: <span>" . $var . "</span></td></tr><br />"; 

$my_var = "Hello PHP";
echo "<tr><td>The Value of \$my_var is: <span>" . $my_var . "</span></td></tr><br />";
$my_var = "Hello PHP Again";
echo "<tr><td>The New Value of \$my_var is: <span>" . $my_var . "</span></td></tr><br />";
$var = 100;
echo "<tr><td>The New Value of \$var is: <span>" . $var . "</span></td></tr><br />"; 
echo "</table>";
*/
?>

<!--STRINGS-->

<?php

/*
echo "<table>";
echo "<tr><td>Using Double Quotes for String</td></tr>";
echo "<tr><td>Using Single Quotes for String</td></tr>";
$my_var1 = "Hello PHP";

echo "<tr><td>The Value of \$my_var1 is: <span>" . $my_var1 . "</span></td></tr>"; 
echo "<tr><td>The Value of \$my_var1 is: <span> $my_var1 </span> Again</td></tr>"; 
echo "<tr><td>The Value of \$my_var1 is: <span> {$my_var1} </span> Again</td></tr>"; 
echo '<tr><td>The Value of $my_var1 is: <span> $my_var1 </span> [with single quote] Again</td></tr>'; 
echo "</table>";
*/
?> 

<!--STRING FUNCTIONS-->

<?php
/*
$firstString = "The quick brown fox";
$secondString = " jumped over the lazy dog.";

$thirdString = $firstString;
$thirdString .= $secondString;

echo "<table>";
echo "<tr><td>$thirdString</td></tr>";
*/
?>
<!--

<tr><td>Lowercase: <?php echo strtolower($thirdString); ?></td></tr> 
<tr><td>Uppercase: <?php echo strtoupper($thirdString); ?></td></tr> 
<tr><td>Uppercase first-letter: <?php echo ucfirst($thirdString); ?></td></tr> 
<tr><td>Uppercase words: <?php echo ucwords($thirdString); ?></td></tr> 
<tr><td>Length: <?php echo strlen($thirdString); ?></td></tr> 
<tr><td>Trim: <?php echo $fourthString = $firstString . trim($secondString); ?></td></tr> 
<tr><td>Find: <?php echo strstr($thirdString, "brown"); ?></td></tr> 
<tr><td>Replace: <?php echo str_replace("quick", "super-fast", $thirdString); ?></td></tr> 

</table>

-->

<!-- NUMBERS -->
<?php 

  $var1 = 3;
  $var2 = 4;

?>
<table>
<tr><td>Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?></td></tr>
<tr><td>+= : <?php $var2 += 4; echo $var2; ?></td></tr>
<tr><td>-= : <?php $var1 -= 4; echo $var1; ?></td></tr>
<tr><td>*= : <?php $var2 *= 4; echo $var2; ?></td></tr>
<tr><td>/= : <?php $var1 /= 4; echo $var1; ?></td></tr>

<tr><td>Decrement : <?php $var2--; echo $var2; ?></td></tr>
<tr><td>Increment : <?php $var2++; echo $var2; ?></td></tr>

<tr><td>-::Floating Point Numbers::- </td></tr>

<tr><td>Fraction 4/3 : <?php  echo 4/3 ?></td></tr>

<tr><td>Floating Point : <?php echo $myFloat = 3.4; ?></td></tr>
<tr><td>Round : <?php echo round($myFloat, 1); ?></td></tr>
<tr><td>Ceitdng : <?php echo ceil($myFloat); ?></td></tr>
<tr><td>Floor : <?php echo floor($myFloat); ?></td></tr>

</table>



















</body>
</html>