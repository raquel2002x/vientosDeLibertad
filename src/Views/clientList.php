<html>


    <body>
        <main>
            <?php
                foreach ($data["client"] as $client){
                    echo "{$client->getClient()}";
                    echo "{$client->getIssue()}";
                    echo "{$client->getId()}";
                    echo "{$client->getEmail()}";
                    echo "{$client->getPhone()}";
                    echo "{$client->getDateTime()}";
                }
            ?>
        </main>
    </body>



</html>