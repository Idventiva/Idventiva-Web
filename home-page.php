<?php /* Template Name: Home */ get_header(); ?>

<div id="home" class="section">
  <div class="parallaxLayer">
  <div class="home-background"></div>
  <div class="dotGrid"></div>
    <div class="parallaxText">
      <span class="pT1">Somos una agencia</span>
      <span class="pT2">creativa</span>
      <span class="pT3">especializada en</span>
      <span class="pT4">Branding</span>
      <span class="pT5">&</span>
      <span class="pT6">Marketing<br />Digital</span>
    </div>
  </div>
  <div class="sliderContainer clone">
    <div class="sliderFix">
      <div id="sliderClone1" class="slider">
        <div class="slide">
          <div id="slide00" class="slideBk"></div>
        </div>
        <div class="slide">
          <div id="slide01" class="slideBk"></div>
        </div>
        <div class="slide">
          <div id="slide02" class="slideBk"></div>
        </div>
        <div class="slide">
          <div id="slide03" class="slideBk"></div>
        </div>
        <!-- <div class="slide">
          <div id="slide04" class="slideBk"></div>
        </div> -->
      </div>
    </div>
  </div>
  <div class="sliderContainer clone">
    <div class="sliderFix">
      <div id="sliderClone2" class="slider">
        <div class="slide">
          <div id="slide00" class="slideBk"></div>
        </div>
        <div class="slide">
          <div id="slide01" class="slideBk"></div>
        </div>
        <div class="slide">
          <div id="slide02" class="slideBk"></div>
        </div>
        <div class="slide">
          <div id="slide03" class="slideBk"></div>
        </div>
        <!-- <div class="slide">
          <div id="slide04" class="slideBk"></div>
        </div> -->
      </div>
    </div>
  </div>
  <div class="sliderContainer">
    <div class="sliderFix">
      <div id="slider" class="slider">
        <div class="slide">
          <div id="slide00" class="slideBk"></div>
        </div>
        <div class="slide">
          <div id="slide01" class="slideBk"></div>
        </div>
        <div class="slide">
          <div id="slide02" class="slideBk"></div>
        </div>
        <div class="slide">
          <div id="slide03" class="slideBk"></div>
        </div>
        <!-- <div class="slide">
          <div id="slide04" class="slideBk"></div>
        </div> -->
      </div>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function(){

    jQuery('#slider').bxSlider({
      controls: false,
      auto:true,
      mode: 'fade',
      autoStart: true,
      speed: 400,
      pager: false
    });

    jQuery('#sliderClone1').bxSlider({
      controls: false,
      auto:true,
      mode: 'fade',
      autoStart: true,
      speed: 400,
      pager: false
    });

    jQuery('#sliderClone2').bxSlider({
      controls: false,
      auto:true,
      mode: 'fade',
      autoStart: true,
      speed: 400,
      pager: false
    });

  jQuery('.parallaxLayer').tilt({
        maxTilt: 20,
        perspective: 4000,
        reset: false,
        glare: false,
        maxGlare: 1,
        transition: true,
        easing: "cubic-bezier(.03,.98,.52,.99)",
        speed:  1000
  });

});

</script>


<?php get_footer(); ?>
