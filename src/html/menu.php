<style>
            
            .button {
            width: 350px;
            height:40px;
            background-color: #F4CFDF;
            display: block;
            margin-top : auto;
            }
            .button:hover {background-color: #fa579e;}

            .menu-main{
                margin-left:5%;
                margin-top:3%;
                width:90%;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                flex-wrap: wrap;
                background:lightblue;
            }
            .menu-header{
                margin-top: 5%;
            }
            
            
            .menu{
                background-color:#5784BA ;
                color:black;
                text-align: center; 
                width: 100%; 
                height:auto;
                margin-bottom: 20px ;
            }
                
            p {
                font-size: x-large;
            }

            .menu-link{
                text-decoration:none;
                color:white;
            }
            .menu-link:hover{
                text-decoration:underline;
            }

            h1{
                text-align: center;
            }
            
            @media screen and (max-width:700px){
                .menu-main{
                    flex-direction: column;
                    align-items: center;
                }
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

        ?>

<?php
    ob_start();
    $count = 0;
    ?>
    <div class="menu-header"><h1>Menu</h1></div>
    <div class="menu-main"><?php
        foreach ($json->data as $key )
        {?>
            <div><br>
                <button class="button"onclick = "showStarter(<?php echo $count;?>)"><?php echo $key->name_fr ; ?> </button><br>
                <div id="plat" class = "menu" style="display:none">
                    <h4>liste des <?php echo $key->name_fr ; ?></h4>
                    <?php   

                        foreach($key->items as $item)
                        {
                            $IdCat = $item->id_category;
                            if ($IdCat ==  $item->id_category){
                                $param = urlencode(json_encode($item));
                                ?>
                                    <a class="menu-link" href="plat.php?item=<?php echo $param; ?>"><?php echo $item->name_fr ; ?></a><br>
                                <?php
                            } 
                        }
                    $count += 1;
                    ?>
                </div>
            </div><?php
    }
    ?>
    </div>

 
         

<?php
    $content = ob_get_clean();
    require_once("template.php");
?>