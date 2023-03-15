<?php
    $titulo = 'GoldMasters Company';
    include_once 'app/conexion.inc.php';
    include_once 'app/RepositorioUsuario.inc.php';
    include_once 'plantillas/documento-declaracion.inc.php';
    

?>

<div class="jumbotron" style="margin-bottom: 0;">
    <div class="container">
        <center><h1>GoldMasters Company</h1>
        <p>Siempre al servicio de la tecnologia.</p></center>
        

    </div>
    

</div>

<?php

include_once 'plantillas/menu.inc.php';

?>
<br>

<div class="container">
    <div class="row">
         <div class="col-md-8">
            <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-time"></span> Ultimas entradas.</h4>
                    </div>
                    <div class="panel-body">
                        <h4>No hay entradas que mostrar.</h4>
                    </div>
                </div>
            </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><span class="glyphicon glyphicon-search"></span> Buscador</h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="busca aqui!">
                            </div>
                            <br>
                                <button class="buscar form-control">Buscar</span></button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
        </div>

<?php
include_once 'plantillas/documento-cierre.inc.php';
?>