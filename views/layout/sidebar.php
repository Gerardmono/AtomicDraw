 <!--Inicio Del Contenido Central-->
 <div id="content">
        <!--Inicio De La Barra Lateral-->
        <aside id="aside">

            <?php if(!isset( $_SESSION['usuario'] )) : ?>
            <div class="widget" id="login">
                <h3>Entrar a la web</h3>
                <form action="<?=base_url?>O_SuperOyente/empiezaLogin" method="POST">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario"/>

                    <label for="password">Contraseña:</label>
                    <input type="password" name="password"/>

                    <input type="submit" value="Entrar"/>
                </form>
                <a href="<?=base_url?>O_SuperOyente/despliegaUIRegistro">Registrate en Atomic Draw</a>
                <a href="#">¿Olvidaste  tu contraseña?</a>
            </div>
            <?php endif; ?>

            <div class="widget" id="login">
                <h3 class="blue">[Aula virtual 1]</h3>
                <form action="<?=base_url?>O_SuperOyente/empiezaCerrarSesion" method="post">
                    <label>Nombre de usuario:</label>
                    <input type="text"/>

                    <label>Contraseña:</label>
                    <input type="password"/>

                    <input type="submit" value="Cerrar sesion [Temporal]"/>
                </form>
            </div>

            <div class="widget" id="login">
                <h3 class="red">Aula virtual 2</h3>
                <form action="#">
                    <label>Nombre de usuario:</label>
                    <input type="text"/>

                    <label>Contraseña:</label>
                    <input type="password"/>

                    <input type="submit" value="Entrar"/>
                </form>
            </div>

            <div class="widget" id="login">
                <h3>Enlaces de interes</h3>
                <ul>
                    <li>
                        <a href="<?=base_url?>">
                            Entorno de interfaces
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url?>">
                            Componentes HTML
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url?>">
                            Estilos de componentes HTML
                        </a>
                    </li>
                </ul>
            </div>

        </aside>        
        <!--Fin De La Barra Lateral-->