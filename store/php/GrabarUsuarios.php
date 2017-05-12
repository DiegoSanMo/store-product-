<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
    $nom = $_POST['nom'];
    $pass = $_POST['pass'];
    $result = mysql_query("INSERT INTO `Users` (`user`,`password`)VALUES ('$nom','$pass')", $conection);
 ?>
