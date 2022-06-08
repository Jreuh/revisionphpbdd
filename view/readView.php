<?php $title = 'Champion' ?>
<?php ob_start(); ?>

<?php

$perso = read();

foreach ($perso as $info) {
    echo $info['last_name'], " ", $info['first_name'], '<br>', $info['alias'], " ", $info['talent'],
    '<br>', " ", " nais le ", $info['day_birth'], " ", $info['month_birth'];
?>
   

<?php } ?>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>