<html>
<head><title>Typecasting</title></head>
<body>
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

</body>
</html>