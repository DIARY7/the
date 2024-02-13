<?php 
    include("../../fonction/fonction.php");
    header( "Content-Type: application/json");

    $data = array();
    $data["dateCueillette"] = $_POST["dateCueillette"];
    $data["idCueilleur"] = $_POST["idCueilleur"];
    $data["idParcelle"] = $_POST["idParcelle"];
    $data["poids"] = $_POST["poids"];
    $valiny = checkReste($_POST["idParcelle"],$_POST["poids"],$_POST["dateCueillette"]);
    if ( $valiny ==-1) {
        insert($data,"exams3_cueillette");
        echo "nety";
    }
    else{
        $tab = array();
        echo $tab[0]["reste"] = $valiny; 
    }
    
?>