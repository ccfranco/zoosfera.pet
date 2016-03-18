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

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<!--MENU-->
</head>
<body>
<div id="header-wrapper">
	<div id="header" >
		
		<div id="menu">
			<img src="<?php echo base_url()?>images/fichas.jpg" width="300" height="50" alt="" />
			<ul>
				<li><a href="<?php echo base_url()?>index.php/controlador1" accesskey="1" title="">Inicio</a></li>
				<li><a href="<?php echo base_url()?>index.php/login/logout_ci" accesskey="2" title="">Cerrar Sesion</a></li>
				<li><a href="<?php echo base_url()?>index.php/controlador1/ingreso" accesskey="3" title="">Ingreso de Ficha</a></li>
				<li><a href="<?php echo base_url()?>index.php/controlador1/administracion" accesskey="4" title="">Consultar Ficha</a></li>
				<li class="active"><a href="<?php echo base_url()?>index.php/controlador1/modificar" accesskey="5" title="">Modificar Ficha</a></li>
				<li><a href="<?php echo base_url()?>index.php/controlador1/preguntas" accesskey="6" title="">Ficha de Tratamiento</a></li>

			</ul>
		</div>
	</div>
</div>


<div class="wrapper">
	<center> 
	<section class="container">
<link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Buscar Paciente a modificar</h2></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Buscar por paciente"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input1" placeholder="Buscar por profesional"/><span class="icon-place"></span></div></div>
	<div class="element-date"><label class="title"></label><div class="item-cont"><input class="large" data-format="yyyy-mm-dd" type="date" name="date" placeholder="Buscar por dia"/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Buscar"/></div>
</section>


</body>
</html>
