<?php
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

        public function delegaUpdateNotice(){
            $gestor= new SuperGestor();
            $news= $gestor->delegarUpdateNotice();
            require_once 'views/Gestion_De_Contenido/Gestion_De Noticias.php';
        }

        public function crearPublicacion(){

            // var_dump($_SESSION);
            // var_dump(isset($_SESSION['file']['name']));
            // die();
            if( isset($_SESSION['titulo']) && isset($_SESSION['precio'])
				&& isset($_SESSION['id-ui'])
				&& isset($_SESSION['descripcion']) && isset($_SESSION['file']['name']) ){

                $titulo= $_SESSION['titulo'];				
				$precio= $_SESSION['precio'];				
				$id_ui= $_SESSION['id-ui'];
				$descripcion= $_SESSION['descripcion'];
                $filename= $_SESSION['file']['name'];
                
                if( !empty($titulo)){
                    $titulo_validado = true;
                }else{
                    $titulo_validado = false;
                    $_SESSION['publicacion'] = "failed";
                }
                
                if( !empty($precio)){
                    $precio_validado = true;
                }else{
                    $precio_validado = false;
                    $_SESSION['publicacion'] = "failed";
                }
                
                if( !empty($id_ui)){
                    $id_ui_validado = true;
                }else{
                    $id_ui_validado = false;
                    $_SESSION['publicacion'] = "failed";
                }
                
                if( !empty($descripcion)){
                    $descripcion_validado = true;
                }else{
                    $descripcion_validado = false;
                    $_SESSION['publicacion'] = "failed";
                }
                
                if( !empty($filename)){
                    $filename_validado = true;
                }else{
                    $filename_validado = false;
                    $_SESSION['publicacion'] = "failed";
				}

                if($titulo_validado && $precio_validado && $id_ui_validado
                    && $descripcion_validado && $filename_validado){

                        $superGestor= new SuperGestor();
                        $result= $superGestor->delegaGuardarPublicacion($titulo, $precio, $id_ui, $descripcion, $filename);
    
                    
                }else{
                    // Crear publicacion fallido
                    Utils::borrarSesionesPublicacion();
                    $_SESSION['publicacion'] = "failed";
                    header("Location:".base_url.'O_SuperOyente/despliegaGUIPublicarUI');
                }
            }else{
                // Crear publicacion fallido
                Utils::borrarSesionesPublicacion();
                $_SESSION['publicacion'] = "failed";
                header("Location:".base_url.'O_SuperOyente/despliegaGUIPublicarUI');
            }
        }

        public function endDeleteNew(){
            if(isset($_SESSION['id'])){
                $id=$_SESSION['id'];
                $gestor= new SuperGestor();
                $new=$gestor->delegarDeleteNew($id);

                if ($new) {
                    Utils::borrarSesionId();
                    $_SESSION['register'] = "complete";
                }else{
                    Utils::borrarSesionId();
                    $_SESSION['register'] = "failed";
                }
            }else{
                Utils::borrarSesionId();
				$_SESSION['register'] = "failed";
            }
            header("Location:".base_url.'O_Contenido/delegaUpdateNotice');
        }
    }
?>