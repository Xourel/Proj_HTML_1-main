<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css"/>
    <script type="text/javascript" src="test.JS" ></script>

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
        
       ob_start();
  
  
           //var_dump($json->data[0]->items[0]->ingredients);
            
                $PlateName = $json->data[1]->items[0]->name_fr ;
                //$firstImg = $json->data[1]->items[0]->images[2];
                $Price = $json->data[1]->items[0]->prices[0]->price ;
        ?>
        
        <div class="wrapper">
        <header class="header"><p font-size: x-large> <?php echo $PlateName?></p></header>
        <aside class="aside aside-1"><p>

           
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            
          
            <?php
            foreach($json->data[1]->items[0]->images as $img)
                  {?>
                  <!-- Full-width images with number and caption text -->
                  <div class="carousel-item active">
                    <img src="<?php echo $img?>" onerror="this.onerror=null;this.src='https://placeimg.com/200/300/animals';" style="width:75%" class="d-block w-100" alt= <?php echo $PlateName?>>
                  </div>
                  <?php
                  }
                  ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>


            <br>
            
        </p> </aside>
        <article class="main">
        <p> Ingredients :</p>
        <?php
                foreach($json->data[1]->items[0]->ingredients as $ing)
                {?>
                <div> <p> <?php echo  $ing->name_fr;?> </p> </div>
                <?php
                }
                ?>
        </article>
        
        <footer class="footer">
        <?php$Cpt = 0;?>
            <button onclick="addCmd(<? $Cpt ?>)" >+</button>
            <button onclick="rmvCmd(<? $Cpt ?>)" > - </button><br>
            <?var_dump($Cpt);?>
            <p> <? echo($Cpt) ?> </p>
            <button type="button" class="btn-close" aria-label="Close"></button>
        </footer>
        </div>
                
        
        <?php
        $content = ob_get_clean();
        require_once("src/html/template.php");
        ?>
</body>
<html>