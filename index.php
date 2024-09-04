<?php
   
    // demarrage de session
    // include require etc ...
    // verifier si on a reçu les données
?> 
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TEST PHP</title>
    </head>
    <body>
        <?php
            include("header.php");

            if(isset($_GET["toto"]))
            {
                $page = $_GET["toto"] . ".php";
                if(file_exists($page) == FALSE)
                    $page = "body.php";
 
            }
            else
            {
                $page = "body.php";  
            }
            include($page);
            
            include("footer.php");
            echo "test";
        ?>
        
        
    </body>
</html>