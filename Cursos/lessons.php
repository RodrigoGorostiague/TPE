<?php
    function connect(){
        return new PDO('mysql:host=localhost;'
        .'dbname=db_cursos;charset=utf8',
        'root', '34632290');
    }
    function getLessons(){
        $db = connect();

        $sentencia = $db->prepare("SELECT * FROM lessons");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
?>