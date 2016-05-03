<?php
$url = "http://" . $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
$uri = trim($uri, "/");
$uri = $uri ? $uri : "home";
$file = $uri . ".php";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sacale=1.0">
        <link href="<?=$url?>/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=$url?>/Bootstrap/css/css.css" rel="stylesheet">
        <title>
            <?php
            echo (file_exists($file)) ? $uri : "Erro 404";
            ?>
        </title>
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>
        <div class="container">
            <?php
            if (file_exists($file)) {
                require_once $file;
            } else {
                require_once "404.php";
            }
            ?>
        </div>
        <?php require_once './rodape.php'; ?>
        <script type="text/javascript" src="<?=$url?>/Bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="<?=$url?>/Bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
