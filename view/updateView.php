<?php $title = 'Champion' ?>
<?php ob_start(); ?>

<?php
    $read = read();
?>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <label>Champion</label>
        <input type="text" name="championForm" value="<?php echo $read['champion']?>">
        <label>Image</label>
        <input type="file" name="imageForm">
        </br>
        <button type="submit" name="update">Modifier</button>
    </form>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>