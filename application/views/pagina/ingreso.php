<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="http://localhost/codeigniter/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://localhost/codeigniter/fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="http://localhost/codeigniter//css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://localhost/codeigniter/js/fileinput.min.js" type="text/javascript"></script>


<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<!--MENU-->
</head>
<body>
	
</body>	
<div id="header-wrapper">
	<div id="header" >
		
		<div id="menu">
			<img src="http://localhost/codeigniter/images/fichas.jpg" width="300" height="50" alt="" />
			<ul>
				<li><a href="http://localhost/codeigniter/index.php/controlador1" accesskey="1" title="">Inicio</a></li>
				<li><a href="http://localhost/codeigniter/index.php/controlador1/login" accesskey="2" title="">Iniciar Sesion</a></li>
				<li class="active"><a href="http://localhost/codecodeigniter/index.php/controlador1/ingreso" accesskey="3" title="">Ingreso de Ficha</a></li>
				<li><a href="http://localhost/codeigniter/index.php/controlador1/administracion" accesskey="4" title="">Consultar Ficha</a></li>
				<li><a href="http://localhost/codeigniter/index.php/controlador1/modificar" accesskey="5" title="">Modificar Ficha</a></li>
				<li><a href="http://localhost/codeigniter/index.php/controlador1/preguntas" accesskey="6" title="">Ficha de Tratamiento</a></li>

			</ul>
		</div>
	</div>
</div>

<center>
<div class="wrapper">
<body>


	<h1>Ingreso Niño</h1><br/>

	
	<?= form_open('controlador1/validar', array('name'=>'mi_form','id'=>'form'));?>
	

	Nombre: <br/>
	<?= form_input('nombre',@set_value('nombre'),'class="input"');?><br/>
	Edad:	<br/>
	<?= form_input('edad',@set_value('edad'),'class="input"');?><br/>
	RUT:	<br/>
	<?= form_input('rut',@set_value('rut'),'class="input"');?><br/> 
	Fecha de nacimiento: <br/>
	<input type="date" name="nacimiento"><br/>
	Sexo:
	Masculino<?= form_radio('sexo','M',false,'class="radio"');?>
	Femenino<?= form_radio('sexo','F',false,'class="radio"');?><br/>
	Familia: <br/>
	<?= form_input('fam',@set_value('fam'),'class="input"');?><br/>
	Escolaridad:	<br/>
	<?= form_input('escolaridad',@set_value('rut'),'class="input"');?><br/>
	Colegio:	<br/>
	<?= form_input('colegio',@set_value('rut'),'class="input"');?><br/>
	Direccion:	<br/>
	<?= form_input('direccion',@set_value('rut'),'class="input"');?><br/>
	Comuna:	<br/>
	<?= form_input('comuna',@set_value('rut'),'class="input"');?><br/>
	Region:	<br/>
	<?= form_input('region',@set_value('rut'),'class="input"');?><br/>
	Tratamientos previos:	<br/>
	<?= form_textarea('tratamiento',@set_value('rut'),'class="input"');?><br/>
	Notas:	<br/>
	<?= form_textarea('notas',@set_value('rut'),'class="input"');?><br/>
	<?= form_submit('submit','Enviar Datos','class="submit"');?>
	<?= form_close(); ?>
	<hr/>
	<h3>Posibles  Errores</h3>
	<?= validation_errors();?>
<hr/>
	<div>
		<div class="container">
			
           <h1>Sistema de carga de archivos</h1>
            <form enctype="multipart/form-data">
                
                <div class="form-group">
                    <input id="file-3" type="file" multiple=true>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Enviar</button>
                    <button class="btn btn-default" type="reset">Resetear</button>
                </div>
            </form>
        </div>
	</div>

</body>
</div>
</center>


</html>
<script>
	$("#file-3").fileinput({
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any"
	});
	</script>