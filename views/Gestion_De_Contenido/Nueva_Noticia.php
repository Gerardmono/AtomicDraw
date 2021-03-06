<?php require_once 'views/layout/sidebar.php';?>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?> 
    <script type="text/javascript">
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Noticia agregada correctamente!',
            showConfirmButton: false,
            timer: 2250
        })
    </script>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
    <script type="text/javascript">
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Registro fallido...',
            text: 'Introduce bien los datos!',
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
                <h2 class="titulo blue">Nueva Noticia</h2>
                <br/>
                <center>
                    <form id="form-register" action="<?=base_url?>O_SuperOyente/beginNewNotice" method="POST">
                        <label id="label-form" for="clasificacion">Clasificación: </label>
                        <input id="input-form" type="text" name="clasificacion"/>

                        <label id="label-form" for="titulo">Titulo: </label>
                        <input id="input-form" type="text" name="titulo"/> 
                        
                        <label id="label-form" for="descripcion">Descripción: </label>
                        <textarea name="descripcion" cols="30" rows="10"></textarea>

                        <label id="label-form" for="fecha">Fecha: </label>
                        <input id="input-form-date" type="date" name="fecha"/>                     
                
                        <div id="submits">
                            <input id="submit-form" type="submit" value="Enviar">
                            <input id="submit-form" type="reset" value="Limpiar">
                        </div>
                    </form>
                </center>                
            </section>
        </div>
        <!--Fin De Las Secciones-->
        <div class="clearfix"></div>
    </div>
    <!--Fin Del Contenido Central-->