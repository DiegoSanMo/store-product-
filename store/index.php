<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Surtidora de plásticos</title>
        <link rel="stylesheet" href="css/master.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src= 'js/script.js'>   </script>
        <?php

        require_once("connection/conexion.php");
        $consulta = "Select * from tbl_categorias";
        $res = msql_query($consulta, $conexion);
        $cant = mysql_num_rows($res);

         ?>

        </script>
    </head>
    <body>
        <header>
            <nav>
                <ul>

                    <a href="http://www.google.com"><li>Inicio</li></a>
                    <a href="http://www.google.com"><li>Productos</li></a>
                    <a href="http://www.google.com"><li>Categorias</li></a>
                </ul>
                    <img class="logo" src="pictures/logo.png">
                <ul>
                    <a href="http://www.google.com"><li>Matocas</li></a>
                    <a href="http://www.google.com"><li>Pruebas</li></a>
                    <a href="http://www.google.com"><li>Categorias</li></a>
                </ul>
            </nav>
        </header>

        <section class="banner">

        </section>

        <section class="body">
            <h1>Hola</h1>
            <ul>
                <?php
                    while ($fila = mysql_fetch_array($res))
                    {
                        echo "<li>$fila["nombre"]</li>";
                    }
                 ?>

            </ul>
        </section>

    </body>
</html>
