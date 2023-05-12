<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        foreach($json->data as $subarray){
            foreach($subarray->items as $items){
                //var_dump($items);
                $PlateName = $items->name_fr ;
                //var_dump($PlateName);
                ?>
                <div class="Plate">
                    
                    <div class="Plate_name">
                        <p><?php echo $PlateName; ?></p>
                    </div>
                    <?php
                    foreach($items->images as $image){
                    ?>
                        <div class="Plate_img">
                        <img src="<?php echo $image; ?> "/>
                        </div>
                </div>
                <?php
                echo '<br/>';
            }
    
            }

        }

    ?>
    
</body>

<html>