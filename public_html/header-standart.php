<!DOCTYPE html>
<html lang="pt-br">
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Agenda</title>
	<link href=<?php echo "https://".$_SERVER['SERVER_NAME']."/img/agenda-icone.ico"; ?> rel="shortcut icon"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/glyphicons-halflings-regular.*">


</head>
<body>

<div class="container">

	<nav class="navbar navbar-inverse">

	  	<div class="container-fluid">
	    	<div class="navbar-header">
	     		<a class="navbar-brand" href="https://carsio.000webhostapp.com/contato">
	       			Agenda Virtual
	      		</a>
	    	</div>


	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    		<ul class="nav navbar-nav navbar navbar-right">
	    			<li>
	    				<div class="btn-group navbar-btn" role="group" aria-label="...">

	    					<button class="btn btn-default" onclick="location.href='<?php echo "https://".$_SERVER['SERVER_NAME']."/entrar"; ?>'">
	    						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
	    						Entrar
	    					</button>

	    					<button class="btn btn-default" onclick="location.href='<?php echo "https://".$_SERVER['SERVER_NAME']."/registar"; ?>'">
	    						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
	    						Registrar
	    					</button>
	    					
	    				</div>
	    			</li>
	    			</ul>
		    </div>
	 	</div>   
	</nav>
</div>