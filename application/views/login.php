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
            <li><a href="<?php echo base_url()?>controlador1" accesskey="1" title="">Inicio</a></li>
            <li class="active"><a href="<?php echo base_url()?>controlador1/login" accesskey="2" title="">Iniciar Sesion</a></li>
            <li><a href="<?php echo base_url()?>controlador1/ingreso" accesskey="3" title="">Ingreso de Ficha</a></li>
            <li><a href="<?php echo base_url()?>controlador1/administracion" accesskey="4" title="">Consultar Ficha</a></li>
            <li><a href="<?php echo base_url()?>controlador1/modificar" accesskey="5" title="">Modificar Ficha</a></li>
            <li ><a href="<?php echo base_url()?>controlador1/preguntas" accesskey="6" title="">Ficha de Tratamiento</a></li>

         </ul>
      </div>
   </div>
</div>
<div class="wrapper">
   


</body>



</head>
<center>
<body style="margin-top:0px">
<?php echo form_open('php/login/'); ?>
<div class="Info">
   <p class="Titulo"><h1><a >Login:</a></h1></p>
   <p> </p>   
</div>
<div id="LoginUsuarios">
   <div class="fila">
      <div class="LoginUsuariosCabecera">Usuario:</div>
      <div class="LoginUsuariosDato"><input type="text" name="maillogin" value="<?= set_value('maillogin'); ?>" size="25" /></div>
      <div class="LoginUsuariosError">
    
      </div>
   </div>      
   <div class="fila">
      <div class="LoginUsuariosCabecera">Contraseña:</div>
      <div class="LoginUsuariosDato"><input type="password" name="passwordlogin" value="<?= set_value('passwordlogin'); ?>" size="25" /></div>
      <div class="LoginUsuariosError"><?= form_error('passwordlogin');?></div>
   </div>
   <div class="fila">
      <div class="LoginUsuariosCabecera"></div>
      <div class="LoginUsuariosDato"></div>
   </div>      
   <div class="fila">
      <div class="LoginUsuariosCabecera"><input type="submit" value="Ingresar"></div>
      <div class="LoginUsuariosDato"></div>
   </div>      
</div>
</form>
</center>

</html>