<?php /* Template Name: Home */ get_header(); ?>

<div id="home" class="section">

  <canvas id="wavecanvas" style="height:100%; width:100%"></canvas>
  <div class="home-background"> 
    <div class="background-image"></div>
    <?php get_template_part('dots') ?>
  </div>
  <div class="dotGrid"></div>
    <div class="logo-container glitch">  
    <div class="glitch__item logo__img"></div>
    <div class="glitch__item logo__img"></div>
    <div class="glitch__item logo__img"></div>
    <div class="glitch__item logo__img"></div>
  </div>
  <div class="logix">
      <h2 class="glitchx" data-text="Somos su próxima agencia digital">Somos su próxima agencia digital</h2>
      <p>Creamos experiencias visuales únicas.</p>
      <button class="slide--left"><a href="#">Empezar</a></div>
    </div>

</div>

<?php get_footer(); ?>

  <script>
      // Customize these...
      var n = 300, //points in the line
      speed = 25,
      amp = 300, // base amplitude
      rand = 0, //modifies amp
      cycles = 12 ,
      pan = window.innerWidth; //adjust panning to make a smoother lateral movement
  
  // ...not these
  var c = document.getElementById("wavecanvas"),
      ctx = c.getContext("2d"),
      cw = (c.width = window.innerWidth),
      ch = (c.height = window.innerHeight),
      particles = [],
      Particle = function(index) {
        this.x = this.y = this.index = this.alpha = index;
        this.dur = 100/speed;
        this.draw = function(){ ctx.globalAlpha = this.alpha; ctx.lineTo(this.x, this.y); }
      };
  
  
  
  function setParticle(p) {
    gsap.timeline({defaults:{duration:p.dur}, repeat:-1, yoyo:true })
        .fromTo(p, {
          x:(pan+cw)/n*(p.index+1),
          y:ch/2 + (gsap.utils.random(amp,amp)*Math.cos(p.index/n*cycles)),
          alpha:0.9,
        },{
          y:ch/2 - (gsap.utils.random(amp,amp)*Math.cos(p.index/n*cycles)),
          yoyo:true,
          repeat:1,
          ease:Sine.easeInOut
        })
        .to(p, {
          duration:p.dur*2,
          x:'-='+(pan-n),
          ease:Sine.easeInOut
        }, 0)
  }
  
  
  // First run & handle resize
  for (var i=0; i<n; i++) particles.push(new Particle(i));
  window.addEventListener('resize', init);
  init();
  
  function init() {
    cw = c.width = window.innerWidth;
    ch = c.height = window.innerHeight;
    for (var i=0; i<n; i++) {
      TweenMax.killTweensOf(particles[i]);
      setParticle(particles[i]);
    }
  }
  
  gsap.ticker.add(function(){
  
    ctx.globalAlpha = 0.05;
    ctx.globalCompositeOperation = 'source-over';  
    ctx.fillStyle = 'rgba(0,0,0,1)';
    ctx.fillRect(0, 0, cw, ch);
    ctx.globalCompositeOperation = 'lighter';
    ctx.strokeStyle = "#bea373";
    ctx.beginPath();
    ctx.moveTo(-n,ch/4);
    for (var i=0; i<n; i++) particles[i].draw();
    ctx.stroke();
  });
  </script>
  