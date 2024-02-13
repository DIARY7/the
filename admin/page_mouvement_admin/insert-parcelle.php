<?php
    include "../../fonction/fonction.php";
    header( "Content-Type: application/json");

    if (isset($_GET['type']) && strpos($_GET['type'],'variete') !== false) {
        $sql = "select idVariete,nomVariete from exams3_variete";
        $result = getQuery($sql);
        echo json_encode($result);
    }
    else if (isset($_GET['type']) && strpos($_GET['type'],'modifier') !== false) {
        $sql = "select idParcelle from exams3_parcelle";
        $result = getQuery($sql);
        echo json_encode($result);
    }
    else if (isset($_GET['type']) && strpos($_GET['type'],'modifier') == false) {
        $sql = "select * from exams3_parcelle where idParcelle=".$_GET['type'];
        $result = getQuery($sql);
        echo json_encode($result);
    }
    else if (isset($_GET['type']) && strpos($_GET['type'],'tableau') !== false) {
        $sql = "select * from exams3_parcelle";
        $result = getQuery($sql);
        echo json_encode($result);
    }
    else{
        $data = array();
        $data["idParcelle"] = $_POST["idParcelle"];
        $data["surface"] = $_POST["surface"];
        $data["idVariete"] = $_POST["idVariete"];
        if ($data["idParcelle"] == "null") {
            insert($data,"exams3_parcelle");
        }
        else{
            updateParcelle($data,$data["idParcelle"]);
        }
    }
    

?>