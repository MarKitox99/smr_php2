<?php
session_start();
if(isset($_GET['logout'])){
	session_destroy();
	session_start();
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<head>
<style>
	b{
		color:red;
	}
	h1{
		
	}
	body{
		font-family: Verdana;
		text-align: center;
	}
	input{
		margin: 5px;
		borde-radius: 30px;
		padding: 10px;
		line-height: 2em;
	}
	button{
		margin: 5px;
		borde-radius: 30px;
		padding: 10px;
		line-height: 2em;
	}
	.error{
			background-color: pink;
	}
</style>
<title>Login</title>
</head>
<body>

<h1>Login</h1>

<?php
if(!isset($_SESSION['id_user'])){
	if(isset($_POST['password'])){
			if($_POST['password']='1234' and $_POST['Usuario']=='mvillanuevac@educantabria.es' ){
				$_SESSION['id_user']=1;
			}
			else echo '<div class="error">Contraseña incorrecta</div>';
	}
}


if(!isset($_SESSION['id_user'])){
			echo'<form method="post" class=formulario>'
				.'<input name="Usuario" type="email" placeholder="Usuario"/>'
				.'<input name="password" type="password" placeholder="contraseña"/>'
				.'<button>Envia usuario y contraseña</button>'
				.'</form>';
}
if(isset($_SESSION['id_user'])){
	echo '<div><img src="IMG_0911.jpg">';
	echo '<a href="?logout=1">Cerrar sesión</a>';
}	

?>

</body>
</html>