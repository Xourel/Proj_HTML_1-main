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

ob_start();
  
  
           //var_dump($json->data[0]->items[0]);
            
                $PlateName = $json->data[0]->items[0]->name_fr ;
                $firstImg = $json->data[0]->items[0]->images[0];
                $Price = $json->data[0]->items[0]->prices[0]->price ;
            
                

                    if (!filter_var($firstImg, FILTER_VALIDATE_URL) === false) {
                        echo("URL est valide");
                      } else {
                        echo("URL n'est pas valide");
                      }
                    ?>

            <table class="table">
                <tr>
                    <td><?php echo $PlateName?></td>
                    
                    <td><img    src="<?php echo $firstImg?>"
                                onerror="this.onerror=null;this.src='https://placeimg.com/200/300/animals';"
                                style="width:100px"></td>

                    <td><?php echo $Price?></td>
                </tr>
            </table>
<?php
        
    
$content = ob_get_clean();
    require_once("src/html/template.php");