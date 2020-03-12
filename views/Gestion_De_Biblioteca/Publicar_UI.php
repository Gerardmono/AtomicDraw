<?php require_once 'views/layout/sidebar.php';?>

<?php if (isset($_SESSION['publicacion']) && $_SESSION['publicacion'] == 'complete') : ?> 
    <script type="text/javascript">
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Publicación creada correctamente.',
            showConfirmButton: false,
            timer: 2250
        })
    </script>
<?php elseif(isset($_SESSION['publicacion']) && $_SESSION['publicacion'] == 'failed'): ?>
    <script type="text/javascript">
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Fallo al crear la publicación.',
            text: 'Introduce bien los datos!',
            showConfirmButton: false,
            timer: 2250
        })
    </script>
<?php endif; ?>
<?php Utils::deleteSession('publicacion'); ?>

<!--Inicio De Las Secciones-->
<div id="sections">
            <section id="registro">
                <span class="stickers">
                    <img class="stickerOne" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                    <img class="stickerTwo" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                </span>
                <h2 class="titulo blue">Crear publicacion para Interfaz de usuario.</h2>
                <br/>
                <center>
                    <form id="form-register" action="<?=base_url?>O_SuperOyente/empiezaCrearPublicacion" method="POST">
                        
                        <label id="label-form" for="titulo">Nombre de la UI: </label>
                        <input id="input-form" type="text" name="titulo"/>

                        <label id="label-form" for="precio">Precio: </label>
                        <input id="input-form" type="number" name="precio"/>

                        <label for="id-ui">Selecciona la UI a publicar:</label>
                        <select id="select-ui" name="id-ui">
                            <option value="UI_01">UI_01</option>
                            <option value="UI_02">UI_02</option>
                            <option value="UI_03">UI_03</option>
                            <option value="UI_04">UI_04</option>
                        </select>
                        
                        <label id="label-form" for="descripcion">Descripción: </label>
                        <textarea name="descripcion" cols="30" rows="10"></textarea>
                        
                        <label id="label-form" for="imagen">Imagen de la UI: </label>
                        <input id="select-ui" type="file" name="imagen">
                
                        <div id="submits">
                            <input id="submit-form" type="submit" value="Publicar">
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