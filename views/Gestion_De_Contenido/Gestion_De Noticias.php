<?php require_once 'views/layout/sidebar.php';?>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?> 
    <script type="text/javascript">
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Noticia eliminada correctamente!',
            showConfirmButton: false,
            timer: 2250
        })
    </script>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
    <script type="text/javascript">
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Lo sentimos...',
            text: 'No se pudo eliminar la noticia!',
            showConfirmButton: false,
            timer: 2250
        })
    </script>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>


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
                        <td><strong>FECHA</strong></td>
                        <td><strong></strong></td>
                        <td><strong></strong></td>
                    </tr>
                    <?php while($noticia = $news->fetch_object()): ?>
                        <tr>
                            <td><?=$noticia->id?></td>
                            <td><?=$noticia->clasificacion?></td>
                            <td><?=$noticia->titulo?></td>
                            <td><?=$noticia->fecha?></td>                            
                            <td>
                                <div id="botones-actualizar">
                                    <a class="blue-a" id="a-tablas" href="<?=base_url?>O_SuperOyente/eliminarBus&id=<?=$noticia->id?>">Modificar</a>
                                </div>                                
                            </td>
                            <td>
                                <div id="boton-actualizar">
                                    <a class="red-a" id="a-tablas" href="<?=base_url?>O_SuperOyente/beginDeleteNew&id=<?=$noticia->id?>">Eliminar</a>
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