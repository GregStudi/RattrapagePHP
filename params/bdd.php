<?php
    $dsn = 'mysql:host=localhost;dbname=rattrapage';
    $utilisateur = 'root';
    $motDePasse = '';


    //ALLER VOIR LES COURS SUR LES EXCEPTIONS 😉
    try
    {
        $Bdd = new PDO( $dsn, $utilisateur, $motDePasse );
        $Bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }
    catch(Exception $E)
    {
        die();
    }

    //On écrit la requete
    $req = "SELECT * FROM users";

    //On demande à PDO de l'executer (valeur de retour de query = PDO Statement)
    $Resultat = $Bdd->query($req);
    
    //On demande à notre PDO STATEMENT de nous retourner les résultats 1 par 1
    // Si pas de résultat PDO Statement retourne FALSE SINON retourne le résultat
    // while ($Ligne = $Resultat->fetch())
    // {
    //     echo "Utilisateur id $Ligne->id : $Ligne->login<br/>";
    // }

    // METHODES PREPARE ET EXEC

    //$Statement = $Bdd->prepare("SELECT * FROM users WHERE id = ?  ");
    //$Statement = $Bdd->prepare("SELECT * FROM users WHERE id = :iduser ");

    // $Statement->execute(array(2, "tortue"));
    // if($Usr = $Statement->fetch())
    // {
    //     echo "Utilisateur id $Usr->id : $Usr->login<br/>";
    // }

    $Statement = $Bdd->prepare("SELECT * FROM users WHERE id = :iduser ");
    $Statement->execute(["iduser" => 1]);
    if($Usr = $Statement->fetch())
    {
        echo "Utilisateur id $Usr->id : $Usr->login<br/>";
    }
    