<?php

include('conexion.php');
$id = 0;
if(!empty($_GET['idb2']))
{
    $id = $_REQUEST['idb2'];

}
if (!empty($_POST))
{
  
    
    $id = $_POST['id'];
  

    $sql = " DELETE FROM aseo WHERE id = '$id'";

    $conexion->query($sql);
    $res=$conexion->close();
    header("location: listar3.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
			<h2>Eliminar productos.</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".icon_boxes">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>


    <div class="conteiner">
        <div class="span10 offset1">
            <div class="row">
                <h3>Eliminar registro del producto con ID: <?php  echo $id;?></h3>
            </div>
            <div>
                <form class="form-horizontal" action="borrar3.php" method="POST" >
                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"/>
                    <p class="alert alert-error"> ¿Estas seguro que deseas eliminar este producto?</p>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-danger">Si</button>
                        <a class="btn btn-success" href="listar3.php">No</a>
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>
</html>