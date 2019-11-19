<!DOCTYPE html>
<html lang="en">
<head>
<title>Tienda el centro RD</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<link rel="stylesheet" href="css/estilos.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/estilobtn.css">
	<!-- set your website favicon -->
	<link href="favicon.html" rel="icon">	
	
	<!-- Bootstrap Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Font Awesome Stylesheets -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Template Main Stylesheets -->
	<link rel="stylesheet" href="css/contact-form.css" type="text/css">	
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header d-flex flex-row justify-content-end align-items-center trans_200">
		
		<!-- Logo -->
		<div class="logo mr-auto">
			<a href="#">Tienda<span>RD</span></a>
		</div>

		<!-- Navigation -->
		<nav class="navegacion">
				<ul class="menu">
						<li class="active"><a href="principal.html">Inicio</a></li>
						<li><a href="#">Registrar productos</a>
						<ul class="submenu">
							<li><a href="registrar1.html">Alimentos para animales</a></li>
							<li><a href="registrar2.html">Panadería</a></li>
							<li><a href="registrar3.html">Aseo personal</a></li>
						</ul>
						</li>
						<li><a href="#">Listar productos</a>
							<ul class="submenu">
									<li><a href="listar1.php">Alimentos para animales</a></li>
									<li><a href="listar2.php">Panadería</a></li>
									<li><a href="listar3.php">Aseo personal</a></li>
								</ul>
						</li>
						<li><a href="login.html">Salir del sistema</a></li>
		
					</ul>

			
		
		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
			<i class="fas fa-bars trans_200"></i>
		</div>
		
	</header>

	<!-- Menu -->



	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/home_background.jpg)"></div>
		</div>
		
		<div class="home_title">
			<h2>Lista de productos de aseo personal</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".icon_boxes">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>
	<div class="d-flex" id="wrapper">
 <!-- Sidebar -->

    <div style="margin:40px;">
    <table class="table">
        <thead>
            <tr class="table-warning">
                <th scope="col">No.</th>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Valor unitario</th>
				<th scope="col">Cantidad</th>
				<th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('conexion.php');
                $i=1;
                $consulta=$conexion->query("Select * from aseo");
                foreach($consulta as $datos){
            ?>
            <tr class="table-primary">
                <td><?php echo $i ?></td>
                <td><?php echo $datos['id'] ?></td>
                <td><?php echo $datos['nom'] ?></td>
                <td><?php echo $datos['des'] ?></td>
                <td><?php echo $datos['prov'] ?></td>
                <td><?php echo $datos['vru'] ?></td>
                <td><?php echo $datos['cant'] ?></td>
                <td width=240px>
                    <?php 
                        echo "<div class='btn-group'><div class='btn-group mr-2'><form action='borrar3.php' method='get'><input type='hidden' name='idb2' value='".$datos['id']."'><input type='submit' class='btn btn-danger' value='Borrar'></form></div>";
                        echo "<div class='btn-group mr-2'><form action='actualizar3.php' method='get'><input type='hidden' name='idb2' value='".$datos['id']."'><input type='submit' class='btn btn-success' value='Actualizar'></form></div></div>";
                    ?>
                </td>
            </tr>

                    
            <?php
                $i++;
                }
                $conexion->close();
            ?>
        </tbody>
    </table>
    
 </div>
</body>