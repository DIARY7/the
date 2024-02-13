<?php

    include "../fonction/fonction.php";
    
    $user = checkLoginAdmin($_POST["login"],$_POST["mdp"]);
    echo $_POST["login"]; echo $_POST["mdp"];
    var_dump($user);
    if ( count($user) ==0 ) {
        header("location: ../asset/page/logAdmin.php?erreur=1");
        
    }
    else {
        session_start();
        $_SESSION["id"] = $user[0]["id"];
        header("location: ../admin/variationThe.php");
    }
?>