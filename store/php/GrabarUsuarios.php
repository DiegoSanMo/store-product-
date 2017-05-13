<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
    $user = $_POST['usuario'];
    $name = $_POST['nom'];
    $pass = $_POST['pass'];
    $num = $_POST['num'];
    $mail = $_POST['email'];
    $result = mysql_query("INSERT INTO `Users` VALUES ('$user','$pass','$name','$num','$mail')", $conection);
 ?>
