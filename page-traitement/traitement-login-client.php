<?php
    include "../fonction/fonction.php";
    
    $user = checkLogin($_POST["login"],$_POST["mdp"]);
    echo $_POST["login"]; echo $_POST["mdp"];
    var_dump($user);
    if ( count($user) ==0 ) {
        header("location: ../asset/page/logClient.php?erreur=1");
    }
    else {
        session_start();
        $_SESSION["id"] = $user[0]["id"];
        header("location: ../clients/exect.php");
    }
?>