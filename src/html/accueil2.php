<!DOCTYPE html>
<html>
    <head>
        <style>
            
            .button {
            width: 150px;
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
        <button  class="button"onclick = "showStarter()">Entrée</button><br>
        <div id="starter" class = "menu" style="display:none">
            <p>liste des entrée</p>
            <?php   
            foreach($json->data as $subarray)
            {
                foreach($subarray->items as $items)
                {
                    $IdCat = $items->id_category;
                    if ($IdCat == 27){
                    $PlateName = $items->name_fr ;
                    ?>
                    <button onclick = "goToPage()"><?php echo $PlateName ?></button><br>
                    <?php
                    //echo $PlateName;
                    } 
                
                }
            }
            ?>
            
        </div>
        <button class="button"onclick = "showPlat()">Plat</button><br>
        <div id="plat" class = "menu" style="display:none">
            <p>liste des plats</p>
            <?php   
            foreach($json->data as $subarray)
            {
                foreach($subarray->items as $items)
                {
                    $IdCat = $items->id_category;
                    if ($IdCat == 28){
                    $PlateName = $items->name_fr ;
                    ?>
                    <button onclick = "goToPage()"><?php echo $PlateName ?></button><br>
                    <?php
                    //echo $PlateName;
                    } 
                
                }
            }
            ?>
        </div>
        <button class="button"onclick = "showDesert()">Dessert</button><br>
        <div id="desert" class = "menu" style="display:none">
            <p>liste des déssert</p>
            <?php   
            foreach($json->data as $subarray)
            {
                foreach($subarray->items as $items)
                {
                    $IdCat = $items->id_category;
                    if ($IdCat == 29){
                    $PlateName = $items->name_fr ;
                    ?>
                    <button onclick = "goToPage()"><?php echo $PlateName ?></button><br>
                    <?php
                    //echo $PlateName;
                    } 
                
                }
            }
            ?>
        </div>  
        </div> 
    </body>
<?php
    $content = ob_get_clean();
    require_once("template.php");
?>
</html>