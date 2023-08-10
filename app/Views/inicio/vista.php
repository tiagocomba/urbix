<!-- 
                                                         
,--. ,--.                ,--------.            ,--.      
|  .'   / ,---. ,--. ,--.'--.  .--',---.  ,---.|  ,---.  
|  .   ' | .-. : \  '  /    |  |  | .-. :| .--'|  .-.  | 
|  |\   \\   --.  \   '     |  |  \   --.\ `--.|  | |  | 
`--' '--' `----'.-'  /      `--'   `----' `---'`--' `--' 
                `---'                                     -->

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=devide-width,initial-scale=1.0">
	<title>KeyTech</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

<!-- Navbar section start here -->

	<header class="header">
		<a href="#" class="logo">KeyTech</a>

		<nav class="navbar">
			<a href="#home" class="active">Inicio</a>
			<a href="#about">Acerca</a>
			<a href="#catalogo">Catalogo</a>
			<a href="#contacto">Contacto</a>
            <a href="#contact">Users</a>
			<span class="active-nav"></span>
		</nav>
		
	</header>

<!-- Navbar section ends here -->

<!-- Inicio section start here -->

	<section class="home show-animate" id="home">

		<div class="home-content">

			<h1>Bienvenido👋, a <span>KeyTech</span></h1>

			<div class="text-animate">

			<h3>!Las Mejores Marcas!</h3>

			</div>
			
		</div>

        <div class="home-img">

        <img src="img/productos/teclado.png" width= 500rem; height= 500rem; alt="kit.png">

        </div>
       
		<div class="home-sci">

			<a href="#"><i class='bx bxl-github'></i></a>
			<a href="#"><i class='bx bxl-discord-alt' ></i></a>
			<a href="#"><i class='bx bxl-linkedin-square' ></i></i></a>

		</div>

	</section>

<!-- Inicio section ends here -->

<!-- About section start here -->

	<section class="about" id="about">

		<h2 class="heading">Sobre <span>Nosotros</span></h2>

		<div class="about-img">

			<img src="img/logo/lg.png" alt="logo.png">
			<span class="circle-spin"></span>

		</div>

		<div class="about-content">

			<h3><span>Somos Lideres en lo nuestro!</span></h3>
			<p>Bienvenidos a KeyTech, tu destino definitivo para todo lo relacionado con teclados.<br>
			Somos líderes en el mercado de la comercialización de teclados mecánicos, membranas, repuestos y más.<br> 
			Nuestra pasión por la tecnología y la innovación nos ha llevado a la cima de la industria, donde hemos establecido un estándar inigualable de excelencia.
		    </p>

			<div class="btn-box btns">

			<a href="<?=base_url('about')?>"><button type="submit" class="btn">Ver mas!</button></a>

			</div>

		</div>

	</section>

<!-- About section ends here -->

<!-- Catalogo section start here -->

	<section class="catalogo" id="catalogo">

		<h2 class=""heading>My <span>Projects</span></h2>

	<div class="grid-container">

        <div class="product">

            <img src="img/productos/blue.png" alt="Teclado 1">
           
        </div>

        <div class="product">

            <img src="img/productos/gris.png" alt="Teclado 2">
            
        </div>

        <div class="product">

            <img src="img/productos/yellow.png" alt="Teclado 3">
           
        </div>
		
		<div class="btn-box btns">

			<a href="<?=base_url('about')?>"><button type="submit" class="btn">Catalogo</button></a>

		</div>

	</div>

	</section>
	
<!-- Catalogo section ends here -->

<!-- Contact section start here -->

	<section class="contact" id="contacto">

		<h2 class="heading"><span>Consultas</span></h2>

		<form action="#">

			<div class="input-box">

				<div class="input-field">

					<input type="text" placeholder="Nombre Completo" required>
					<span class="focus"></span>

				</div>

				<div class="input-field">

					<input type="text" placeholder="Dirrecion de Correo" required>
					<span class="focus"></span>

				</div>

			</div>

			<div class="input-box">

				<div class="input-field">

					<input type="number" placeholder="Numero de Telefono" required>
					<span class="focus"></span>

				</div>

				<div class="input-field">

					<input type="text" placeholder="Asunto del Correo" required>
					<span class="focus"></span>

				</div>

			</div>

			<div class="textarea-field">

				<textarea name="" id="" cols="30" rows="10" placeholder="Su Mensaje" required></textarea>
				<span class="focus"></span>

			</div>

			<div class="btn-box btns">

				<button type="submit" class="btn">Enviar</button>

			</div>

		</form>

	</section>

<!-- Contact section ends here -->

<!-- Footer section start here -->

	<footer class="footer">

	<div class="footer-text">

		<p>Copyright &copy; 2023 by KeyTech | All rights Reserved.</p>

	</div>

	<div class="footer-iconTop">

		<a href="#"><i class='bx bx-up-arrow-alt'></i></a>

	</div>

	</footer>

<!-- Footer section ends here -->

<script src="js/script.js"></script>

</body>

</html>