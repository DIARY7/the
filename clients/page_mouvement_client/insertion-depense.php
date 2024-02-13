<?php    
    include("../../fonction/fonction.php");
    header( "Content-Type: application/json");

    $data = array();
    $data["dateDepense"] = $_POST["dateDepense"];
    $data["idCategorie"] = $_POST["idCategorie"];
    $data["montant"] = $_POST["montant"];
    
    insert($data,"exams3_depense");
?>