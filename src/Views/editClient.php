<?php
require_once("Components/layout.php");
require_once("Components/header.php");
?>
<body>
    <div class="edit row justify-content-center">
        <main class="card" style="width: 80%; height:27rem; display:flex; justify-content:center; ">

        <h2 class="text-center" style="margin-Bottom: 3rem; margin-top: 1rem;">Edit appointment</h2>
        <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-outline-danger button-cancel">Cancelar</button></a>

        <form class="justify-content-center " action='?action=update&id=<?php echo $data["client"]->getId() ?>' method="post">
            <div class="input-group" style=" margin-bottom: 2rem; width: 90%; margin-left: 5%;">
                <span class="input-group-text">Nombre</span>

                <input class="form-control" type="text" name="client" required value='<?php echo $data["client"]->getClient() ?>'>
            </div>
            <div class="input-group" style="width: 90%; margin-left: 5%;">
                <span class="input-group-text">Motivo de la cita</span>
                <input class="form-control" area-label="With textarea" type="text" name="issue" required value='<?php echo $data["client"]->getIssue() ?>'> 
            </div>
            <div class="input-group" style="width: 90%; margin-left: 5%;">
                <span class="input-group-text">Teléfono</span>
                <input class="form-control" area-label="With textarea" type="text" name="phone" required value='<?php echo $data["client"]->getPhone() ?>'> 
            </div>
            <div class="input-group" style="width: 90%; margin-left: 5%;">
                <span class="input-group-text">Email</span>
                <input class="form-control" area-label="With textarea" type="text" name="email" required value='<?php echo $data["client"]->getEmail() ?>'> 
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