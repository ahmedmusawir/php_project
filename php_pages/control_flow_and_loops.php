<!DOCTYPE html>
<html>
<head>
	<title>Control Flow and Loops</title>
</head>
<body>
<!-- PHP SECTION 1 BEGIN -->
<section id="ifelse">

<h3> ifelse: Block 1</h3>	
	<?php

	  $a = 5;
	  $b = 4;

	  if ($a > $b){
	  	echo "a is bigger than b";
	  }
	  elseif ($a == $b) {
	  	echo "a is equal to b";
	  }
	  else {
	  	echo "a is smaller than b";
	  }

	?>

<br>

<h3> ifelse: Block 2</h3>

<?php 
	
	$c = 1;
	$d = 23;

	if (($a > $b) && ($d > $c)) {
		echo "a is larger than b AND ";
		echo "d is larger than c";
	}
	
	echo "<br>";

	if (($a > $b) || ($c > $d)) {
		echo "a is larger than b OR ";
		echo "d is larger than c";
	}
	else {
		echo "neither a is larger than b nor c is larger than d";
	}

?>	

<br>

<h3> ifelse: Block 3</h3>

<?php 
	
	if (!isset($a)) {
		$a = 100;
	}

	echo "Value of a After Resetting:  $a ";

?>
<br>

<h3> ifelse: Block 4</h3>

<?php 
	
	if (is_int($a)) {
		settype($a, "string");
	}

	echo "Type of a After Resetting: " . gettype($a) ;

?>
<br>

<h3> ifelse: Block 5</h3>

<?php 
	
	unset($a);

	if (!isset($a)) {
		$a = 100;
	}

	echo "Value of a After unset:  $a ";

?>
<br>

</section>
<!-- PHP SECTION ifelse END -->

<section id="switch">
	
	<h3>switch: Block</h3>
	<?php

		$a = 3;

		switch ($a) {
			case 0:
				echo "a is equal to 0";
				break;
			case 1:
				echo "a is equal to 1";
				break;
			case 2:
				echo "a is equal to 2";
				break;

			
			default:
				echo "a is not equal to 0, 1 or 2";
				break;
		}

	?>


</section>
<!-- PHP SECTION switch END -->


<section id="whileloop">

	<h3>Loops: while : Block 1</h3>
	<?php
		$count = 0;

		while ($count <= 10) {
			echo $count . " , ";
			$count++;
		}

		echo "Total Count: {$count}";

	?>

	<h3>Loops: while: Block 2</h3>
	<?php
		$count = 0;

		while ($count <= 10) {

			if ($count == 5) {
				echo " Five ";
			}
			else {
				echo $count . " , ";
			}
			$count++;
		}

		echo "Total Count: {$count}";

	?>

	</section>
<!-- PHP SECTION whileloop END -->


	<section id="forloop">

	<h3>Loops: for</h3>
	<?php
		for ($i=0; $i <= 10 ; $i++) { 
			echo $i . " , ";
		}
	?>

	<h3>Loops: foreach : Block 1</h3>
	<?php
		$ages = array(4, 8, 15, 16, 23, 42);

		foreach ($ages as $age) {
			echo $age . " , ";
		}
	?>

	<h3>Loops: foreach : Block 2</h3>
	<?php
		foreach ($ages as $position => $age) {
			echo $position . ": " . $age . "<br/>" ;
		}
	?>
	
	<h3>Loops: foreach : Block 3</h3>
	<?php
		$prices = array('Brand New BMW' => 50000 , 'Sky Diving Fee' => 350, 'The Experience' => "Priceless!");

		foreach ($prices as $key => $value) {
			if (is_int($value)) {
				echo $key . ": " . $value . "<br />";
			}
			else {
				echo $key . ": " . $value . "<br />";
			}
		}
	?>
	</section>
<!-- PHP SECTION forloop END -->


	<section id="contbreak">

	<h3>Loops: continue</h3>
	<?php 
		for ($count=0; $count <= 10; $count++) { 
			if ($count == 5) {
				continue;
			}
			echo $count . ", ";
		}
		echo "<br> 5 should be missing ..."
	?>
	<h3>Loops: break</h3>
	<?php 
		for ($count=0; $count <= 10; $count++) { 
			if ($count == 8) {
				break;
			}
			echo $count . ", ";
		}
		echo "<br> After 7, the rest should be missing ..."

	?>

	<h3>Loops: Pointers</h3>
	<?php
		$ages = array(3, 5, 34, 56, 2, 64 );

		echo "1: " . current($ages) . "<br>";
		next($ages);
		echo "2: " . current($ages) . "<br>";
		next($ages);
		echo "3: " . current($ages) . "<br>";

		//while loop that moves the array pointer
		echo "while loop that moves the array pointer<br>";
		while ($age = current($ages)) {
			echo $age . ", ";
			next($ages);
		}

	?>

</section>
<!-- PHP SECTION continue break pointer END -->

</body>
</html>





















