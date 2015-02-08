<?php 
$con = mysql_connect("localhost","main","admin");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("main", $con);

$result = mysql_query("SELECT * FROM orders WHERE orderID=2");

while($row = mysql_fetch_array($result))
  {
  echo $row['firstname'] . " " . $row['lastname'];
  echo "<br />";
  }
?> 