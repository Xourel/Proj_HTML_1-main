<?php
    ob_start();

$content = ob_get_clean();
    require_once("template.php");
