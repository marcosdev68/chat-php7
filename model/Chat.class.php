<?php  

class Chat extends Conexao {

	public function getMessages() {
		$pdo = parent::get_instance();
		$sql = "SELECT * FROM tb_chat ORDER BY id DESC";
		$sql = $pdo->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		}

	}

	public function sendMessage($name, $message) {
		$pdo = parent::get_instance();
		$sql = "INSERT INTO tb_chat (name, message, hour) VALUES (:name, :message, NOW())";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":name", $_SESSION['user']['name']);
		$sql->bindValue(":message", $message);
		$sql->execute();
	}

}

?>