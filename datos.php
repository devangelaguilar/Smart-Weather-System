<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Muestreo de datos</title>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  		<script src="https://kit.fontawesome.com/9907ecb488.js"></script>
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
        <nav class="light-blue darken-3" role="navigation">
            <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo"><img src="img/logo_SWS.png" alt=""></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.html" class="white-text">Inicio</a></li>
                <li><a href="us.html" class="white-text">Nosotros</a></li>
            </ul>

            <ul id="nav-mobile" class="light-blue darken-3 sidenav">
                <li><a class="white-text">Menu</a></li>
                <br>
                <li><a class="white-text" href="index.html">Inicio</a></li>
                <li><a href="us.html" class="white-text">Nosotros</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
		<div class="container">
			<?php
			// Connection info. file
			include 'conn.php';	
			
			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
				echo "<div class='row'>					
						<div class='col s12 m7'>
						<div class='card horizontal'>
							<div class='card-stacked'>
								<div class='card-content'>
									<span class='card-title'>Bienvenido</span>
									<p>Sistema Núm: 1</p>
								</div>
							</div>
						</div>
						</div>
					</div>";

				echo "<table class='table centered highlight'>
					<thead>
						<tr>
							<th class='th-color'>Tiempo</th>
							<th class='th-color'>Temperatura</th>
							<th class='th-color'>Humedad</th>
						</tr>
					<thead>
					<tbody>";
				$pet = "SELECT * FROM valores ORDER BY ID DESC LIMIT 15";
				$res = mysqli_query($conn, $pet);
				while($mostrar = mysqli_fetch_array($res)){
					echo "<tr>
						<td>$mostrar[1]</td>
						<td>$mostrar[2]</td>
						<td>$mostrar[3]</td>
						</tr>";
					}
				echo "</tbody>
					</table>";
			?>
        </div>
        <footer class="page-footer teal">
        <div class="container">
        <div class="row">
            <div class="col l6 s12">
            <h5 class="white-text">Coco Tech</h5>
            <p class="grey-text text-lighten-4">Somos un grupo de cuatro estudiantes con ganas de aprender y llevar adelante nuestros proyectos conjuntos.</p>


            </div>
            <div class="col l3 s12">
            <h5 class="white-text">Connect</h5>
            <ul>
                <li><a class="white-text" href="#!">Karen</a></li>
                <li><a class="white-text" href="https://twitter.com/checolin00p2">Sergio's Twitter</a></li>
                <li><a class="white-text" href="https://twitter.com/KevinJessGonzl1">Kevin's Twitter</a></li>
                <li><a class="white-text" href="https://twitter.com/devangelaguilar">Ángel Aguilar's Twitter</a></li>
            </ul>
            </div>
            <!--<div class="col l3 s12">
            <h5 class="white-text">Extras</h5>
            <ul>
                <li><a class="white-text" href="#!">Link 1</a></li>
                <li><a class="white-text" href="#!">Link 2</a></li>
                <li><a class="white-text" href="#!">Link 3</a></li>
                <li><a class="white-text" href="#!">Link 4</a></li>
            </ul>
            </div>
        </div>-->
        </div>
        <div class="footer-copyright">
        <div class="container">
            Made with <i class="fas fa-heart"></i> by <a class="brown-text text-lighten-3" href="#">Coco Tech Solutions</a>
        </div>
        </div>
    </footer>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
  		<script src="js/init.js"></script>
	</body>
</html>