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

</html>