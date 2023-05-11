<html>
<head>
    
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
                //var_dump($items->images[0]);
                foreach($items->images as $image){
                    ?>
                    <div class="usercell">
                    <div class="avatar">
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