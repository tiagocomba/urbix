<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Catalogo Urbix</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/catalogo.css')?>" />
	</head>
	<body>
		<header>
			<h1>Urbix</h1>
		</header>
		<div class="container-items">
            
			<div class="item">
				<figure>
					<a href="<?php echo base_url('desc_producto')?>"><img
						src="<?php echo base_url('assets/img/productos/gris.png')?>"
						alt="producto"
					/></a>
				</figure>
				<div class="info-product">
					<h2>gris</h2>
					<p class="price">$80</p>
				</div>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo base_url('desc_producto')?>"><img
						src="<?php echo base_url('assets/img/productos/blue.png')?>"
						alt="producto"
					/></a>
				</figure>
				<div class="info-product">
					<h2>blue</h2>
					<p class="price">$20</p>
					
				</div>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo base_url('desc_producto')?>"><img
						src="<?php echo base_url('assets/img/productos/negro.png')?>"
						alt="producto"
					/></a>
				</figure>
				<div class="info-product">
					<h2>negro</h2>
					<p class="price">$50</p>
					
				</div>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo base_url('desc_producto')?>"><img
						src="<?php echo base_url('assets/img/productos/rosa.png')?>"
						alt="producto"
					/></a>
				</figure>
				<div class="info-product">
					<h2>rosa</h2>
					<p class="price">$90</p>
					
				</div>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo base_url('desc_producto')?>"><img
						src="<?php echo base_url('assets/img/productos/yellow.png')?>"
						alt="producto"
					/></a>
				</figure>
				<div class="info-product">
					<h2>yellow</h2>
					<p class="price">$50</p>
					
				</div>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo base_url('desc_producto')?>"><img
						src="<?php echo base_url('assets/img/productos/blanco.png')?>"
						alt="producto"
					/></a>
				</figure>
				<div class="info-product">
					<h2>white</h2>
					<p class="price">$50</p>
					
				</div>
			</div>
		</div>

        <script src="<?php echo base_url('assets/js/catalogo.js')?>"></script>
	</body>
</html>