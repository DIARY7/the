<?php
    include "../../fonction/fonction.php";
    header( "Content-Type: application/json");

    if (isset($_GET['type']) && strpos($_GET['type'],'modifier') !== false) {
        $sql = "select idCueilleur,nomCueilleur from exams3_cueilleur";
        $result = getQuery($sql);
        echo json_encode($result);
    }
    else if (isset($_GET['type']) && strpos($_GET['type'],'modifier') == false) {
        $sql = "select * from exams3_cueilleur where idCueilleur=".$_GET['type'];
        $result = getQuery($sql);
        echo json_encode($result);
    }
    else{
        $data = array();
        $data["idCueilleur"] = $_POST["idCueilleur"];
        $data["nomCueilleur"] = $_POST["nomCueilleur"];
        $data["genre"] = $_POST["genre"];
        $data["dateNaissance"] = $_POST["dateNaissance"];
        var_dump($data);
        if ($data["idCueilleur"] == "null") {
            insert($data,"exams3_cueilleur");
        }
        else{
            updateCueilleur($data);
        }
    }
    

?>