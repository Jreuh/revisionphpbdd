<?php $title = 'Champion' ?>
<?php ob_start(); ?>

<?php
    $read = read();
?>

<form action="index.php" method="POST" enctype="multipart/form-data">
    <div class="container-fluid">
    <div class="collumn col-8">
        <div class="form-group">
            <label>Prenom</label>
            <input type="text" class="form-control" name="first_name">
        </div>
        <div class="form-group">
            <label>Nom de de famille</label>
            <input type="text" class="form-control" name="last_name">
        </div>
        <div class="form-group">
            <label>Alias</label>
            <input type="text" class="form-control" name="alias">
        </div>
        <div class="form-group">
            <label>Talent</label>
            <input type="text" class="form-control" name="talent">
        </div>
        <div class="form-group">
            <label>Jour de naissance</label>
            <input type="number" class="form-control"  min="1" max="31" name="day_birth">
        <label>Mois de naissance</label>
        </div>
        <div class="form-group">
            <select name="month_birth" id="">
                <option value="">Choisissez un mois</option>
                <option value="january">Janvier</option>
                <option value="febuary">Fevrier</option>
                <option value="march">Mars</option>
                <option value="april">Avril</option>
                <option value="may">Mai</option>
                <option value="june">Juin</option>
                <option value="july">Juillet</option>
                <option value="august">Aout</option>
                <option value="september">Septembre</option>
                <option value="october">Octobre</option>
                <option value="november">Novembre</option>
                <option value="december">Décembre</option>
            </select>
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="imageForm">
        </div>
        </br>
        <button type="submit" name="submit">Envoyer</button>
    </div>
    </div>
</form>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>