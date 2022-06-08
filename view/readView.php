<?php $title = 'Champion' ?>
<?php ob_start(); ?>

<?php

$perso = read();

foreach ($perso as $info) {
    ?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?= $info['image'] ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $info['alias'] ?></h5>
            <p class="card-text"><?= $info['last_name'], " ", $info['first_name'], '<br>', $info['talent'],
            '<br>', " ", " né le ", $info['day_birth'], " ", $info['month_birth']; ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
   

<?php } ?>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>