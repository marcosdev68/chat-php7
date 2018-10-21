<?php  

session_start();

include_once '../model/Conexao.class.php';
include_once '../model/Users.class.php';

$users = new Users();

$users->logout();

header("Location: ../login.php?session_ending_success");