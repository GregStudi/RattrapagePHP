<?php
    session_start();

    //VERIFIER l'USER 

    // CONFIGURER LES DONNEES DE SESSION
    $_SESSION["userType"] = "trucmachin";

    session_destroy();