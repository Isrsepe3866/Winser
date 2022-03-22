<!DOCTYPE html>
<html>
<head>
	<title>Formulario UTT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container p-5" >
	<div class="row p-3 m-3" >
		<div class="col-12 col-sm-2 col-md-4 ">
		</div >

		<div class="col-12 col-sm-6 col-md-4 m-2 p-4" style="background:aqua ">
    		<form method="post">

    		<h1>¡Inscribete ya!</h1>
    		<input type="text" name="name" placeholder="Nombre completo">
    		<input type="email" name="email" placeholder="Email">
    		<input type="submit" name="register">
   			</form>
		</div>
		<div class="col-12 col-sm-2 col-md-4 ">
		</div >
	</div >
	<div>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>