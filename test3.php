<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/test.css"/>
    <script type="text/javascript" src="../test.JS" ></script>


    <style>
    
        .wrapper {
  display: flex;  
  flex-flow: row wrap;
  font-weight: bold;
  text-align: center; 
}

.wrapper > * {
  padding: 10px;
  flex: 1 100%;
}

.header {
  background: tomato;
}

.footer {
  background: lightgreen;
}

.main {
  text-align: left;
  background: deepskyblue;
}

.aside-1 {
  background: gold;
}

.aside-2 {
  background: hotpink;
}

@media all and (min-width: 600px) {
  .aside { flex: 1 0 0; }
}

@media all and (min-width: 800px) {
  .main    { flex: 3 0px; }
  .aside-1 { order: 1; } 
  .main    { order: 2; }
  .aside-2 { order: 3; }
  .footer  { order: 4; }
}

<script>
    function addCmd(<?php $cpt ?>){
        return(<?$cpt+1?>);
    }
    function rmvCmd(<?php $cpt ?>){
        return(<?$cpt-1?>);
    }
</script>


body {
  padding: 2em; 
}
    </style>


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
            
                $PlateName = $json->data[0]->items[0]->name_fr ;
                $firstImg = $json->data[0]->items[0]->images[2];
                $Price = $json->data[0]->items[0]->prices[0]->price ;
        ?>
        
        <div class="wrapper">
        <header class="header"><p> <?php echo $PlateName?></p></header>
        <aside class="aside aside-1"><p>


            <img    src="<?php echo $firstImg?>" onerror="this.onerror=null;this.src='https://placeimg.com/200/300/animals';" style="width:75%">
        </p> </aside>
        <article class="main">
        <?php
                foreach($json->data[0]->items[0]->ingredients as $ing)
                {?>
                <div> <p> <?php echo $ing->name_fr?></p> </div>
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