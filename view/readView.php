<?php $title = 'Champion' ?>
<?php ob_start(); ?>

    <?php

    $list = getChampions();
    foreach ($list as $read){
        echo $read['champion'] . ': ';
        echo $read['image'] . '</br>';
    ?>
    <div><a href="index.php?action=updateChampion&id=<?php echo $read['id'];?>">Modifier</a></div>

    <?php } ?>
    
<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>
