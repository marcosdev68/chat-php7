<?php  

session_start();

include_once '../model/Conexao.class.php';
include_once '../model/Users.class.php';

$users = new Users();

$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);

if(isset($_POST['email']) && !empty($_POST['email'])) {
	$users->setLogged($email, $password);
}

?>