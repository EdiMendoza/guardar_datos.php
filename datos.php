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
			<p>Dirección: (C. 29, Sta Rita, 97702 Tizimín, Yuc.)</p>
			<p>Contacto: (986 863 4279)</p>
		</div>
		<div>
			<h2>Galería de lugares</h2>
			<img src="Images/YUCATAN-INTERIOR.jpg" alt="Lugar 1">
			<img src="Images/Colap de imagenes.jpg" alt="Lugar 2">
		</div>
	</div>

	<div class="content place" id="izamal" style="display: none;">
		<h2>Un poco de Izamal</h2>
		<img src="Images/Izamal1.jpg" alt="Imagen de Izamal">
		<p>Izamal es una hermosa ciudad colonial fundada a mediados del siglo XVI sobre los vestigios
            de una antigua ciudad maya. A este lugar se le conoce como "Ciudad de los Cerros",
            rememorando las pirámides cubiertas que se encontraban ahí a la llegada de los españoles,
            así como "La Ciudad de las Tres Culturas" pues en ella se combinan rasgos de su pasado
            prehispánico, del período colonial y de la época actual.
            Izamal fue un importante centro religioso maya y hoy en día puedes visitar los sitios
            arqueológicos con cuatro grandes pirámides que dominan el centro del pueblo. Difruta la
            vista desde la cima de la pirámide Kinich Kak, construída durante el periodo clásico
            temprano, y dedicada al dios del sol de los mayas.</p>
            
            <h3>¿Qué atractivos hay?</h3>
		<ul>
			<li>Comer en el mercado municipal</li>
			<li>Ex Convento de San Antonio de Padua</li>
			<li>Haciendas Sacnicte y San Antonio Chalante</li>
			<li>Paseo en calesa o en bicicleta</li>
			<li>Temax, con retablos en el Templo de San Miguel Arcángel</li>
			<li>Templo de la Purísima Concepción</li>
			<li>Templo de la Virgen de la Candelaria</li>
			<li>Visitar el Centro Cultural</li>
			<li>Virgen de Izamal</li>
			<li>Zona arqueológica, Templo de Kinich Kak Moo</li>
		</ul>
		<button onclick="showPlace('inicio')">Volver al inicio</button>
	</div>

	<div class="content place" id="motul" style="display: none;">
		<h2>Un poco de Motul</h2>
		<img src="Images/Motull.jpeg" alt="Imagen de Motul">
		<p>Su pasado maya reverbera en el orgullo que su gente siente por la cultura y la lengua local.
            Además, esta riqueza cultural se complementa con las joyas que permanecen del periodo
            colonial, entre las que se encuentran una de las iglesias más antiguas de la península.
            Sus ex haciendas cuentan historias de un glorioso y próspero pasado. Recorrerlas es volver
            a vivir una época de oro para el pueblo en el norte de Yucatán.</p>
            
            <h3>¿Qué atractivos hay?</h3>
		<ul>
			<li>Comer en el mercado municipal</li>
			<li>Ex Convento de San Antonio de Padua</li>
			<li>Haciendas Sacnicte y San Antonio Chalante</li>
		</ul>
		<button onclick="showPlace('inicio')">Volver al inicio</button>
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


