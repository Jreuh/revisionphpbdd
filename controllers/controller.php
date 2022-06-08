<?php
require ('models/model.php');

function listChampion(){
    
    
    require 'view/readView.php';
}

function home(){
    require 'view/indexView.php';
}

function addChampion(){
    require 'view/createView.php';
}

function update(){
    require 'view/updateView.php';
}