<?php

    if (isset($_POST["nom"],$_POST["prenom"],$_POST["passwd"]))
    {
        // traitement du formulaire
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $pwd = md5($_POST["passwd"]);
        echo "Hello $prenom $nom! j'ai bien reçu ton mot de passe : $pwd";
    }

    else
    {
        echo "j'ai rien !!!! mais vraiment RIIIIIEN!";
    }

?>

<form method="POST" action="form.php">
            Nom : <input type="text" name="nom" />
            Prénom : <input type="text" name="prenom" />
            PASSWORD : <input type="password" name="passwd" />
            <button>Envoyer</button>
        </form>