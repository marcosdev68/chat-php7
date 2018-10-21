<?php  

session_start();

include_once '../model/Conexao.class.php';
include_once '../model/Chat.class.php';

$chat = new Chat();

$name = addslashes($_POST['name']);
$message = addslashes($_POST['message']);

if(isset($_POST['message']) && !empty($_POST['message'])) {
	$chat->sendMessage($name, $message);
}

header("Location: ../index.php");

?>