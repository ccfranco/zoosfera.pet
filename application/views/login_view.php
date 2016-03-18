
<!DOCTYPE html>


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

<body>
<div id="header-wrapper">
   <div id="header" >
      
      <div id="menu">
         <img src="<?php echo base_url()?>images/fichas.jpg" width="300" height="50" alt="" />
         <ul>
            <li><a href="<?php echo base_url()?>index.php/controlador1" accesskey="1" title="">Inicio</a></li>
            <li class="active"><a href="<?php echo base_url()?>index.php/login" accesskey="2" title="">Iniciar Sesion</a></li>
           <!--
			<li class><a href="<?php echo base_url()?>index.php/login" accesskey="3" title="">Ingreso de Ficha</a></li>
			<li class><a href="<?php echo base_url()?>index.php/login" accesskey="4" title="">Consultar Ficha</a></li>
			<li class><a href="<?php echo base_url()?>index.php/login" accesskey="5" title="">Modificar Ficha</a></li>
			<li class><a href="<?php echo base_url()?>index.php/login" accesskey="6" title="">Ficha de Tratamiento</a></li>
			-->

         </ul>
      </div>
   </div>
</div>
<div class="wrapper">
   


</body>





	<center>
		<?php
	$username = array('name' => 'username', 'placeholder' => 'nombre de usuario');
	$password = array('name' => 'password',	'placeholder' => 'introduce tu password');
	$submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
	?>
	<div align="center">
		<h2>Login Laboratorios</h2><p><p>
				<div align="center">
					
					<!--
					<?=form_open(base_url().'index.php/login/new_user')?>
					<label for="username">Nombre de usuario:</label>				
					<?=form_input($username)?><p><?=form_error('username')?></p>
					<label for="password">Introduce tu password:</label>
					<?=form_password($password)?><p><?=form_error('password')?></p>
					<?=form_hidden('token',$token)?>
					<?=form_submit($submit)?>
					<?=form_close()?>
					-->
			
					
					
						
					<?= validation_errors();?>
					<?= form_open(base_url().'index.php/login/new_user');?>
					Nombre de Usuario :			
				    <?= form_input('username');?>
				</p>
				    Contraseña : 
				    <?= form_password('password');?>
				    </p>
				    <?= form_hidden('token',$token);?>
				    <?= form_submit('botonSubmit', 'Enviar');?>
				    <?= form_close();?>
				    
				    
				    <?php
					if($this->session->flashdata('usuario_incorrecto'))
					{
					?>
					<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
					<?php
					}
					?>
				</div>
		
	</div>
	</center>
</html>
