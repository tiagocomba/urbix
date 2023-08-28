<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>LNPD01</title>
		<link rel="stylesheet" href="css/jojo.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="left column">
				<div class="header">
					<p>boundary supply /</p>
					<p>
						better than brand new second hand clothing / focus by sick apparel
						everyday,
					</p>
					<p>home of (23-29)</p>
				</div>
				<div class="link"><a href="#">all products</a></div>
			</div>
			<div class="right column">
				<div class="images">
					<div class="img-1 img"></div>
					<div class="img-2 img"></div>
					<div class="img-3 img"></div>
					<div class="img-4 img"></div>
				</div>
				<div class="header">
					<h1 class="ml12">gorgeoushe</h1>
				</div>
			</div>
		</div>
		<script>
			// Wrap every letter in a span
			var textWrapper = document.querySelector(".ml12");
			textWrapper.innerHTML = textWrapper.textContent.replace(
				/\S/g,
				"<span class='letter'>$&</span>"
			);

			anime.timeline().add({
				targets: ".ml12 .letter",
				translateY: [100, 0],
				translateZ: 0,
				opacity: [0, 1],
				easing: "easeOutExpo",
				duration: 2000,
				delay: (el, i) => 2000 + 60 * i,
			});

			TweenMax.from(".left", 3, {
				left: "-50%",
				ease: Expo.easeInOut,
				delay: 3.4,
			});
			TweenMax.from(".header h1", 3, {
				left: "-140%",
				ease: Expo.easeInOut,
				delay: 3.4,
			});
			TweenMax.staggerFrom(
				".images > div",
				1,
				{
					y: "60",
					opacity: 0,
					ease: Power2.easeOut,
					delay: 6,
				},
				0.2
			);

			TweenMax.staggerFrom(
				".header > p",
				1,
				{
					y: "60",
					opacity: 0,
					ease: Power2.easeOut,
					delay: 5.6,
				},
				0.2
			);

			TweenMax.from(".link", 1, {
				opacity: 0,
				ease: SteppedEase.config(1),
				repeat: -1,
				repeatDelay: 0.2,
				delay: 7.8,
			});
		</script>
	</body>
</html>