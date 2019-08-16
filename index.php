<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form enctype="multipart/form-data" method="post" action="process.php">
		
		<label>Senha</label>
		<input type="text" name="password"> 

		<br>

		<label>Arquivo</label>
		<input type="file" name="file">

		<br>

		<input type="submit" name="enviar">

		<br>

		<?php
			session_start();

			if ($_SESSION["msg"]) {
				echo $_SESSION["msg"];
				$_SESSION["msg"] = null;
			}
		?>
	</form>

</body>
</html>