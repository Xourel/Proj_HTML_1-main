<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css"/>
    <script type="text/javascript" src="../index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>accueil</title>
</head> 
<body>
    
    <?php
    ob_start();

$content = ob_get_clean();
    require_once("template.php");
    ?>
    <h1>Bienvenue !</h1>
    <div class="carousel">
        <div class="carousel-inner">
            <img src="..\..\res\img\index\windows.jpg" alt="Image 1">
            <img src="..\..\res\img\index\cooking.jpg" alt="Image 2">
            <img src="..\..\res\img\index\plate.jpg" alt="Image 3">
            <img src="..\..\res\img\index\eating.jpg" alt="Image 4">
        </div>
    </div>
    <button class="carousel-previous">précédent</button>
    <button class="carousel-next">suivant</button>
    