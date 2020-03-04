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
                    <form id="form-register" action="<?=base_url?>O_SuperOyente/registroUsuario" method="POST">
                        <label id="label-form" for="nombre">Nombre: </label>
                        <input id="input-form" type="text" name="nombre"/>                       
                
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