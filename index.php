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
        <link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="./Bootstrap/css/css.css" rel="stylesheet">
        <title>
            <?php
            $pagina = (isset($_GET['pg'])) ? $_GET['pg'] : "home";
            switch ($pagina) {
                case "home":
                    echo "Home";
                    break;
                case "empresa":
                    echo 'Empresa';
                    break;
                case "produto":
                    echo 'Produtos';
                    break;
                case "servico":
                    echo 'Serviços';
                    break;
                case "contato":
                    echo 'Contato';
                    break;
                default:
                    echo 'Home';
                    break;
            }
            ?>
        </title>
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>
        <div class="container">
        <?php
        switch ($pagina) {
            case "home":
                require_once './home.php';
                break;
            case "empresa":
                require_once './empresa.php';
                break;
            case "produto":
                require_once './produto.php';
                break;
            case "servico":
                require_once './servico.php';
                break;
            case "contato":
                require_once './contato.php';
                break;
            default:
                require_once './home.php';
                break;
        }
        
        ?>
        </div>
        <?php require_once './rodape.php'; ?>
        <script type="text/javascript" src="./Bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="./Bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
