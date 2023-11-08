<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>block reveal page animation using gsap</title>
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/animation/intro89.css')?>" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <div class="nav">
        <a href="#" class="link">stabondar</a>
        <a href="#" class="link">fancy mode</a>
        <a href="#" class="link">menu</a>
      </div>
      <div class="about">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quia
          repellendus facilis provident nostrum nam totam dolor nemo, officiis
          molestiae amet debitis ut modi error quam eos earum alias ad.
        </p>
      </div>

      <div class="wrapper-img">
        <div class="box"></div>
        <div>
          <img
            class="image"
            src="https://images.unsplash.com/photo-1499996860823-5214fcc65f8f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2866&q=80"
          />
        </div>
      </div>
      <div class="sub-header">
        <a href="#" class="contact-link">&#8618; want to work with me</a>
        <a href="#" class="work-link">my portfolio</a>
        <a href="#" class="work-link">awards</a>
        <a href="#" class="aboutme"
          >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut cumque
          amet aut sit. Beatae, nesciunt eum tenetur totam unde hic?</a
        >
      </div>
    </div>
    <div class="container">
      <div class="loader">loading</div>
      <div class="overlay">
        <div class="block block-1"></div>
        <div class="block block-2"></div>
        <div class="block block-3"></div>
        <div class="block block-4"></div>
        <div class="block block-5"></div>
        <div class="block block-6"></div>
        <div class="block block-7"></div>
        <div class="block block-8"></div>
        <div class="block block-9"></div>
        <div class="block block-10"></div>
        <div class="block block-11"></div>
        <div class="block block-12"></div>
        <div class="block block-13"></div>
        <div class="block block-14"></div>
        <div class="block block-15"></div>
        <div class="block block-16"></div>
        <div class="block block-17"></div>
        <div class="block block-18"></div>
        <div class="block block-19"></div>
        <div class="block block-20"></div>
      </div>
    </div>

    <script>
      TweenMax.staggerFrom(
        ".block",
        0.8,
        {
          width: "0%",
          ease: Power1.easeIn,
          delay: 2,
        },
        0.04
      );

      TweenMax.to(".loader", 1, {
        x: 2,
        opacity: 0,
        ease: Expo.easeInOut,
        delay: 1.6,
      });

      TweenMax.staggerFrom(
        ".nav > a, .about p, .sub-header > a",
        2,
        {
          opacity: 0,
          y: 30,
          ease: Expo.easeInOut,
          delay: 3,
        },
        0.06
      );

      TweenMax.to(".box", 0.2, {
        opacity: 1,
        ease: Expo.easeInOut,
        delay: 3.8,
      });

      TweenMax.to("img", 0.2, {
        opacity: 1,
        ease: Expo.easeInOut,
        delay: 4,
      });

      TweenMax.to(".box", 2.4, {
        y: "-100%",
        ease: Expo.easeInOut,
        delay: 4,
      });
    </script>
  </body>
</html>