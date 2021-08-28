<?php
include('dados/dados.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/boot.css?v=1">
    <link rel="stylesheet" href="css/style.css?v=1">
    <title>Ateliê dos Doces</title>
</head>

<body>
    <header class="header_nome">
        <div class="header_nome_content">
            <h1>Ateliê dos Doces</h1>
            <nav class="header_nome_content_menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?pagina=pages/quem_somos.php">Quem somos</a></li>
                    <li><a href="index.php?pagina=pages/doces.php">Doces</a></li>
                    <li><a href="index.php?pagina=pages/contato.php">Contato/Localização</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="main_content">
            <article class="main_content_art">
                <div class="main_content_div">
                    <header>
                        <h1>Bem-vindo ao Ateliê dos Doces</h1>
                    </header>
                </div>
            </article>
        </div>

        <?php
        if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
            $pagina = $_GET["pagina"];
            include($pagina);
        } else {
            //include('');
        }
        ?>
    </main>

    <footer>
        <p>Desenvolvido por Bruna Luconi - RA 20009794-5</p>
    </footer>
</body>

</html>