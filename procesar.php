<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Formulario 1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
		<?php
			$nombre = $_GET["nombre"];
			$apellido = $_GET["apellido"];
			$email = $_GET["email"];
			$nacimiento = $_GET["nacimiento"];
			$genero = $_GET["genero"];
			$acepto = isset($_GET["acepto"]);
			switch ($genero){
				case 'femenino':
					echo 'Sra/Srta. ';
				break;
				case 'masculino':
					echo 'Sr. ';
				break;
				default:
				break;
			}
			echo $nombre . ' '. $apellido. ', hemos registrado su inscripción con el email '. $email. '<br><br>';
			if($acepto){
				echo 'PD: Le avisaremos cuando llegue el invierno.';
			}
			
		
		?>
        
        <script src="js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        
    </body>
</html>





