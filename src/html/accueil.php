<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
</head>
<body>


    <?php
    ob_start();

$content = ob_get_clean();
    require_once("template.php");
    ?>
</body>
</html>


