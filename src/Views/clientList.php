<html>
<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>
<body>    
        
        <main>
        <div class= "principalRegistrer">
            <h2 class="text-center" style="margin-Bottom: 3rem; margin-top: 1rem;">Registro de Citas</h2>
        </div>

        <div class="create">
            <a href="?action=create">
            <button type="button" class="btn btn-outline-info">Añadir cliente</button>
            </a>
        </div><br>

        <table class="table table-striped table-primary">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Clientes</th>
            <th scope="col">Motivo</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha</th>
            <th scope="col"></th>
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
                        <a href='?action=edit&id={$client->getId()}'>✏</a>
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