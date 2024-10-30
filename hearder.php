<header class="header">
	<img src="Images/Logo.jpeg" alt="Logotipo" style="width: 80px;">
	<h1>Yucatán: Un paraíso por descubrir</h1>
	<nav>
		<ul>
			<li><a href="#" onclick="showPlace('inicio')">Inicio</a></li>
			<li><a href="#" onclick="showPlace('izamal')">Izamal</a></li>
			<li><a href="#" onclick="showPlace('motul')">Motul</a></li>
			<?php if ($_SESSION['role'] == 'administrador'): ?>
				<li><a href="#" onclick="showPlace('admin')">Panel de Administración</a></li>
			<?php endif; ?>
		</ul>
	</nav>
</header>
