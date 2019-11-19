<?php

include('conexion.php');
$id = 0;
if(!empty($_GET['idb2']))
    $id = $_REQUEST['idb2'];

if (!empty($_POST))
{
    //asigna valores
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $des = $_POST['des'];
    $prov = $_POST['prov'];
    $vru = $_POST['vru'];
    $cant = $_POST['cant'];
    // conexion sql

    $consul = " UPDATE aseo set nom='$nom', des='$des', prov='$prov', vru='$vru', cant='$cant' WHERE id='$id'";
    $conexion->query($consul);
    $conexion->close();
    header("location: listar3.php");
}
else 
{
    $sql = " SELECT * FROM aseo WHERE id='$id'";
    $consulta = $conexion->query($sql);

    foreach ($consulta as $datos) 
    {
        $id = $datos['id'];
        $nom = $datos['nom'];
        $des = $datos['des'];
        $prov = $datos['prov'];
        $vru = $datos['vru'];
        $cant = $datos['cant'];
    }
    $conexion->close();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<link rel="stylesheet" href="css/estilos.css">
	<!-- set your website favicon -->
	<link href="favicon.html" rel="icon">	
	
	<!-- Bootstrap Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Font Awesome Stylesheets -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Template Main Stylesheets -->
	<link rel="stylesheet" href="css/contact-form.css" type="text/css">	
    <title>Document</title>
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


		<!-- Hamburger -->
		
		
	</header>

	<!-- Menu -->



	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/home_background.jpg)"></div>
		</div>
		
		<div class="home_title">
			<h2>Actualización de productos.</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".icon_boxes">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>


<div class="container">
     
     <div class="form-group">
         <div class="row">
             <h3>Actualizar producto con Id = <?php echo $id; ?></h3>
         </div>
  
         <form class="form-horizontal" action="actualizar3.php" method="POST">
           <div class="control-group">
             <label class="control-label">Nombre</label>
             <div class="controls">
                 <input name="nom" type="text"  placeholder="" value="<?php echo $nom;?>">
                 <input type="hidden" name="id" value="<?php echo $id;?>">
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Descripción</label>
             <div class="controls">
                 <input name="des" type="text"  placeholder="" value="<?php echo $des;?>">
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Proveedor</label>
             <div class="controls">
                 <input name="prov" type="text"  placeholder="" value="<?php echo $prov;?>">
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Valor unitario</label>
             <div class="controls">
                 <input name="vru" type="number"  placeholder="" value="<?php echo $vru;?>">
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Cantidad</label>
             <div class="controls">
                 <input name="cant" type="number"  value="<?php echo $cant;?>">
             </div>
           </div>
             <br>
           <div class="form-actions">
               <button type="submit" class="btn btn-success">Actualizar</button>
               <a class="btn btn-primary" href="listar3.php">Regresar</a>
             </div>
         </form>
     </div>
      
</div>
</body>
</html>