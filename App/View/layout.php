<?php 
	session_start();

	if (isset($_SESSION['id_user']) || isset($_SESSION['nome_user']))
		require_once 'header.php';
	elseif (SON\Init\Bootstrap::getURL()=='/' || SON\Init\Bootstrap::getURL()=='/entrar' || SON\Init\Bootstrap::getURL()=='/registrar') {
		require_once 'header-standart.php';
	}
	else{
		header("location:https://".$_SERVER['SERVER_NAME']);
	}	
		
 ?>
	

<div class="container">
	<?php $this->content(); ?>
</div>
</body>
</html>