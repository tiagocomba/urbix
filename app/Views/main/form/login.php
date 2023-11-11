<!-- 
                                                         
,--. ,--.                ,--------.            ,--.      
|  .'   / ,---. ,--. ,--.'--.  .--',---.  ,---.|  ,---.  
|  .   ' | .-. : \  '  /    |  |  | .-. :| .--'|  .-.  | 
|  |\   \\   --.  \   '     |  |  \   --.\ `--.|  | |  | 
`--' '--' `----'.-'  /      `--'   `----' `---'`--' `--' 
                `---'                                     -->

                <!DOCTYPE html>
<html lang="e">
		<head>
				<meta charset="UTF-8">
				<meta http-equiv="X-UA-Compatible" contable="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale:1.0">
				<link rel="stylesheet" href="<?php echo base_url('assets/css/account/login.css')?>">
				<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/EasePack.min.js"></script>
				<title>Login</title>

		</head>

		<body>


		
		<div class="alert">
    <?php if (session()->has('success')) : ?>
        <div class="alert-success"><?= session('success') ?></div>
    <?php endif ?>
    <?php if (session()->has('error')) : ?>
        <div class="alert-error"><?= session('error') ?></div>
    <?php endif ?>
</div>
<nav>
<div class="cursor"></div>
</nav>



				<div class="box">
						<form method="post" action="<?= base_url(" login ");?>" class="form">
						<div class="close-button" id="close-button"><a href="<?=base_url('inicio')?> ">←</a></div>
						<a href="#" id="modoToggle"><span><img src="<?php echo base_url('assets/img/iconos/sol.png')?>" alt=""></span></a>
								<h2>Iniciar Sesión</h2>
								<div class="form-inputs">
										<div class="form-label">
												<input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
										</div>
										<div class="form-label">
												<input name="password" type="password" class="form-control" id="password" placeholder="password">
										</div>
								</div>

								<div class="links">
										<a href="#" target="_blank">Olvidaste tu contraseña?</a>
										<a href="<?= base_url(" register ");?>">Registrarse</a>
								</div>
								<input type="submit" value="Login">
							

						</form>
				</div>
				
				<div class="marquee">
			<div class="marquee__inner" id="marqueeInner">
				<!-- Coloca aquí el texto que deseas que se desplace -->
				<span>Iniciar Sesión - Bienvenido a nuestro sitio web - Ingrese sus credenciales para continuar</span>
			</div>
		</div>

		<script>
			// Este es un script de ejemplo para animar la marquesina
// Puedes personalizarlo según tus necesidades
// Este script puede ser colocado en la sección <script> al final de tu archivo HTML

const marqueeInner = document.getElementById('marqueeInner');

// Ajusta la velocidad de desplazamiento de la marquesina
const scrollSpeed = 2; // Ajusta este valor para cambiar la velocidad de desplazamiento

let distance = 0;
let marqueeId;

function startMarquee() {
    marqueeId = requestAnimationFrame(startMarquee);
    distance -= scrollSpeed;
    marqueeInner.style.transform = `translateX(${distance}px)`;
}

startMarquee();

		</script>


<script>
	document.addEventListener("DOMContentLoaded", function () {
  const modoToggle = document.getElementById("modoToggle");
  const body = document.body;

  // Verificar si el usuario ya tiene un modo seleccionado
  if (localStorage.getItem("modo") === "oscuro") {
    body.classList.add("dark-mode");
  }

  modoToggle.addEventListener("click", function () {
    // Alternar entre los modos claro y oscuro
    if (body.classList.contains("dark-mode")) {
      body.classList.remove("dark-mode");
      localStorage.setItem("modo", "claro");
    } else {
      body.classList.add("dark-mode");
      localStorage.setItem("modo", "oscuro");
    }
  });
});


</script>
<script>
			(function () {
			            const link = document.querySelectorAll('nav > .hover-this');
			            const cursor = document.querySelector('.cursor');
			
			            const animateit = function (e) {
			                const span = this.querySelector('span');
			                const { offsetX: x, offsetY: y } = e,
			                    { offsetWidth: width, offsetHeight: height } = this,
			
			                    move = 25,
			                    xMove = x / width * (move * 2) - move,
			                    yMove = y / height * (move * 2) - move;
			
			                span.style.transform = `translate(${xMove}px, ${yMove}px)`;
			
			                if (e.type === 'mouseleave') span.style.transform = '';
			            };
			
			            const editCursor = e => {
			                const { clientX: x, clientY: y } = e;
			                cursor.style.left = x + 'px';
			                cursor.style.top = y + 'px';
			            };
			
			            link.forEach(b => b.addEventListener('mousemove', animateit));
			            link.forEach(b => b.addEventListener('mouseleave', animateit));
			            window.addEventListener('mousemove', editCursor);
			        })();
			
		</script>

		</body>
</html>
