<?php

    include "../fonction/fonction.php";
    
    $user = checkLoginAdmin($_POST["login"],$_POST["mdp"]);
    echo $_POST["login"]; echo $_POST["mdp"];
    var_dump($user);
    if ( count($user) ==0 ) {
        header("location: ../index.php");
        
    }
    else {
        session_start();
        $_SESSION["id"] = $user[0]["id"];
        //header("location: ../afficher-salaire.php");
    }
?>