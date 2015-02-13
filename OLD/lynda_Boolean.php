<html>
<head><title>Booleans and NULLS</title></head>
<body>
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




























</body>

</html>