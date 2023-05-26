
        <style>
            
            .button {
            width: 300px;
            height:40px;
            background-color: #F4CFDF;
            display: block;
            margin : auto;
            }
 
            .container {
                margin-top:100px;
            }
            
            .button:hover {background-color: #fa579e;}
            .menu{background-color:lightblue;color:black;text-align: center; width:auto; height:auto;}
            p {
                font-size: x-large;
            }
            
        </style>
        <script>
            function showStarter(index){
                let x = document.getElementsByClassName("menu")[index]
                if (x.style.display == "none"){
                    x.style.display = "block";
                }else{
                    x.style.display = "none"
                }
            }


            
        </script>

        <?php
        $url = "http://test.api.catering.bluecodegames.com/menu";
        $opts = array(
            'http' => array(
                'method' => "POST",
                'header' => "Content-Type:application/json",
                'content' => '{"id_shop":"1"}'
            )
        );
        $context = stream_context_create($opts);
        $file = file_get_contents($url,false,$context);
        $json = json_decode($file);
        var_dump($json);
        ?>

<?php
    ob_start();
    $count = 0;
    foreach ($json->data as $key )
    {
        ?>
            
        </div><br>
        <button class="button"onclick = "showStarter(<?php echo $count;?>)"><?php echo $key->name_fr ; ?> </button><br>
        <div id="plat" class = "menu" style="display:none">
            <p>liste des <?php echo $key->name_fr ; ?></p>
            <?php   
            foreach($json->data as $subarray)
            {
                foreach($subarray->items as $item)
                {
                    $IdCat = $item->id_category;
                    if ($IdCat == 28){
                        $param = urlencode(json_encode($item));
                        ?>
                            
                            <a href="produit.php?item=<?php echo $param; ?>"><?php echo $item->name_fr ; ?></a><br>
                        <?php
                    //echo $PlateName;
                    } 
                
                }
            }  
        $count += 1;
    }
?>

        
        </div><br>  
        </div> 

<?php
    $content = ob_get_clean();
    require_once("src/html/template.php");
?>
