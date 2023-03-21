<?php

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    require "connection.php";

    $sql = "SELECT * FROM user";
    $query = $mysqli->query($sql);

    $data = array();

    while($res = $query->fetch_assoc()) {
        $data[] = $res;
    }

    echo json_encode($data);
    

?>