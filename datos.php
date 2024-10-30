<?php
session_start();

// Simula la asignación del rol para pruebas. (En producción, esto se configura al iniciar sesión)
$_SESSION['role'] = 'usuario'; // Cambia a 'administrador' para probar como admin

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Yucatán: Un paraíso por descubrir</title>
	<link rel="stylesheet" href="styles.css"> <!-- Incluye el archivo CSS externo -->
</head>
<body>
	<?php include 'header.php'; ?> <!-- Incluye el header desde un archivo externo -->

	<!-- Contenidos dinámicos según el rol -->
	<div class="content place" id="inicio">
		<div>
			<h2>¡Bienvenido a Yucatán!</h2>
			<p>Descubre la belleza y la historia de Yucatán.</p>
		</div>
	</div>

	<div class="content place" id="izamal" style="display: none;">
		<h2>Un poco de Izamal</h2>
		<p>Descripción de Izamal...</p>
	</div>

	<div class="content place" id="motul" style="display: none;">
		<h2>Un poco de Motul</h2>
		<p>Descripción de Motul...</p>
	</div>

	<?php if ($_SESSION['role'] == 'administrador'): ?>
		<div class="content place" id="admin" style="display: none;">
			<h2>Panel de Administración</h2>
			<p>Aquí puedes gestionar el contenido y usuarios.</p>
		</div>
	<?php endif; ?>

	<script src="script.js"></script> <!-- Incluye el archivo JavaScript externo -->
</body>
</html>

