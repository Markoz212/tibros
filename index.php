<!DOCTYPE html>
<html>
<head>
	<title>TIBROS</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
	.embed-container {
		position: relative;
		padding-bottom: 56.25%;
		height: 0;
		overflow: hidden;
	}
	.embed-container iframe {
		position: absolute;
		top:0;
		left: 0;
		width: 100%;
		height: 100%;
	}
	</style>
	</head>
<body class="container-fluid bg-secondary">
	<iframe id="header" src="header.php" height="150px" width="100%" frameBorder="0" scrolling="no" ></iframe>
	<div class="embed-container">
	<iframe id="producto" src="producto.php"  frameBorder="0" scrolling="yes" allowfullscreen></iframe>
</div>
</body>
</html>