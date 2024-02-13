<?php
    include "../../fonction/fonction.php";
    header( "Content-Type: application/json");
    
    if (isset($_GET['type'])) {
        $sql = "select * from exams3_config_cueilleur";
        $result = getQuery($sql);
        echo json_encode($result);
    }
    else{
        $data = array();
        $data["minimal"] = $_POST["minimal"];
        $data["bonus"] = $_POST["bonus"];
        $data["mallus"] = $_POST["mallus"];
        updateConfig($data);
    }

?>