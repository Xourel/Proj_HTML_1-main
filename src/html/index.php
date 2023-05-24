<!--
<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>accueil</title>
</head> 
<body>
-->   
    <?php
    ob_start();
    ?>
    
    <h1>Bienvenue !</h1>

    <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://www.rtes.fr/system/files/inline-images/image%20de%20test.jpeg" alt="Image 1" width="300" height="300">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="..\..\res\img\index\windows.jpg" alt="Image 1" width="300" height="300">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="..\..\res\img\index\cooking.jpg" alt="Image 2" width="300" height="300">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="..\..\res\img\index\plate.jpg" alt="Image 3" width="300" height="300">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="..\..\res\img\index\eating.jpg" alt="Image 4" width="300" height="300">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

<?php
$content = ob_get_clean();
    require_once("template.php");
    ?>
    
    