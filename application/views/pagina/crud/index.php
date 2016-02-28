<?php
require_once 'paciente.entidad.php';
require_once 'paciente.model.php';

// Logica
$alm = new paciente();
$model = new pacienteModel();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		case 'actualizar':
			$alm->__SET('id',              $_REQUEST['id']);
			$alm->__SET('Nombre',          $_REQUEST['Nombre']);
			$alm->__SET('Apellido',        $_REQUEST['Apellido']);
			$alm->__SET('Sexo',            $_REQUEST['Sexo']);
			$alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);
            $alm->__SET('Medico',          $_REQUEST['Medico']);
            $alm->__SET('Detalles',        $_REQUEST['Detalles']);

			$model->Actualizar($alm);
			header('Location: index.php');
			break;

		case 'registrar':
			$alm->__SET('Nombre',          $_REQUEST['Nombre']);
			$alm->__SET('Apellido',        $_REQUEST['Apellido']);
			$alm->__SET('Sexo',            $_REQUEST['Sexo']);
			$alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);
            $alm->__SET('Medico',          $_REQUEST['Medico']);
            $alm->__SET('Detalles',        $_REQUEST['Detalles']);

			$model->Registrar($alm);
			header('Location: index.php');
			break;

		case 'eliminar':
			$model->Eliminar($_REQUEST['id']);
			header('Location: index.php');
			break;

		case 'editar':
			$alm = $model->Obtener($_REQUEST['id']);
			break;

	}
}

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ingreso Paciente</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style type="text/css">
    .bs-example{
        margin: 20px;
    }
</style>
	</head>
    <body style="padding:15px;">


<div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. Laboratorio Base</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">


                     <div class="pure-g">
                         <div class="pure-u-1-2">
                
                <form action="?action=<?php echo $alm->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                    
                    <table style="width:500px;">
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <td><input type="text" name="Nombre" value="<?php echo $alm->__GET('Nombre'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Apellido</th>
                            <td><input type="text" name="Apellido" value="<?php echo $alm->__GET('Apellido'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Sexo</th>
                            <td>
                                <select name="Sexo" style="width:100%;">
                                    <option value="1" <?php echo $alm->__GET('Sexo') == 1 ? 'selected' : ''; ?>>Masculino</option>
                                    <option value="2" <?php echo $alm->__GET('Sexo') == 2 ? 'selected' : ''; ?>>Femenino</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Fecha</th>
                            <td><input type="date" name="FechaNacimiento" value="<?php echo $alm->__GET('FechaNacimiento'); ?>" style="width:100%;" /></td>
                        </tr>
                        <th style="text-align:left;">Medico</th>
                            <td><input type="text" name="Medico" value="<?php echo $alm->__GET('Medico'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Detalles</th>
                            <td><input type="text" name="Detalles" value="<?php echo $alm->__GET('Detalles'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>
                        </div>


                     </div>
                </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. Laboratorio de Voz</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">



                     <form action="?action=<?php echo $alm->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                    
                    <table style="width:500px;">
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <td><input type="text" name="Nombre" value="<?php echo $alm->__GET('Nombre'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Apellido</th>
                            <td><input type="text" name="Apellido" value="<?php echo $alm->__GET('Apellido'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Sexo</th>
                            <td>
                                <select name="Sexo" style="width:100%;">
                                    <option value="1" <?php echo $alm->__GET('Sexo') == 1 ? 'selected' : ''; ?>>Masculino</option>
                                    <option value="2" <?php echo $alm->__GET('Sexo') == 2 ? 'selected' : ''; ?>>Femenino</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Fecha</th>
                            <td><input type="date" name="FechaNacimiento" value="<?php echo $alm->__GET('FechaNacimiento'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Direccion</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Ocupacion</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Actividad Secundaria</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Motivo de Consulta</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Voz</th>
                            <td>
                                <select name="Sexo" style="width:100%;">
                                    <option value="1" <?php echo $alm->__GET('Sexo') == 1 ? 'selected' : ''; ?>>Cantada</option>
                                    <option value="2" <?php echo $alm->__GET('Sexo') == 2 ? 'selected' : ''; ?>>Hablada</option>
                                </select>
                            </td>
                        </tr>



                        <tr>
                            <th style="text-align:left;">Fecha de Consulta</th>
                            <td><input type="date" style="width:100%;" /></td>
                        </tr>





                        <th style="text-align:left;">Medico</th>
                            <td><input type="text" name="Medico" value="<?php echo $alm->__GET('Medico'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Detalles</th>
                            <td><input type="text" name="Detalles" value="<?php echo $alm->__GET('Detalles'); ?>" style="width:100%;" /></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>







                </div>
            </div>
        </div>




        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. Laboratorio Niño</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">

                    <form action="?action=<?php echo $alm->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                    
                    <table style="width:500px;">
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <td><input type="text" name="Nombre" value="<?php echo $alm->__GET('Nombre'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Apellido</th>
                            <td><input type="text" name="Apellido" value="<?php echo $alm->__GET('Apellido'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Sexo</th>
                            <td>
                                <select name="Sexo" style="width:100%;">
                                    <option value="1" <?php echo $alm->__GET('Sexo') == 1 ? 'selected' : ''; ?>>Masculino</option>
                                    <option value="2" <?php echo $alm->__GET('Sexo') == 2 ? 'selected' : ''; ?>>Femenino</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Fecha</th>
                            <td><input type="date" name="FechaNacimiento" value="<?php echo $alm->__GET('FechaNacimiento'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Direccion</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Jardin Infantil</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Telefono</th>
                            <td><input type="tel" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Nivel</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Informante</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Parentesco</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Motivo de Consulta</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>
                        

                        <tr>
                            <th style="text-align:left;">Fecha de Consulta</th>
                            <td><input type="date" style="width:100%;" /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Antecedentes Familiares</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>



                        <th style="text-align:left;">Medico</th>
                            <td><input type="text" name="Medico" value="<?php echo $alm->__GET('Medico'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Detalles</th>
                            <td><input type="text" name="Detalles" style="width:100%;height=200" /></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>




                </div>
            </div>
        </div>


         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">3. Laboratorio Adulto</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">

                    <form action="?action=<?php echo $alm->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                    
                    <table style="width:500px;">
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <td><input type="text" name="Nombre" value="<?php echo $alm->__GET('Nombre'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Apellido</th>
                            <td><input type="text" name="Apellido" value="<?php echo $alm->__GET('Apellido'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Sexo</th>
                            <td>
                                <select name="Sexo" style="width:100%;">
                                    <option value="1" <?php echo $alm->__GET('Sexo') == 1 ? 'selected' : ''; ?>>Masculino</option>
                                    <option value="2" <?php echo $alm->__GET('Sexo') == 2 ? 'selected' : ''; ?>>Femenino</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Fecha</th>
                            <td><input type="date" name="FechaNacimiento" value="<?php echo $alm->__GET('FechaNacimiento'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Direccion</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>

                        
                        <tr>
                            <th style="text-align:left;">Telefono</th>
                            <td><input type="tel" style="width:100%;" /></td>
                        </tr>
                        
                        <tr>
                            <th style="text-align:left;">Motivo de Consulta</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>
                        

                        <tr>
                            <th style="text-align:left;">Fecha de Consulta</th>
                            <td><input type="date" style="width:100%;" /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Antecedentes Previos</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Antecedentes Morbidos</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Grupo Familiar</th>
                            <td><input type="text" style="width:100%;" /></td>
                        </tr>



                        <th style="text-align:left;">Medico</th>
                            <td><input type="text" name="Medico" value="<?php echo $alm->__GET('Medico'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Detalles</th>
                            <td><input type="text" name="Detalles" style="width:100%;height=200" /></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>




                </div>
            </div>


    </div>
</div>

            
        </div>

    </body>
</html>