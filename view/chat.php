<?php 

session_start();

include_once '../model/Conexao.class.php';
include_once '../model/Chat.class.php';
include_once '../model/Users.class.php';

$chat = new Chat();
$users = new Users();

?>
<?php foreach($chat->getMessages() as $message): ?>

					<div class="chat-data">
						
						<span class="span03"><?php echo date("H:m:s", strtotime($message['hour'])); ?></span>

						<span class="span01">
							<img src="assets/img/bot.png" class="imgbot">
							<?php echo $message['name']; ?>:
						</span><br>

						<span><?php echo $message['message']; ?></span>

					</div>
<?php endforeach; ?>