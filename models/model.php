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
function create(){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $alias=$_POST['alias'];
    $talent=$_POST['talent'];
    $day_birth=$_POST['day_birth'];
    $month_birth=$_POST['month_birth'];
    $image=$_POST['imageForm'];
    $db=dbConnect();
    $sql="INSERT INTO child (first_name,last_name,alias,talent,day_birth,month_birth,image) VALUES
    ($first_name,$last_name,$alias, $talent, $day_birth,$month_birth, $image)";
    $query= $db->prepare($sql);
    $query->execute();    
}
