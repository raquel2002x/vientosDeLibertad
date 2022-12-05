<html>
<?php
    require_once("Components/layout.php");
?>

    <body>
    <?php
        require_once("Components/header.php");
    ?>
    
        
        <main>
        <div class= "principalRegistrer">
            <h3 class= "dateRegistrer">Registro de citas</h3>
        </div>

        <div class="create">
            <a href="?action=create">
            <button type="button" class=""> add client</button>
            </a>
        </div>

        <table class="table table-striped table-primary">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Clientes</th>
            <th scope="col">Motivo</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data["client"] as $client){
                echo "
                <tr>
                    <td>{$client->getId()}</td>
                    <td>{$client->getClient()}</td>
                    <td>{$client->getIssue()}</td>
                    <td>{$client->getPhone()}</td>
                    <td>{$client->getEmail()}</td>
                    <td>{$client->getDateTime()}</td>
                    <td>
                        <a href='?action=delete&id={$client->getId()}'>🗑</a>
                        </td>
                </tr>            
                ";
            }?>
        </tbody>
</table>
        </main>
        <?php
            require_once("Components/footer.php");
        ?>

    </body>



</html>