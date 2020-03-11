<?php
    require_once 'models/usuario/GestorInformacion.php';
    require_once 'models/SuperGestor.php';

    class O_Contenido{
        function __construct(){

        }

        public function endsNewNotice(){
            if(isset($_SESSION['clasificacion']) && isset($_SESSION['titulo']) && isset($_SESSION['descripcion']) && isset($_SESSION['fecha'])){
                $clasificacion= $_SESSION['clasificacion'];
                $titulo= $_SESSION['titulo'];
                $descripcion= $_SESSION['descripcion'];
                $fecha=$_SESSION['fecha'];
                
                if(!empty($clasificacion) && !empty($titulo) && !empty($descripcion) && !empty($fecha)){
                    $gestor= new SuperGestor();
                    $result= $gestor->DelegarSaveNotice(null,$clasificacion,$titulo,$descripcion,$fecha);

					if ($result) {
						Utils::borrarSesionNotice();
						$_SESSION['register'] = "complete";
						header("Location:".base_url.'O_SuperOyente/delegaNewNotice');
					}else{
						Utils::borrarSesionNotice();
						$_SESSION['register'] = "failed";
						header("Location:".base_url.'O_SuperOyente/delegaNewNotice');
					}
                }else{
                    Utils::borrarSesionNotice();
                    $_SESSION['register'] = "failed";
                    header("Location:".base_url.'O_SuperOyente/delegaNewNotice');
                }
            }else{
                Utils::borrarSesionNotice();
				$_SESSION['register'] = "failed";
				header("Location:".base_url.'O_SuperOyente/delegaNewNotice');
            }
        }
    }
?>