<?php require_once 'views/layout/sidebar.php';?>
<!--Inicio De Las Secciones-->
<div id="sections">
            <section id="registro">
                <span class="stickers">
                    <img class="stickerOne" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                    <img class="stickerTwo" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                </span>
                <h2 class="titulo blue">Actualizar Noticias</h2>
                <br/>        

                <table>
                    <tr>
                        <td><strong>ID</strong></td>
                        <td><strong>CLASIFICACION</strong></td>
                        <td><strong>TITULO</strong></td>
                        <td><strong>DESCRIPCION</strong></td>
                        <td><strong>FECHA</strong></td>
                        <td><strong></strong></td>
                        <td><strong></strong></td>
                    </tr>
                    <?php while($noticia = $news->fetch_object()): ?>
                        <tr>
                            <td><?=$noticia->id?></td>
                            <td><?=$noticia->clasificacion?></td>
                            <td><?=$noticia->titulo?></td>
                            <td><?=$noticia->descripcion?></td>
                            <td><?=$noticia->fecha?></td>                            
                            <td>
                            <form action="<?=base_url?>O_SuperOyente/empiezaCerrarSesion" method="post">
                                <input class="red-input" type="submit" value="Modificar"/>
                            </form>
                            </td>
                            <td>
                                <div id="boton-actualizar">
                                    <a href="<?=base_url?>OAutobuses/eliminarBus&id=<?=$noticia->id?>" id="a-table">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
              
            </section>
        </div>
        <!--Fin De Las Secciones-->
        <div class="clearfix"></div>
    </div>
    <!--Fin Del Contenido Central-->