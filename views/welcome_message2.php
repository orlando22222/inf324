<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenido</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<h1>Ejemplo F</h1>
		<h2>INF324</h2>
		un buen ejemplo <br>
		<?php 
			echo "Nombre: ".$Nombre."</br>";
			echo "Apellido: ".$Apellido."</br>";
			echo "Materia: ".$Materia."</br>";
		?>
		<table>
			<tr>
				<td>Matricula</td>
				<td>Usuario</td>
				<td>Correo</td>
				<td>Contraseña</td>
				<td>Acciones</td>
			</tr>
				<?php 
					//print_r($alumnos);
					foreach($estudiante as $fila)
					{
				?>
			<tr>
					<?php 
						echo "<td>".$fila['matricula']."</td>";
						echo "<td>".$fila['usuario']."</td>";
						echo "<td>".$fila['email']."</td>";
						echo "<td>".$fila['contraseña']."</td>";
						echo "<td>";
            			echo "<a href='http://localhost/codeign3/index.php/welcome/eliminar/".$fila["matricula"]."'>Eliminar ";
            			echo "<a href='http://localhost/codeign3/index.php/welcome/modificar/".$fila["matricula"]."'>Modificar";
            			echo "</td>";
					?>
			</tr>
				<?php 
					}
				?>
		</table>
		<a href="http://localhost/codeign3/index.php/welcome/agregar">Adicionar</a>  
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
