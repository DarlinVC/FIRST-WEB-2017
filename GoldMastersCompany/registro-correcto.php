<?php

include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'registro.php';

if (isset($_GET['nombre']) && !empty($_GET['nombre'])){
	$nombre = $_GET['nombre'];
} else{
	Redireccion::redirigir(RUTA_INICIO);
}

$titulo = 'Registro Correcto!';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/menu.inc.php';

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				 <span class="glyphicon glyphicon-ok-circle" aria=hidden></span> Registro Correcto
				</div>
				<div class="panel-body text-center">
					<p>Gracias por registrarte!<b><?PHP echo $nombre ?> </b></p>
					<p><a href="<?php RUTA_LOGIN ?>">Inicia sesion</a>para comenzar a usar nuestros servicios.</p>
				</div>
			</div>
		</div>
	</div>
</div>

