<!DOCTYPE html>
<html>
    <head>
        <style>
            
            .button {
            width: 300px;
            height:40px;
            background-color: greenyellow;
            display: block;
            margin : auto;
            }
 
            .container {
                margin-top:100px;
            }
            
            .button:hover {background-color: green;}
            .menu{background-color:lightblue;color:black;text-align: center; width:auto; height:auto;}
            p {
                font-size: x-large;
            }
            
        </style>
        <script>
            function showStarter(){
                x=document.getElementById("starter")
                if (x.style.display == "none"){
                    x.style.display = "block";
                }else{
                    x.style.display = "none"
                }
            }
            function showPlat(){
                y=document.getElementById("plat")
                if (y.style.display == "none"){
                    y.style.display = "block";
                }else{
                    y.style.display = "none"
                }
            }
            function showDesert(){
                z=document.getElementById("desert")
                if (z.style.display == "none"){
                    z.style.display = "block";
                }else{
                    z.style.display = "none"
                }
            }
            function goToPage(){
                location.assign("produit.php");
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

    </head>
<?php
    ob_start();
?>
    <body>
        <div class="container">
        <button  class="button"onclick = "showStarter()">Entrée 🥗</button><br>
        <div id="starter" class = "menu" style="display:none">
            <p>liste des entrée</p>
            <?php   
            foreach($json->data as $subarray)
            {
                foreach($subarray->items as $item)
                {
                    $IdCat = $item->id_category;
                    if ($IdCat == 27){
                    $param = urlencode(json_encode($item));
                    ?>
                        
                        <a href="produit.php?item=<?php echo $param; ?>"><?php echo $item->name_fr ; ?></a>
                    <?php
                    //echo $PlateName;
                    } 
                
                }
            }
            ?>
            
        </div><br>
        <button class="button"onclick = "showPlat()">Plat 🍽️</button><br>
        <div id="plat" class = "menu" style="display:none">
            <p>liste des plats</p>
            <?php   
            foreach($json->data as $subarray)
            {
                foreach($subarray->items as $item)
                {
                    $IdCat = $item->id_category;
                    if ($IdCat == 28){
                        $param = urlencode(json_encode($item));
                        ?>
                            
                            <a href="produit.php?item=<?php echo $param; ?>"><?php echo $item->name_fr ; ?></a>
                        <?php
                    //echo $PlateName;
                    } 
                
                }
            }
            ?>
        </div><br>
        <button class="button"onclick = "showDesert()">Dessert 🧁</button><br>
        <div id="desert" class = "menu" style="display:none">
            <p>liste des déssert</p>
            <?php   
            foreach($json->data as $subarray)
            {
                foreach($subarray->items as $item)
                {
                    $IdCat = $item->id_category;
                    if ($IdCat == 29){
                    $PlateName = $item->name_fr ;
                    $param = urlencode(json_encode($item));
                        ?>
                            
                            <a href="produit.php?item=<?php echo $param; ?>"><?php echo $PlateName ; ?></a>
                        <?php
                    //echo $PlateName;
                    } 
                
                }
            }
            ?>
        </div><br>  
        </div> 
    </body>
<?php
    $content = ob_get_clean();
    require_once("template.php");
?>
</html>