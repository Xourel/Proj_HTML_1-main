
        <style>
            
            .button {
            
            width: 300px;
            height:40px;
            background-color: #F4CFDF;
            display: block;
            margin : auto;
            }
 
            h1{
                text-align: center;
                margin-top:50px;
            }
            
            .button:hover {background-color: #fa579e;}
            .menu{
                background-color:lightblue;
                color:black;
                text-align: center; 
                width:100%; 
                height:auto;

            }
                
            p {
                font-size: x-large;
            }
            a{
                text-decoration: none;
                color: #fff;
                font-weight: 600;
            }
            a:hover{
                text-decoration: underline;
            }
            .menu-header{
                margin-top:30px; 
            }
            .menu-main{

                margin-left:5%;
                background: red;
                height:70%;
                width: 90%;
                display: flex;
                flex-direction: row;
                justify-content:space-around;
                flex-wrap: wrap;
                margin
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
    $count = 0;?>
    <div class="menu-header"><h1>Menu</h1> </div >
    <div class = "menu-main"><?php
        foreach ($json->data as $key )
        {?>
            <div>
            <button class="button"onclick = "showStarter(<?php echo $count;?>)"><?php echo $key->name_fr ; ?> </button><br>
                <div id="plat" class = "menu" style="display:none">
                        <p>liste des <?php echo $key->name_fr ; ?></p>
                        <?php   

                            foreach($key->items as $item)
                            {
                                $IdCat = $item->id_category;
                                if ($IdCat == 28){
                                    $param = urlencode(json_encode($item));
                                    ?>
                                        
                                        <a href="plat.php?item=<?php echo $param; ?>"><?php echo $item->name_fr . "\n"; ?></a><br>
                                    <?php
                                } 
                            }
                        }
                        $count += 1;
                        ?>
                </div><br>
            </div>
    </div> 

<?php
    $content = ob_get_clean();
    require_once("template.php");
?>
