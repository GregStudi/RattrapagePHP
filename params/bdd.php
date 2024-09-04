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
    $req = "SELECT * FROM users WHERE id = 2";

    //On demande à PDO de l'executer (valeur de retour de query = PDO Statement)
    $Resultat = $Bdd->query($req);
    
    //On demande à notre PDO STATEMENT de nous retourner les résultats 1 par 1
    // Si pas de résultat PDO Statement retourne FALSE SINON retourne le résultat
    if ($Ligne = $Resultat->fetch())
    {
        echo "Utilisateur id $Ligne->id : $Ligne->login<br/>";
    }
    else {
        echo "Pas d'utilisateur avec cet ID";
    }