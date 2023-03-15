<?php

    conexion :: abrir_conexion();
    conexion :: cerrar_conexion();
?>
<nav class="navbar navbar-default navbar-static-top" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background: #1F1D1D !important; border:none;">

                <span class=sr-only>Este boton despliega la barra de navegacion</span>
                <span class="barra-despegable glyphicon glyphicon-menu-down" style="color: #26B8EE; font-size: 20px;"></span>
            
            </button>
            <a class="navbar-brand" href="inicio.php">GoldMasters Company</a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#"><span class="glyphicon glyphicon-list
"></span> Entradas</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart
"></span> Tienda</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-wrench
"></span> Soporte</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="<?php RUTA_LOGIN ?>"><span class="glyphicon glyphicon-log-in" aria-hidden="true" name="log_in"></span> Iniciar Sesion</a></li>
                <li><a href="<?php RUTA_REGISTRO ?>" class="registro"><span class="glyphicon glyphicon-plus" aria-hidden="true" name="Registro"></span> Registrarse</a></li>
                
            </ul>
    </div>
</nav>