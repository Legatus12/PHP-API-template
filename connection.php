<?php

    $mysqli = new mysqli("localhost", "root", "", "eshop");

    if($mysqli->connect_errno)
        die("connection error");

?>