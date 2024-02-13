<?php
    include "../../fonction/fonction.php";
    header( "Content-Type: application/json");

    $data = array();
    // $data["idCategorie"] = $_POST["idCategorie"];
    $data["nomCategorie"] = $_POST["nomCategorie"];
    var_dump($data);
    insert($data,"exams3_categorie_depense");
?>