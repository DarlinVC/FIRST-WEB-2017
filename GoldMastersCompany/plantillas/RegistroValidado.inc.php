    <div class="form-group">
    <label>Nombre Completo</label>
	<input type="text" name="nombre" class="form-control" placeholder="Escriba su nombre" <?php $validador -> mostrar_nombre() ?>>
	</div>
	<?php
     
    $validador -> mostrar_error_nombre();

	?>
	<div class="form-group">
	<label>Email</label>
	<input type="email" name="email" class="form-control" placeholder="Escriba su email Ej: prueba@hotmail.com" <?php $validador -> mostrar_email() ?>>
	</div>
	<?php
     
    $validador -> mostrar_error_email();

	?>
	<div class="form-group">
	<label>contraseña</label>
	<input type="password" name="pass" class="form-control" placeholder="Escriba su contraseña">
	</div>
	<?php
     
    $validador -> mostrar_error_pass();

	?>
	<div class="form-group">
	<label>Repite la contraseña</label>
	<input type="password" name="pass2" class="form-control" placeholder="Confirme la contraseña">
    </div>
    <?php
     
    $validador -> mostrar_error_pass2();

	?>
	<br>
	<button type="submit" class="btn btn-default" name="Enviar" style="
		border-radius: 0;
		background:  #08526D;
		color: white;
		width: 100%;
		font-size: 20px;
    ">Enviar <span class="glyphicon glyphicon-ok
"></span></button>