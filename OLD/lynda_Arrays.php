<html>
<head><title>Arrays</title></head>
<body>
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

</body>
</html>