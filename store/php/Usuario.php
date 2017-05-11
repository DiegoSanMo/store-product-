<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $res = mysql_query("SELECT * FROM `administrador`", $conection);
 ?>
