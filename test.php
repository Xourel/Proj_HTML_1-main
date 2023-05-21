<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/menu.css"/>
    <script type="text/javascript" src="../menu.JS" ></script>
    
</head>
<body>

    <?php
       $url = "http://test.api.catering.bluecodegames.com/menu";

        $postdata = json_encode(
            array("ip_shop" => "1")
        );

       //Création d'un flux
       $opts = array(
            'http' => array(
                'method' => "POST",
                'header' => "Content-Type:application/json",
                'content' => '{"id_shop":"1"}'
            )
        );

        $context = stream_context_create($opts);

        // Accès à un fichier HTTP avec les entetes HTTP indiquéci-dessus
        $file = file_get_contents($url,false,$context);
        $json = json_decode($file); //decoder notre string en un objet réel 
        //var_dump($json);
        ?>
        <!-- Slideshow container -->
        <div class="slideshow-container">
        <?php
        foreach($json->data as $subarray){
           
            foreach($subarray->items as $items){
                //var_dump($items);
                $PlateName = $items->name_fr ;
                
                //var_dump($PlateName);
                    foreach($items->images as $image){
                        ?>
                        <div class="mySlides fade">
                        <img src="<?php echo $image?>" style="width:50%">
                        </div>
                        <?php

                    }
            }
            
        }
    
        ?>
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



</body>

<html>