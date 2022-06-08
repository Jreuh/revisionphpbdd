<?php
require 'controllers/controller.php';

if (isset($_GET['action'])){
    if ($_GET['action'] == 'listChampion'){
        listChampion();
    }
    if ($_GET['action'] == 'addChampion'){
        addChampion();
    }
    if ($_GET['action'] == 'upChampion'){
        update();
    }
}
else{
    home();
}

if (isset($_POST['submit'])){
            
    if (!empty($_POST['championForm']) && $_FILES['imageForm'] && $_FILES['imageForm']['error'] == 0 && $_FILES['imageForm']['size'] <= 1000000){
        $file = pathinfo($_FILES['imageForm']['name']);
        $extension = $file['extension'];
        $extensionAccept = ['jpg','jpeg','png'];

        if (in_array($extension,$extensionAccept)){
            createChampion();
            echo 'Champion créé';
        }
        else{
            echo 'jpg,jpeg,png Uniquement';
        }
    }

    else{
        echo 'Image trop lourde et/ou non envoyée </br> Et/ou insére un nom de champion';
    }

}

if (isset($_POST['update'])){
            
    if (!empty($_POST['championForm']) && $_FILES['imageForm'] && $_FILES['imageForm']['error'] == 0 && $_FILES['imageForm']['size'] <= 1000000){
        $file = pathinfo($_FILES['imageForm']['name']);
        $extension = $file['extension'];
        $extensionAccept = ['jpg','jpeg','png'];

        if (in_array($extension,$extensionAccept)){
            updateChampion();
            echo 'Champion modifié';
        }
        else{
            echo 'jpg,jpeg,png Uniquement';
        }
    }

    else{
        echo 'Image trop lourde et/ou non envoyée </br> Et/ou modifie un nom de champion';
    }

}