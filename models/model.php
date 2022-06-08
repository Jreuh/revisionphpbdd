<?php

function dbConnect(){

    try{
        $db = new PDO(
            'mysql:host=localhost;dbname=crud;charset=UTF8',
            'root',
            ''
        );
        return $db;
    }
    catch(Exception $e){
        die ("Error: " . $e->getMessage());   
    }
}

