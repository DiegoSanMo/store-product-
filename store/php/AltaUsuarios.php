<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/master.css">
        <link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">

        <title>Usiarios</title>
    </head>
    <body >
        <div class="container-formulario">
            <div class="form_top">
                <h2>Registro <span>Usuarios</span></h2>
            </div>
            <form class="form_reg" action="GrabarUsuarios.php" method="post">
                <label class="lblInput">Usuario</label>
                <input class="input" type="text" text="$ids" name="nom" placeholder="&#128213; Nombre de usuario">
                <label class="lblInput">Contraseña</label>
                <input class="input" style="text-transform:uppercase" name="pass" type="password" placeholder="&#128213; Contraseña" required autofocus >
                <div class="btnForm">
                    <input class="btn_submit" type="submit" value="Registro de usuario">
                </div>
            </form>
        </div>

    </body>
</html>
