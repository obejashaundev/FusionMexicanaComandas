<?php
	include('database.php');
	if (isset($_POST['user'])) {
		$user = $_POST['user'];
		$password = $_POST['password'];
        echo $user;
        echo $password;
        $sql="SELECT id_cargo, nombre, descripcion FROM cargos;"
    }
?>
