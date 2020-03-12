        <?php require_once 'views/layout/sidebar.php';?>
        <!--Inicio De Las Secciones-->
        <div id="sections">
            <section id="registro">
                <span class="stickers">
                    <img class="stickerOne" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                    <img class="stickerTwo" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                </span>
                <h2 class="titulo blue">Registro</h2>
                <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?> 
                    <script type="text/javascript">
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Registro completado correctamente!',
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
                <center>
                    <form id="form-register" action="<?=base_url?>O_SuperOyente/empiezaRegistro" method="POST" enctype="multipart/form-data">
                        <label id="label-form" for="nombre">Nombre: </label>
                        <input id="input-form" type="text" name="nombre"/>
                        
                        <label id="label-form" for="apellidoP">Apellido Paterno: </label>
                        <input id="input-form" type="text" name="apellidoP"/>

                        <label id="label-form" for="apellidoM">Apellido Materno: </label>
                        <input id="input-form" type="text" name="apellidoM"/>

                        <label id="label-form" for="email">Correo Electronico: </label>
                        <input id="input-form" type="email" name="email"/>

                        <label id="label-form" for="password">Contraseña : </label>
                        <input id="input-form" type="password" name="password"/>

                        <label id="label-form" for="password">Confirma Contraseña : </label>
                        <input id="input-form" type="password" name="passwordConfirm"/>

                        <label id="label-form" for="fotoP">Foto De Perfil : </label>
                        <!-- <input id="input-form" type="file" name="fotoP"/> -->
                        <input id="input-form" type="file" name="imagen">
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