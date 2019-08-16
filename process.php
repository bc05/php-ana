<?php

	if (empty($_POST['password']) || $_POST['password'] != 'ana') {
		$_SESSION["msg"] = 'senha inválida';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

	$name = md5(rand(0,100)).'-'.basename($_FILES['file']['name']);
	$uploadfile = 'uploads/'.$name;

	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);

	// Configuramos os headers que serão enviados para o browser
	header('Content-Description: File Transfer');
	header('Content-Disposition: attachment; filename="'.$name.'"');
	header('Content-Type: application/octet-stream');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: ' . filesize($name));
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Pragma: public');
	header('Expires: 0');
	readfile($name);
	
	exit();
?>