<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atomic Draw</title>
    <link rel="icon" type="image/x-icon" href="<?=base_url?>assets/img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/styles.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>
<body>
    <!--Inicio De La Cabecera-->
    <header id="header">
        <div id="logotipo">
            <a href="<?=base_url?>">
                <img src="<?=base_url?>assets/img/logo.png" alt="Logotipo De La Web" />
            </a>            
        </div>
    </header>
    <!--Fin De La Cabecera-->

    <!--Inicio Del Menu De Navegación-->
    <nav id="nav">
        <ul>
            <li>
                <a href="<?=base_url?>">Inicio</a>
            </li>
            <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['typeuser'] == 2) : ?>
            <li>
                <a href="<?=base_url?>O_SuperOyente/despliegaGUICreacionGUI">Entorno Desarrollo UI´s</a>
            </li>
            <?php endif; ?>
            <li>
                <a href="index.html">Biblioteca</a>
            </li>            
            <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['typeuser'] == 2) : ?>
            <li>
                <a href="index.html">Interfaces De Usuario</a>
                <ul>
                    <li>
                        <a href="<?=base_url?>O_SuperOyente/despliegaGUIPublicarUI">Publicar</a>
                    </li>
                    <li>
                        <a href="index.html">Actualizar</a>
                    </li>
                    <li>
                        <a href="index.html">Personales</a>
                    </li>
                    <li>
                        <a href="index.html">Atomic Draw</a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
            <li>
                <a href="index.html">Gestion De Noticias</a>
                <ul>
                    <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['typeuser'] == 1) : ?>
                    <li>
                        <a href="<?=base_url?>O_SuperOyente/delegaNewNotice">Publicar</a>
                    </li>
                    <li>
                        <a href="<?=base_url?>O_SuperOyente/beginUpdateNotice">Modificar/Eliminar</a>
                    </li>
                    <?php endif; ?>                
                    <li>
                        <a href="index.html">Consultar</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="index.html">Proyectos</a>
            </li>
            <li>
                <a href="index.html">Reseñas</a>
            </li>
            <li>
                <a href="index.html">Blog</a>
            </li>
            <li>
                <a href="index.html">Contacto</a>
            </li>
        </ul>
    </nav>
    <!--Fin Del Menu De Navegación-->