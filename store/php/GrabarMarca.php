<?php
  $connection = mysql_connect("localhost", "root");
  mysql_select_db("dbostoreproducts", $connection);

  $nom = $POST['nom'];

  $result = mysql_query("INSERT INTO `Brands`(name) VALUES('$nom')", $connection);
?>
