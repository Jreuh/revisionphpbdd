<?php

function dbConnect()
{

    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=south-park;charset=UTF8',
            'root',
            ''
        );
        return $db;
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
function read()
{
    $db = dbConnect();
    $sql = "SELECT * from child";
    $query = $db->prepare($sql);
    $query->execute();
    $perso = $query->fetchAll();
    var_dump($perso);
    return $perso;
}
