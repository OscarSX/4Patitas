<?php

    try {
        $conn = new PDO("mysql:host=localhost; dbname=dbvet","root","");

    } catch (PDOException $ex) {
        die($ex->getMessage());
    }