<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>never</title>
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/animation/intro.css')?>" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  </head>
  <body>
    <div class="container">
      <button class="btn">Enter</button>
      <div class="text-container"></div>
      <div class="text-wrapper">
        <div class="text">
          quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
          quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .s
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
           quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
            quality  quality  quality .
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
        <div class="text">
        quality  quality  quality  quality  quality  quality  quality  quality
          quality  quality  quality .
        </div>
      </div>
      <div class="header">urbix</div>
    </div>
    <script>
      const btn = document.querySelector(".btn");

      function redirectToAnotherView() {
        var absoluteUrl = "<?php echo site_url('inicio'); ?>";
        window.location.href = absoluteUrl;
      }

      btn.addEventListener("click", function () {
        gsap.to(".btn", 1, {
          opacity: 0,
          y: -40,
          ease: Expo.easeInOut,
        });

        gsap.to(".text-wrapper > div", 1, {
          x: "500",
          ease: Expo.easeInOut,
          delay: 1,
          stagger: 0.1,
        });

        gsap.to(".text-wrapper", 3, {
          y: -600,
          scale: 4.5,
          rotate: -90,
          ease: Expo.easeInOut,
          delay: 1.5,
        });

        gsap.to(".text", 1, {
          opacity: 1,
          ease: Expo.easeInOut,
          delay: 3,
        });

        gsap.to(".text-wrapper > div", 4, {
          x: "-3500",
          ease: Expo.easeInOut,
          delay: 3.5,
          stagger: 0.05,
        });

        gsap.to(".text-container", 2, {
          bottom: "-100%",
          ease: Expo.easeInOut,
          delay: 6,
        });

        let textWrapper = document.querySelector(".header");
        textWrapper.innerHTML = textWrapper.textContent.replace(
          /\S/g,
          "<span class='letter'>$&</span>"
        );

        anime.timeline().add({
          targets: ".header .letter",
          opacity: [0, 1],
          translateY: [200, 0],
          translateZ: 0,
          easing: "easeOutExpo",
          duration: 2000,
          delay: (el, i) => 7000 + 40 * i,
          complete: function () {
            // Llama a la función al finalizar la animación
            redirectToAnotherView();
          },
        });
      });
    </script>
  </body>
</html>