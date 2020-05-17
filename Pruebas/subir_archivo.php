<? 
//implementar la funcion de progrsbar para mostrar el progreso en la pizarra
?>
<!DOCTYPE html>
<html>
<head>
	<title>Subir archivo</title>
	<link rel="stylesheet" href="styles.css"/>
</head>
<body>
<div class="principal">
<h1>Subir archivo</h1>
	<form action="#" method="post" enctype="multipart/form-data" id="form_subir">
	<div class="form-1-2">
		<input type="file" name="archivo">
		<br><br>
		</div>
		<div class="barra">
			<div class="barra-azul" id="barra_estado">
				<span></span>
			</div>
		</div>
		<div class="acciones">
		<input type="submit" class="bnt" value="Enviar">
		<input type="button" class="cancelar" id="cancelar" value="Cancelar">
		</div>
	</form>
	</div>
</body>
<script src="main.js"></script>
</html>