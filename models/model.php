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
    return $perso;
}

function updateChild($id)
{
    $pseudo = htmlspecialchars(ucfirst($_POST['pseudo']));

    $db = dbConnect();
    $sql = "UPDATE child SET pseudo = $pseudo WHERE id=$id";
    $modif = $db -> prepare($sql);
    $modif -> execute();

}
