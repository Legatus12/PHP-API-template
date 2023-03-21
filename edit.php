<?php

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require "connection.php";

    $json = file_get_contents("php://input");
    $obj = json_decode($json);

    $sql = "UPDATE example SET attr='$obj->attr'";
    $query = $mysqli->query($sql);

    echo json_encode(array('msg' => 'successful update'));

?>