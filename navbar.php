<!-- Navbar -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<link href="/ProgWebInfSys/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="http://code.jquery.com/jquery.js"></script>
	<script language="JavaScript" src="../js/bootstrap.js"></script>
</head>
<div class="row-fluid">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<a class="brand" href="<?php echo  str_replace("\\", "/", dirname($_SERVER['SCRIPT_NAME']));?>/index.php">Gruppe 1</a>
			<ul class="nav">
				<li><a href="<?php echo  str_replace("\\", "/", dirname($_SERVER['SCRIPT_NAME']));?>/tasks.php">Aufgaben</a></li>
			</ul>
		</div>
	</div>
</div>