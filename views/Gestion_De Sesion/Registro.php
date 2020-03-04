<!--Inicio De Las Secciones-->
<div id="sections">
            <section id="registro">
                <span class="stickers">
                    <img class="stickerOne" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                    <img class="stickerTwo" src="<?=base_url?>assets/img/scotch.png" alt="Pegatina"/>
                </span>
                <h2 class="titulo blue">Registro</h2>
                <br/>
                <center>
                    <form id="form-register" action="#">
                        <label id="label-form" for="nombre">Nombre: </label>
                        <input id="input-form" type="text" name="nombre"/>
                        
                        <label id="label-form" for="apellidoP">Apellido Paterno: </label>
                        <input id="input-form" type="text" name="apellidoP"/>

                        <label id="label-form" for="apellidoM">Apellido Materno: </label>
                        <input id="input-form" type="text" name="apellidoM"/>

                        <label id="label-form" for="email">Correo Electronico: </label>
                        <input id="input-form" type="email" name="email"/>

                        <label id="label-form" for="password">Contraseña : </label>
                        <input id="input-form" type="password" name="paswword"/>

                        <label id="label-form" for="password">Confirma Contraseña : </label>
                        <input id="input-form" type="password" name="paswword"/>

                        <label id="label-form" for="fotoP">Foto De Perfil : </label>
                        <input id="input-form" type="file" name="fotoP"/>
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