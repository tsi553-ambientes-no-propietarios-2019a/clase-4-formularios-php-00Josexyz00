<!--
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre.
 El arreglo debe tener el formato
 [
    'juan' => 'contrasena_segura'
 ]
 Crear un formulario que permita ingresar el nombre de usuario y la contraseña. 
 Al enviar el formulario se debe validar que la combinación de nombre de usuario y contraseña existan en el arreglo.
 Si los datos no son correctos imprimir un mensaje de error.
 Si los datos son correctos debe redirigir a otra página bienvenido.php que debe imprimir el mensaje "Bienvendo JUAN". (con el nombre de usuario en mayúsculas)
 */
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Ejercicio 3 Formulario</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>




	<?php 

		$arreglo= array('Usuario 1:'=>array('Nombre' => "Jose",'contraseña'=>'jose'),
						'Usuario 2:'=>array	('Nombre' => "Josselyn",'contraseña'=>'joss'),
						'Usuario 3:'=>array	('Nombre' => "Edy",'contraseña'=>'edy'));


		foreach($arreglo as $usuario => $info){
			echo '<strong>'.$usuario.'</strong><br>';
			foreach($info as $content){
				echo $content.'<br>';
			}

		}

		
		
	 ?>
	
</body>
</html>