<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/master.css">
        <link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">

        <title>Marcas</title>
    </head>
    <body >
        <div class="container-formulario">
            <div class="form_top">
                <h2>Registro <span>Marca</span></h2>
            </div>
            <form class="form_reg" action="GrabarMarca.php" method="post">
                <label class="lblInput">ID Marca</label>
                <input class="input" type="idMarca" text="$ids" readonly="">
                <label class="lblInput">Nombre</label>
                <input class="input" style="text-transform:uppercase" name="nom" type="nombre" placeholder="&#128213; Marca" required autofocus >
                <div class="btnForm">
                    <input class="btn_submit" type="submit" value="Registro de Marca">
                </div>
            </form>
        </div>

    </body>
</html>
