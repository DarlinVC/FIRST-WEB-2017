<?php

include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/validadorRegistro.inc.php';
include_once 'app/redireccion.inc.php';

$titulo = 'Registro';
if (isset($_POST['Enviar'])){
    conexion :: abrir_conexion();

	$validador = new validadorRegistro($_POST['nombre'], $_POST['email'], $_POST['pass'], $_POST['pass2'], Conexion :: obtener_conexion());

    if ($validador -> registro_valido()){
    	$usuario = new Usuario($usuario_insertado, $validador -> obtener_nombre(), $validador -> obtener_email(),
    	    password_hash($validador -> obtener_pass(), PASSWORD_DEFAULT),'','');
    	$usuario_insertado = RepositorioUsuario :: insertar_usuarios(Conexion :: obtener_conexion(), $usuario);
	
    if (isset($usuario_insertado)){
		redireccion::redirigir(RUTA_REGISTRO_CORRECTO);
	}
    }

    conexion :: cerrar_conexion();
}


include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/menu.inc.php';
?>

<div class="container">
	<div class="jumbotron" style="background: transparent;">
	 <h1 class="text-center" 
	  style="
      color: black;
      padding-bottom: 8px;
      border-bottom: solid 1px gray;
	 "> 
     Formulario de registro</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 text-center">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-exclamation-sign
"></span> Instruciones</h3>
			</div>
				<div class="panel-body">
					<p class="text-justify">
						Hola bienvenidos/as al formulario de registro de GoldMastersCompany, aqui tendran que poner su nombre completo, email y contraseña le recomendamos que utilize letras, numeros, signos para mejor seguridad, registrate y disfruta de nuestros servicios.

					</p>
					<br>
                    <li style="list-style: none;"><a href="#">¿Ya tienes una cuenta?</a></li>
                    <br>
                    <li style="list-style: none;"><a href="#">¿Olvidaste la contraseña?</a></li>

				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center"><span class="glyphicon glyphicon-list-alt
"></span> Introdusca los datos</h3>
			</div>
				<div class="panel-body">
					<form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <?php
                         if (isset($_POST['Enviar'])){
                         	include_once 'plantillas/RegistroValidado.inc.php';

                         }else{
                         	include_once 'plantillas/RegistroVacio.inc.php';
                         }
		                 ?>
				
					</form>
					<br>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

include_once 'plantillas/documento-cierre.inc.php';

?>