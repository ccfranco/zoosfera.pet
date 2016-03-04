<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="<?php echo base_url()?>css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()?>fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<!--MENU-->
</head>

<div id="header-wrapper">
	<div id="header" >
		
		<div id="menu">
			<img src="<?php echo base_url()?>images/fichas.jpg" width="300" height="50" alt="" />
			<ul>
				<li><a href="<?php echo base_url()?>index.php/controlador1" accesskey="1" title="">Inicio</a></li>
				<li><a href="<?php echo base_url()?>index.php/controlador1/login" accesskey="2" title="">Iniciar Sesion</a></li>
				<li><a href="<?php echo base_url()?>index.php/controlador1/ingreso" accesskey="3" title="">Ingreso de Ficha</a></li>
				<li><a href="<?php echo base_url()?>index.php/controlador1/administracion" accesskey="4" title="">Consultar Ficha</a></li>
				<li><a href="<?php echo base_url()?>index.php/controlador1/modificar" accesskey="5" title="">Modificar Ficha</a></li>
				<li class="active"><a href="<?php echo base_url()?>index.php/controlador1/preguntas" accesskey="6" title="">Ficha de Tratamiento</a></li>

			</ul>
		</div>
	</div>
</div>
<body>


<div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. Ficha Tratamiento</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                           <h1>Crear Ficha de tratamiento </h1>
				    <?php
				    echo validation_errors();
				    echo form_open('controlador1/crearficha_nino');
				    echo form_label('Nombre', 'nombre');
				    echo form_input('nombre');
				    echo form_label('Profesional', 'profesional');
				    echo form_input('profesional');
				    echo form_label('Fecha', 'fecha');
				    echo form_input('fecha');
				    echo '<br>';
				    echo form_label('Laboratorio', 'laboratorio');
				    echo form_input('laboratorio');
				    echo '<br>';
				    echo form_label('Comentario', 'comentario');
				    echo form_textarea('comentario');
				    echo '<br>';
				    echo form_submit('botonSubmit', 'Enviar');
				    echo form_close();
				    ?>

					-->

                    </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. Ficha de tratamiento Adulto</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">

            
					<h1>Crear Ficha de tratamiento Adulto</h1>
					    <?php
					    echo validation_errors();
					    echo form_open('controlador1/crearficha');
					    echo form_label('Nombre', 'nombre');
					    echo form_input('nombre');
					    echo form_label('Profesional', 'profesional');
					    echo form_input('profesional');
					    echo form_label('Fecha', 'fecha');
					    echo form_input('fecha');
					    echo '<br>';
					    echo form_label('Laboratorio', 'laboratorio');
					    echo form_input('laboratorio');
					    echo '<br>';
					    echo form_label('Comentario', 'comentario');
					    echo form_textarea('comentario');
					    echo '<br>';
					    echo form_submit('botonSubmit', 'Enviar');
					    echo form_close();
					    ?>


                   </div>
            </div>
        </div>

	</div>
	</div>




</body>
</html>
