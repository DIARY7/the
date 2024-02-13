<?php 
    include("../../fonction/fonction.php");
    header( "Content-Type: application/json");
    echo json_encode(getStat($_POST["dateMin"],$_POST["dateMax"])) ;
?>