
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
<div class="gauche">
    <h2>Qui sommes-nous</h2>
    <p>Bienvenue chez Chicken Deep, votre nouveau restaurant de référence pour une expérience culinaire inoubliable ! Nous sommes fiers de vous offrir des plats savoureux qui vous feront voyager gustativement parlant.</p>
    <p>Notre équipe de cuisiniers expérimentés met tout son savoir-faire et sa passion dans chaque assiette pour vous proposer des mets délicieux, préparés avec des ingrédients frais et de qualité.</p>
    <img src="..\..\res\img\index\nous.jpg" alt ="nous">
</div>
<div class = "droite">
    <h2>Notre engagement</h2>
    <p>Chez Chicken Deep, nous nous engageons à vous offrir une expérience gastronomique unique. Nous croyons que la cuisine est un art et nous nous efforçons de créer des plats qui éveilleront vos papilles.</p>
    <p>En tant que nouveau restaurant, nous sommes déterminés à vous surprendre avec notre menu varié et nos saveurs audacieuses. Notre équipe est constamment à la recherche de nouvelles inspirations culinaires pour vous offrir des créations originales et délicieuses.</p>
    <p>Que vous soyez un amateur de poulet ou que vous souhaitiez découvrir de nouvelles saveurs, nous avons des options pour satisfaire tous les palais. Rejoignez-nous et laissez-nous vous emmener dans un voyage gustatif dont vous vous souviendrez.</p>
</div>
<div class="gauche">
    <h2>Notre Menu</h2>
    <p>Explorez notre menu diversifié et laissez-vous tenter par une sélection alléchante de plats à base de poulet. Du poulet croustillant et savoureux aux délicieux plats grillés, en passant par les recettes exotiques, nous avons de quoi satisfaire toutes vos envies.</p>
    <p>Nos chefs talentueux ont créé des combinaisons de saveurs uniques, en utilisant des épices et des ingrédients soigneusement sélectionnés pour vous offrir une expérience gustative incomparable. Que vous soyez un fan de poulet frit traditionnel, de spécialités épicées ou de plats plus légers, vous trouverez votre bonheur chez Chicken Deep.</p>
    <p>Accompagnez votre repas avec nos délicieuses sauces maison et nos côtés savoureux. Nous veillons à ce que chaque bouchée soit une explosion de saveurs et nous nous engageons à vous offrir une expérience culinaire mémorable.</p>
  </div>
<div class="droite">
    <h2>Notre Ambiance</h2>
    <p>Chicken Deep ne se limite pas seulement à une expérience gustative exceptionnelle, nous mettons également l'accent sur une ambiance chaleureuse et conviviale. Notre restaurant est conçu pour vous offrir un espace confortable où vous pourrez profiter de votre repas en bonne compagnie.</p>
    <p>Nous avons créé une atmosphère accueillante avec une décoration moderne et des accents de poulet qui ajoutent une touche ludique à l'ensemble. Que ce soit pour un dîner en famille, un déjeuner entre amis ou une soirée romantique, nous avons l'endroit idéal pour vous.</p>
    <p>Nos équipes attentionnées sont là pour vous servir avec le sourire et vous offrir un service exceptionnel. Nous voulons que chaque visite chez Chicken Deep soit une expérience agréable et mémorable pour nos précieux clients.</p>
    <img src="..\..\res\img\index\couple.jpg" alt="love" weight="300">
  </div>

<?php
$content = ob_get_clean();
    require_once("template.php");
    ?>
    
    