<?php 

echo '
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidade</title>
    <link rel="stylesheet" href="../design/estilos-homepage.css">
    <link rel="stylesheet" href="../design/estilo-conteudo.css">
    <link rel="stylesheet" href="../design/estilo-termos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4119802865459707"
     crossorigin="anonymous"></script> 
</head>
<body>
    <label> <!----SIDE BAR(Mobile)----->
        <input type="checkbox">
        <div class="toggle">
            <span class="top-line common"></span>
            <span class="middle-line common"></span>
            <span class="bottom-line common"></span>
        </div>

        <div class="slide">
            <h1>Menu</h1>
            <ul>
                <li><a href="../index.php"><i class="fa-solid fa-house-chimney"></i> Início</a></li>
                <li><a href="../conteudos/filmes/categoria-filmes.html"><i class="fa-solid fa-film"></i> Filmes</a></li>
                <li><a href="../conteudos/jogos/categoria-jogos.html"><i class="fa-solid fa-gamepad"></i> Jogos</a></li>
                <li><a href="../conteudos/documentarios/categoria-documentarios.html"><i class="fa-solid fa-book"></i> Documentários</a></li>
                
            </ul>

            <h1>Geral</h1>
            <ul>
                <li><a href="sobre.html"><i class="fa-solid fa-user-tie"></i> Sobre</a></li>
                <li><a href="contato.php"><i class="fa-solid fa-envelope"></i> Contato</a></li>
                <li><a href="politica-de-privacidade.php"><i class="fa-solid fa-lock"></i> Política de privacidade</a></li>
                <li><a href="termos-de-servico.php"><i class="fa-solid fa-file"></i> Termos de serviço</a></li>
                <li><a href="politica-de-cookies.php"><i class="fa-solid fa-cookie-bite"></i> Política de cookies</a></li>
            </ul>
        </div>
    </label> <!----SIDE BAR(Mobile) end----->
    <header>
        <nav> <!--BARRA DE NAVEGAÇÃO-->
            <div id="logo-nav">
                <img src="../design/img/logo.png" alt="Logo da NexusHub">
            </div>
            <a href="../index.php">
                <h1>NexusHub<span style="font-size: 11px;"> BETA</span></h1>
            </a>
        </nav>
    </header>
    <main>
        <div id="col-1"> <!--Menu Lateral esquerdo (Desktop)-->
            <h2>Menu</h2>
            <ul>
                <li><a href="../index.php"><i class="fa-solid fa-house-chimney"></i> Início</a></li>
                <li><a href="../conteudos/filmes/categoria-filmes.html"><i class="fa-solid fa-film"></i> Filmes</a></li>
                <li><a href="../conteudos/jogos/categoria-jogos.html"><i class="fa-solid fa-gamepad"></i> Jogos</a></li>
                <li><a href="../conteudos/documentarios/categoria-documentarios.html"><i class="fa-solid fa-book"></i> Documentários</a></li>
                
            </ul>

            <h2>Gerais</h2>
            <ul>
                <li><a href="sobre.php"><i class="fa-solid fa-user-tie"></i> Sobre</a></li>
                <li><a href="contato.html"><i class="fa-solid fa-envelope"></i> Contato</a></li>
                <li><a href="politica-de-privacidade.php"><i class="fa-solid fa-lock"></i> Política de privacidade</a></li>
                <li><a href="termos-de-servico.php"><i class="fa-solid fa-file"></i> Termos de serviço</a></li>
                <li><a href="politica-de-cookies.php"><i class="fa-solid fa-cookie-bite"></i> Política de cookies</a></li>
            </ul>
        </div> <!--Menu Lateral esquerdo (Desktop) end-->
';