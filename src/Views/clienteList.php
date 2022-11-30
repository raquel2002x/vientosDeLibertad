<html>


    <body>
        <main>
            <?php
                foreach ($data["cliente"] as $cliente){
                    echo "{$cliente->getCliente()}";
                    echo "{$cliente->getMotivo()}";
                    echo "{$cliente->getId()}";
                    echo "{$cliente->getEmail()}";
                    echo "{$cliente->getTeléfono()}";
                    echo "{$cliente->getFecha()}";
                }
            ?>
        </main>
    </body>



</html>