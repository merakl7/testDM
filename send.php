<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style>
		body {
			background: #FFF5EE;
			color: #000000;
		}
	</style>


<?php




	$login = $_POST['login'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$tel = $_POST ['tel'];
	

	$login = htmlspecialchars ($login);
	$pass = htmlspecialchars ($pass);
	$email = htmlspecialchars ($email);
	$tel = htmlspecialchars ($tel);

	$login = urldecode ($login);
	$pass = urldecode ($pass);
	$email = urldecode ($email);
	$tel = urldecode ($tel);

	$login = trim ($login);
	$pass = trim ($pass);
	$email = trim ($email);
	$tel = trim ($tel);

/*include('includes/db.php');
$connection = mysqli_connect('127.0.0.1', 'root', '', 'test');
	if($connection == false)
	{
		echo 'не удалось подключиться к базе данных <br>';
		echo mysqli_connect_error();
			
	}


$sql = "INSERT INTO 'data' (login, pass, email, tel )
	VALUES ($login, $pass, $email, $tel)";
$result = mysqli_query($connection, $sql);

if ($result) {
	die('не добавлено' . mysqli_error());

    } echo "Успешно! <br>";
*/
echo "Ваше имя: $login <br> ";
echo "Ваш адрес: $pass <br>";
echo "Ваш емейл: $email <br>";
echo "Ваш телефон $tel <br>";
	



?>
</body>
</html>