<?php $title = 'Personnage' ?>
<?php ob_start(); ?>

<form action="index.php" method="POST" enctype="multipart/form-data">

    <label>Prenom</label>
    <input type="text" name="first_name">
    <label>Nom de de famille</label>
    <input type="text" name="last_name">
    <label>Alias</label>
    <input type="text" name="alias">
    <label>Talent</label>
    <input type="text" name="talent">
    <label>Jour de naissance</label>
    <input type="number" min="1" max="31" name="day_birth">
    <label>Mois de naissance</label>
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
    <label>Image</label>
    <input type="file" name="imageForm">
    </br>
    <button type="submit" name="submit">Envoyer</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>