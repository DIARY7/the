<?php
    include "../../fonction/fonction.php";
    header( "Content-Type: application/json");

    if (isset($_GET['type']) && strpos($_GET['type'],'modifier') !== false) {
        $sql = "select idVariete,nomVariete from exams3_variete";
        $result = getQuery($sql);
        echo json_encode($result);
    }
    else if (isset($_GET['type']) && strpos($_GET['type'],'modifier') == false) {
        $sql = "select * from exams3_variete where idVariete=".$_GET['type'];
        $result = getQuery($sql);
        echo json_encode($result);
    }
    else{
        $data = array();
        $data["idVariete"] = $_POST["idVariete"];
        $data["nomVariete"] = $_POST["nomVariete"];
        $data["occupation"] = $_POST["occupation"];
        $data["rendement"] = $_POST["rendement"];
    var_dump($data);
        if ($data["idVariete"] == "null") {
            insert($data,"exams3_variete");
        }
        else{
            updateVariete($data,$data['idVariete']);
        }
    }



?>