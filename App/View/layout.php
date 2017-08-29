<?php 
	session_start();

	if (isset($_SESSION['id_user']) || isset($_SESSION['nome_user']))
		require_once 'header.php';
	else
		require_once 'header-standart.php';
 ?>

<div class="container">
	<?php $this->content(); ?>
</div>
</body>
</html>