<?php
    $conection = mysql_connect("localhost", "root");
    mysql_select_db("dbostoreproducts", $conection);
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/master.css">
        <link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">

        <title>Producto</title>
    </head>
    <body >
        <div class="container-formulario">
            <div class="form_top">
                <h2>Registro <span>Producto</span></h2>
            </div>
            <form class="form_reg" action="GrabarProducto.php" method="post">
                <label class="lblInput">ID Producto</label>
                <input class="input" type="text" readonly="" placeholder="&#128213; ID producto" >
                <label class="lblInput">Categoria</label>
                <select class= "btn_submit" name="Categoria">
                    <?php
                        $valores = "SELECT * from Category";
                        $lector = mysql_query($valores);
                        while ($row = mysql_fetch_array($lector)) {
                            echo "<option value= '".$row['id_Category']."'>";
                            echo $row['description'];
                            echo "</option>";
                        }
                     ?>
                </select>
                <label class="lblInput">Nombre</label>
                <input class="input" type="text" name = "nombre" placeholder="&#128213;nombre producto" >
                <label class="lblInput">Precio</label>
                <input class="input" type="text" name = "precio" placeholder="&#128213;precio producto" >
                <label class="lblInput">Descripcion</label>
                <input class="input" type="text" name = "descripcion" placeholder="&#128213;descripcion producto">
                <label class="lblInput">Imagen</label>
                <div class="searchImage">
                    <p id="texto">Add file</p>
                    <input class="buscarImagen"type="file" name = "buscarImagen" value="file1"/>
                </div>

                <div class="btnForm">
                    <input class="btn_submit" type="submit" value="Registro del producto">
                </div>
            </form>
        </div>

    </body>
</html>
