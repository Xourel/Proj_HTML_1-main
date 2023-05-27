
<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="..\css\index.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>accueil</title>
</head> 
<body>
  
    <?php
    ob_start();
    ?>
    
    <h1>Bienvenue !</h1>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="..\..\res\img\index\windows.jpg" alt="Image 1" height="300">
    </div>
    <div class="carousel-item">
    <img src="..\..\res\img\index\cooking.jpg" alt="Image 2" height="300">
    </div>
    <div class="carousel-item">
    <img src="..\..\res\img\index\plate.jpg" alt="Image 3" height="300">
    </div>
    <div class="carousel-item">
    <img src="..\..\res\img\index\eating.jpg" alt="Image 4" height="300">
    </div>
  </div>
</div>


<?php
$content = ob_get_clean();
    require_once("template.php");
    ?>
    
    