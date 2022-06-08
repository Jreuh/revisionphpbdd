<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    
    <header class="container-fluid" id="top">
        <div class="row justify-content-center">
            <div id="champion"></div>
        </div>
        <div class="text-center">
            <h1>Mes supers champions!</h1>
            <p>Introduction</p>
            <button onclick="myWorld();">Play/Pause</button>
            <a href="index.php?action=listChampion"><button>Liste de champions</button></a>
            <a href="index.php?action=addChampion"><button>Ajoute un champion</button></a>
            <a href="index.php"><button>Accueil</button></a>
        </div>
    </header>

    <?php echo $content ?>

    <footer>
        <p>Mon footer de champion</p>
    </footer>

    <script src="public/js/script.js"></script>

</body>
</html>