

<?= form_open('/controlador1/llenarfichaLenguaje')?>	
<?
	//$rut = array(
		//'name' => 'rut',
		//'placeholder' => 'Escribe tu Rut');
	
	$nombre = array(
		'name' => 'nombre',
		'placeholder' => 'Escribe tu Nombre');
	$fechan = array(
		'name' => 'fechan',
		'placeholder' => 'Escribe tu Fecha de Nacimiento');
	$edad = array(
		'name' => 'edad',
		'placeholder' => 'Escribe tu Edad');
?>
	<?= form_label ('Tu Rut : ','rut')?>
	<?= form_input($rut)?>
	<br>
	<?= form_label ('Tu nombre : ','nombre')?>
	<?=form_input($nombre)?>
	<br>
<?= form_label ('Tu Fecha de nacimiento : ','fechan')?>
	<?=form_input($fechan)?>
	<br>
<?= form_label ('Tu edad : ','edad')?>
	<?=form_input($edad)?>

<?= form_submit('','Subir Paciente')?>
<?= form_close() ?>
</body>
</html>