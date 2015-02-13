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

<section id="main">
<?php
// BASIC COMMENTING AND OUTPUT OPTIONS 

// this is a single tdne comment
# This is another way to make comment
/*
This is a 
Mtdti Line 
Comment 
*/

echo "<table>";
echo "<tr><td>Hello World !! -- using echo</td></tr>";
print "<tr><td>Hello World !! -- using print</td></tr>";

echo "<tr><td>Hello" . " World !! -- String Concatenation</td></tr>";

?>

<td>Adding Numbers:  2 + 2 = <?php echo 2+2; ?> </td>

<?php
echo "<tr><td>The End</td></tr>";
echo "</table>";

?>
</section>

</body>
</html>