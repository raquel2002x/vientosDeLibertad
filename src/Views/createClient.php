<?php

require_once("Components/layout.php");

require_once("Components/header.php");

?>

<body>
    <main class="card" style="width: 80%; height:27rem; display:flex; justify-content:center; ">

    <h2 class="textCenter" style="marginBottom: 3rem; margin-top: 1rem;">Nuevo registro</h2>
    
    <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-outline-danger button-cancel">Cancelar</button></a>

        <form class="justifyContentCenter " action='?action=store' method="post">
            <div class="inputGroup" style=" margin-bottom: 2rem; width: 90%; margin-left: 14%;">
                <span class="inputGroupText">Nombre</span>
                <input class="formControl" type="text" name="client" required placeholder="Nombre del cliente">
            </div>
            <div class="inputGroup" style="width: 90%; margin-left: 10%;">
                <span class="inputGroupText">Motivo de la cita</span>
                <textarea class="formControl" area-label="With textarea"
                 rows="4" cols="50"
                 type="text" name="issue" required placeholder="Descripcion del problema"></textarea>
            </div>
            <div class="inputGroup" style="width: 90%; margin-left: 14%;">
                <span class="inputGroupText">Teléfono</span>
                <textarea class="formControl" area-label="With textarea" type="text" name="phone" required placeholder="Móvil o fijo"></textarea>
            </div>
            <div class="inputGroup" style="width: 90%; margin-left: 15.7%;">
                <span class="inputGroupText">Email </span>
                <textarea class="formControl" area-label="With textarea" type="text" name="email" required placeholder="Correo electrónico"></textarea>
            </div>
            <div class="botones " style="margin-bottom: 2rem;">
                <input class="btn-lg btn-outline-success go-add-task float" type="submit" value="Crear">
                <input class="btn-lg btn-outline-warning go-add-task float" type="reset" value="Borrar">
                
            </div>
        </form>
    </main>

    <?php
        require_once("Components/footer.php");
    ?>
</body>