<?php

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require "connection.php";

    $json = file_get_contents("php://input");
    $objId = json_decode($json);

    $sql = "DELETE FROM example WHERE id='$objId->id'";
    $query = $mysqli->query($sql);

    echo json_encode(array('msg' => 'successful delete'));

?>