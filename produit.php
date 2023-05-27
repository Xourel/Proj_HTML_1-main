

    <style> /*CSS*/
         /* .c-item{
            height: 350px;
            width: 300px;
          }*/
         /*.c_img{
            height: 100%; /* donne a l'image 100% de la taille de son objet mere 
            width: 100%;
            object-fit: cover; /* adapte l'image a la taile imposé  
            /*filter: 
          }*/

        </style>


<?php
    ob_start();
?>

    
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
    
            <div id="PlateCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php
                    foreach($json->images as $img)
                        {?>
                        <!-- Full-width images with number and caption text -->
                        <div class="carousel-item active c-item">
                            <img src="<?php echo $img?>" onerror="this.onerror=null;this.src='https://placeimg.com/200/300/animals';" style="width:75%" class="d-block w-100 c-img" alt= <?php echo $PlateName?>>
                        </div>
                        <?php
                        }
                        ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#PlateCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#PlateCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
                <br>
                 <p> <?php echo  $Price . " €";?> </p> 


            </aside>
            <article class="main">
            <p> Ingredients :</p><br>
            <div>
            <?php
                foreach($json->ingredients as $ing)
                {?>
                    <p> <?php echo $ing->name_fr;?> </p>
                <?php
                }
            ?>
            </div>
            </article>
            
            <footer class="footer">
            <?php$Cpt = 0;?>
                <button onclick="addCmd(<? $Cpt ?>)" >+</button>
                <button onclick="rmvCmd(<? $Cpt ?>)" > - </button><br>
                <?var_dump($Cpt);?>
                <p> <? echo($Cpt) ?> </p>
                <button type="button" class="btn-close" aria-label="Close"></button>
            </footer>
            
                    
            
            <?php
            $content = ob_get_clean();
            require_once("template.php");
            ?>
  