<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css"/>
    <script type="text/javascript" src="test.JS" ></script>
    <link rel="stylesheet" href="../../test.css"/>
    <script type="text/javascript" src="../../test.JS" ></script>

</head>

<?php
    ob_start();
?>

    <body>
    
        <?php
          
            $json = json_decode(urldecode($_GET['item'])) ; //decoder notre string en un objet réel 

            ob_start();
      
      
               //var_dump($json->data[0]->items[0]->ingredients);
                
                    $PlateName = $json->name_fr ;
                    //$firstImg = $json->data[1]->items[0]->images[2];
                    $Price = $json->prices[0]->price ;
            ?>
            
            <div class="wrapper">
            <header class="header"><p font-size: x-large> <?php echo $PlateName?></p></header>
            <aside class="aside aside-1"><p>
    
                <!-- Slideshow container -->
                <div class="slideshow-container">
    
                <?php
                    foreach($json->images as $img)
                    {?>
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <img src="<?php echo $img?>" onerror="this.onerror=null;this.src='https://placeimg.com/200/300/animals';" style="width:75%">
                        <div class="text"> <?php echo $PlateName?></div>
                    </div>
                    <?php
                    }
                    ?>
    
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                
            </p> </aside>
            <article class="main">
            <p> Ingredients :</p>
            <?php
                    foreach($json->ingredients as $ing)
                    {?>
                    <div> <p> <?php echo "\t" , $ing->name_fr;?> </p> </div>
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
            require_once("template.php");
            ?>
    </body>
    <html>
