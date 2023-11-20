<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>about us</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/front-main/about.css');?>">
  </head>
  <body>
  <div class="container">
    <header>
        <div class="header-left">
            
            <nav>
                <ul>
                    <li>
                        <a href="<?=base_url('intro_inicio')?>">Home</a>
                    </li>
                    <li>
                        <a href="<?=base_url('about')?>"class="active">about</a>
                    </li>
                    <li>
                        <a href="<?=base_url('intro_catalogo')?>">catalogue</a>
                    </li>
                    <li>
                        <a href="#">contact</a>
                    </li>

                    <li>
                        <a href="#">account</a>
                    </li>
                    
            
                  
                </ul>
             
            </nav>
           
        </div>
        <div class="header-right">
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>
</div>
    <div class="smooth-scroll">
      <div class="hero-scroller">
        <div class="section">
          <div class="section-wrapper">
            <div class="content">
              <h1 class="hero-header h-1">We</h1>
              <h1 class="hero-header h-2">are unique</h1>
              <h1 class="hero-header h-3">and incomparable</h1>
            </div>
            <div class="pin-wrapper">
              <div class="image-wrapper" id="heroImage">
                <img
                  class="image"
                  src="./assets/css/img/gallery/men.jpg"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section copy">
        <div class="section-wrapper">
          <div class="content">
            <p>
            "We are not just a company; we are what is missing in the market. We specialize in the marketing of unparalleled products. What are you waiting for? Get them in your hands now."
            </p>
          </div>
        </div>
      </div>
    </div>
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script>
      gsap.registerPlugin(ScrollTrigger);

      const locoScroll = new LocomotiveScroll({
        el: document.querySelector(".smooth-scroll"),
        smooth: true,
        lerp: 0.08,
      });

      locoScroll.on("scroll", ScrollTrigger.update);

      ScrollTrigger.scrollerProxy(".smooth-scroll", {
        scrollTop(value) {
          return arguments.length
            ? locoScroll.scrollTo(value, 0, 0)
            : locoScroll.scroll.instance.scroll.y;
        },
        getBoundingClientRect() {
          return {
            top: 0,
            left: 0,
            width: window.innerWidth,
            height: window.innerHeight,
          };
        },
        pinType: document.querySelector(".smooth-scroll").style.transform
          ? "transform"
          : "fixed",
      });

      const vw = (coef) => window.innerWidth * (coef / 100);
      const vh = (coef) => window.innerHeight * (coef / 100);

      const heroScroller = gsap.timeline({
        paused: true,
        scrollTrigger: {
          trigger: ".hero-header.h-1",
          scroller: ".smooth-scroll",
          pin: ".pin-wrapper",
          start: "top 10%",
          scrub: true,
          end: `${vh(100)}`,
        },
      });

      heroScroller
        .to(
          [".hero-header.h-1", ".hero-header.h-3"],
          {
            scale: 2,
            y: vh(150),
            xPercent: -150,
          },
          "heroScroll"
        )
        .to(
          ".hero-header.h-2",
          {
            scale: 2,
            y: vh(150),
            xPercent: 150,
          },
          "heroScroll"
        )
        .to(
          "#heroImage",
          {
            scaleY: 2.5,
          },
          "heroScroll"
        )
        .to(
          "#heroImage .image",
          {
            scaleX: 2.5,
            xPercent: 50,
          },
          "heroScroll"
        );

      ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
      ScrollTrigger.refresh();
    </script>
  </body>
</html>