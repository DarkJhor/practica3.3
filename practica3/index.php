<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VALIDACION DE CLIENTES</title>
	<!-- CDN DE DISEÑO WEB -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col s6 m6 l6">
			<div class="card">
				<div class="card-title">
					<caption>REGISTRO DE CLIENTE</caption>
				</div>
				<div class="card-content">
					<form action="ins_cliente.php" method="POST">
						<input type="number" name="dni" value="" placeholder="Ingrese su Dni">
						<button type="submit">Registrar</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>



</body>
</html>