<?php

//Connexion bdd
$dsn = 'mysql:host=localhost;dbname=rattrapage';
$utilisateur = 'root';
$motDePasse = '';
$Bdd = new PDO( $dsn, $utilisateur, $motDePasse );
$Bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


// recupération et vérification du formulaire
if (isset($_POST["login"], $_POST["pwd"]))
{
    $tabvaleur = array($_POST["login"], $_POST["pwd"]);
    $Sth = $Bdd->prepare("SELECT * FROM users WHERE login = ? AND pwd = ? ");
    $Sth->execute($tabvaleur);
    if ($usr = $Sth->fetch())
    {
        echo "USER OK de type : " . $usr->type;
    }
    else
    {
        echo "User pas ok";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="login"/>
        <input type="password" name="pwd"/>
        <button>Se connecter</button>
    </form>
</body>
</html>