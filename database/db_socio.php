<?php

    function selectAll(){
        require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");
        $records = $conn->prepare('SELECT id, nombre, apellido1, apellido2, mensualidad, fecha FROM socios');
        $records->execute();
        $results = $records->fetchAll(PDO::FETCH_ASSOC);
        return $results;

    }
    function selectId($id){
        require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");
        $records = $conn->prepare('SELECT id, nombre, apellido1, apellido2, mensualidad, fecha FROM socios WHERE id=:id');
        $records->bindParam(':id', $id);
        $records->execute();
        $results = $records->fetchAll(PDO::FETCH_ASSOC);
        //print_r($results);
        return $results;

    }

    function selectAll_Membresias(){
        require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");
        $records = $conn->prepare('SELECT id, tipo FROM membresia');
        $records->execute();
        $results = $records->fetchAll(PDO::FETCH_ASSOC);
        return $results;

    }
?>