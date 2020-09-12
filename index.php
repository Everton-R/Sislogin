<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sistema de E-mail</title>
	<!-- Layout com bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top: 100px;">
			<div class="col-lg-8 offset-lg-2 jumbotron">
				<form action="enviar.php" method="POST">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control">
					</div>
					<div class="form-group">
						<label>E-mail</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Assunto</label>
						<input type="assunto" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Mensagem</label>
						<textarea type="mensagem" class="form-control" rows="4"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>