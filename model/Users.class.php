<?php  

class Users extends Conexao {

	public function setUser($name, $email, $password) {
		$pdo = parent::get_instance();
		$sql = "INSERT INTO tb_users (name, email, password, hour) VALUES (:name, :email, :password, NOW())";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":name", $name);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":password", sha1(md5($password)));
		$sql->execute();
	}

	public function setLogged($email, $password) {
		$pdo = parent::get_instance();
		$sql = "SELECT * FROM tb_users WHERE email = :email AND password = :password";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":password", sha1(md5($password)));
		$sql->execute();

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			$_SESSION['user'] = $sql;

			header("Location: ../index.php?login_success");

		} else {

			echo "<script> alert('E-mail e/ou senha incorretos.'); </script>";
			echo "<script> window.location.href = '../login.php' </script>";
			exit;

		}

	}

	public function logout() {
		unset($_SESSION['user']);
	}

}

?>