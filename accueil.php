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
?>

<?php   
    foreach($json->data as $subarray)
    {
           foreach($subarray->items as $items)
           {
                $PlateName = $items->name_fr ;
                $firstImg = $items->images[0];
                $Price = $items->prices ;
            
                ?>

            <table class="table">
                <tr>
                    <td><?php echo $PlateName?></td>
                    <td><img src="<?php echo $firstImg?>" style="width:100px"></td>
                    
                </tr>
            </table>
<?php
        }
    }
$content = ob_get_clean();
    require_once("template.php");