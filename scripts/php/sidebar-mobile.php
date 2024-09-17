<?php

//BARRA LATERAL DO MOBILE
echo'
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
                <li>
                    <div class="fundo">
                        <a href="../../"><i class="fa-solid fa-house-chimney"></i> Início</a>
                    </div>
                </li>
                <li>
                    <div class="fundo">
                        <a href="../../conteudos/filmes/categoria-filmes.html"><i class="fa-solid fa-film"></i> Filmes</a>
                    </div>
                </li>
                <li>
                    <div class="fundo">
                        <a href="../../conteudos/jogos/categoria-jogos.html"><i class="fa-solid fa-gamepad"></i> Jogos</a>
                    </div>
                </li>
                <li>
                    <div class="fundo">
                        <a href="../../conteudos/documentarios/categoria-documentarios.html"><i class="fa-solid fa-book"></i> Documentários</a>
                    </div>
                </li>
            </ul>

            <h1>Geral</h1>
            <ul>
                <li>
                    <div class="fundo">
                        <a href="../../politicas-e-termos/sobre.php"><i class="fa-solid fa-user-tie"></i> Sobre</a>
                    </div>
                </li>
                <li>
                    <div class="fundo">
                        <a href="../../politicas-e-termos/contato.html"><i class="fa-solid fa-envelope"></i> Contato</a>
                    </div>
                </li>
                <li>
                    <div class="fundo">
                        <a href="../../politicas-e-termos/politica-de-privacidade.php" style="font-size: 90%;"><i class="fa-solid fa-lock"></i> Política de privacidade</a>
                    </div>
                </li>
                <li>
                    <div class="fundo">
                        <a href="../../politicas-e-termos/termos-de-servico.php"><i class="fa-solid fa-file"></i> Termos de serviço</a>
                    </div>
                </li>
                <li>
                    <div class="fundo">
                        <a href="../../politicas-e-termos/politica-de-cookies.php"><i class="fa-solid fa-cookie-bite"></i> Política de cookies</a>
                    </div>
                </li>
            </ul>
        </div>
    </label> <!----SIDE BAR(Mobile) end----->
';