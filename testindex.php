<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/menu.css"/>
    <script type="text/javascript" src="../menu.JS" ></script>
    
</head>
<body>
    <h1>test</h1>
<?php
    ob_start();

$content = ob_get_clean();
    require_once("src/html/template");
?>