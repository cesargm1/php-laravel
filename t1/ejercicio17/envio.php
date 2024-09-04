<?php

// Los metodos post y get reciben un array

if(isset($_REQUEST['submit'])) {
$name = $_REQUEST ["name"];

print "<p>tu nombre es $name</p>";

$modulos = $_REQUEST ['modulos'];

foreach ($modulos as $modulo) {
    print ("<p>cursas los modulos de $modulo</p>");

    }

$send = $_REQUEST ['submit'];

} else { ?>
    <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Formulario con php</title>
	</head>
	<body>

		<!-- 
			action donde se enviaran los datos del formulario 
			metod el metodo con el que se enviaran los datos existen 2 POST y GET		
		-->
		<form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<label>
				Nombre
				<input type="text" name="name" />
			</label>

			<br />

			<p>Ciclos que cursa:</p>

			<label>
				Desarrollo web en entorno servidor
				<input
					type="checkbox"
					name="modulos[]"
					value="Desarrollo web en entorno servidor"
				/>
			</label>

			<br />

			<label>
				Desarrollo web en entorno cliente

				<!-- 
				 Si tenemos 2 nombres iguales o mas  en un input donde pueda haber mas de una valor podemos usar [] para indicar que es un array 
				 y recorreremos los input con el mismo nombre con foreach por php en este ejemplo es en checkbox con el nombre de modulos				
				-->
				<input
					type="checkbox"
					name="modulos[]"
					value="Desarrollo web en entorno cliente"
				/>
			</label>

			<br />

			<button type="submit" name="submit">enviar</button>
			<button type="reset">restablecer</button>
		</form>
        <?php
}
        ?>
    	</body>
</html>



