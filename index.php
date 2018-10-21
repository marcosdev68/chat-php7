<?php 

session_start();

if(isset($_SESSION['user'])) {

include_once 'model/Conexao.class.php';
include_once 'model/Chat.class.php';
include_once 'model/Users.class.php';

$chat = new Chat();
$users = new Users();

?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
    	<link rel="shortcut icon" href="assets/img/icon.png"> 
        <title>BlueChat - Home</title>
        <!-- Bootstrap 4 -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css">
		<!-- CSS3 -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- GoogleFonts - OpenSans -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<!-- Fontawesome 5.0-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		
</head>
<body>

<div class="container">

	<div class="content">
		<div class="chat-box divScroll">
			<div class="chat" id="chat">
				
				<!-- Locale of Chat -->

			</div>
		</div>

	<!-- Form of Message -->

	<br><form method="POST" action="controller/chatController.php">
		<div class="container">
			<div class="form-row">
				
				<div class="col-md-12">
					<input class="form-control" type="hidden" name="name" value="<?php $_SESSION['user']['name']; ?>">
				</div>

				<div class="col-md-12">
					<textarea class="form-control" name="message" required placeholder="Sua Mensagem :D"></textarea><br>
				</div>

				<div class="col-md-10">
					<button class="send" name="send">
						Enviar <i class="fa fa-comment"></i>
					</button>
				</div>

				<div class="col-md-2">
					<a href="controller/logout.php" class="btn btn-info btn-block" style="color: #FFF;">
						<i class="fa fa-frown"></i> Sair
					</a>
				</div>


			</div>
		</div>
	</div>
</form>

</div>

<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/sweetalert.min.js"></script>

</body>
</html>

<?php  

} else {
	header("Location: login.php?access_denied");
}

?>