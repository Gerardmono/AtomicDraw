        <?php require_once 'views/layout/sidebar.php';?>
        <!--Inicio De Las Secciones-->
        <div id="sections">
            <section id="frontend">
                <span class="stickers">
                    <img class="stickerOne" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                    <img class="stickerTwo" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                </span>
                <h2 class="titulo red">Noticias de Atomic Draw</h2>
                <?php $noticia = Utils::getNewsAtomic(); ?>
                <?php while($not = $noticia->fetch_object()): ?>                
                <article class="article">                    
                        <span class="icon">a</span>
                        <p>
                            <a href="#"><?= $not->titulo ?></a>
                            <?= $not->descripcion?>
                        </p>
                        <span class="date">[<?= $not->fecha ?>. Atomic Draw WEB]</span>                                         
                </article>
                <?php endwhile; ?>    
            </section>

            <section id="backend">
                <span class="stickers">
                    <img class="stickerOne" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                    <img class="stickerTwo" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                </span>
                <h2 class="titulo orange">Noticias del entorno de desarrollo</h2>
                <?php $noticia = Utils::getNewsEntorno(); ?>
                <?php while($not = $noticia->fetch_object()): ?>                
                <article class="article">                    
                        <span class="icon">a</span>
                        <p>
                            <a href="#"><?= $not->titulo ?></a>
                            <?= $not->descripcion?>
                        </p>
                        <span class="date">[<?= $not->fecha ?>. Atomic Draw WEB]</span>                                         
                </article>
                <?php endwhile; ?> 
            </section>
        </div>
        <!--Fin De Las Secciones-->
        <div class="clearfix"></div>
        <div id="history">
            <a href="#">[Ver historico de noticias]</a>
        </div>
    </div>
    <!--Fin Del Contenido Central-->