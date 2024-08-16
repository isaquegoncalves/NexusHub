<!DOCTYPE html>
<html lang="pt-br">

<?php include_once "../../scripts/php/head-conteudos.php"; ?>
<title>Modelo Base - NexusHub</title>

<body>
    <?php include_once "../../scripts/php/sidebar-mobile.php"; ?>

    <header>
        <?php include_once "../../scripts/php/nav-bar-conteudos.php"; ?>
    </header>
    
    <main>
        <?php include_once "../../scripts/php/sidebar-desktop.php"; ?>

        <div id="col-2"> <!--Conteúdo Principal-->
            <h2>Titulo do filme</h2>
            <p>Breve descrição do tema: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam corrupti temporibus explicabo omnis voluptatum cumque esse exercitationem possimus dignissimos voluptatibus rerum repellat recusandae, saepe nihil laborum vitae eius aut velit.</p>

            <p class="nome-data">Por Isaque G. S. Brandão | (Data de hoje)</p>

            <div class="poster-conteudo">
                <img src="../../design/img/banner-jogadornumero1.webp" alt="Capa do documentário: O dilema das Redes">
            </div>

            <h2 class="titulo-article-conteudo">Apresentação</h2>
            <article>
                <p>Apresentação do tema: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto rerum, commodi deleniti ex ducimus voluptatum dolores at laudantium exercitationem odio perferendis impedit voluptate laborum. Aliquid neque veritatis repellat placeat consectetur.</p>
            </article>

            <h2 class="titulo-article-conteudo">Início</h2>
            <article>
                <p>
                    início do enredo: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod ullam excepturi iure? Recusandae natus eos voluptatem numquam. Asperiores dolorem placeat error dolores maxime culpa laborum repellendus illo! Sed, laborum temporibus.
                </p>
            </article>

            
            <h2 class="titulo-article-conteudo" style="text-align: center; margin: 0px;">
                Trailer do filme<br> "(Nome do filme)"
            </h2>

            <div class="poster-iframe">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_BHmun-2sq0?si=mvJGg2xTxQMInHhE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <h2 class="titulo-article-conteudo">Desenvolvimento</h2>
            <article>
                <p>
                    Desenvolvimento da história: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nesciunt minus numquam veritatis culpa, autem est magnam temporibus doloremque ratione tempora optio, at consequuntur aut adipisci ea? Ipsam, possimus vel. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </p>
            </article>

            <h2 class="titulo-article-conteudo">Conclusão</h2>
            <article>
                <p>
                    Conclusão do tema: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta molestiae, culpa inventore debitis accusantium consequatur nisi excepturi cumque labore vitae? Soluta quos, facere est voluptatibus autem consectetur deleniti odio assumenda! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem eveniet ipsam
                </p>
            </article>
            
            <h2 class="titulo-veja-mais">Veja também</h2>

            <!--ARTICLES PARA MAIS TEMAS RELACIONADOS-->
            <?php include_once "../../scripts/php/articles_veja-mais/filmes/#.php" ?>

        </div> <!--Conteúdo Principal end-->

        <?php include_once "../../scripts/php/ads-verticais.php"; ?>
    </main>

    <footer>
        <p>Por Isaque G. S. Brandão | NexusHub © 2024</p>
    </footer>
</body>
</html>