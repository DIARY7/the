<?php
    include "../../fonction/fonction.php";
    header( "Content-Type: application/json");

    if (isset($_GET['type']) && strpos($_GET['type'],'variete') !== false) {
        $sql = "select idVariete,nomVariete from exams3_variete";
        $result = getQuery($sql);
        echo json_encode($result);
    }
    else if (isset($_GET['type']) && strpos($_GET['type'],'modifier') == false) {
        $sql = "select * from exams3_prix_vente where idVariete=".$_GET['type'];
        $result = getQuery($sql);
        echo json_encode($result);
    }

    else{
        $data = array();
        $data["idVariete"] = $_POST["idVariete"];
        $data["prix"] = $_POST["prix"];
        updatePrix($data,$data["idVariete"]);
    }
    
?>