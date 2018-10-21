<?php  

session_start();

include_once '../model/Conexao.class.php';
include_once '../model/Users.class.php';

$users = new Users();

$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);

if(isset($_POST['email']) AND !empty($_POST['email'])) {
	$users->setUser($name, $email, $password);
}

echo "<script> alert('Sucesso! Faça agora o seu Login'); </script>";
echo "<script> window.location.href = '../login.php' </script>";

?>