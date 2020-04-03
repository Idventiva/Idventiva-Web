<?php /* Template Name: Home */ get_header(); ?>

<div id="home" class="section">
  <div class="parallaxLayer">
  <div class="home-background"></div>
  <div class="dotGrid"></div>
  </div>
</div>

<script>
  jQuery(document).ready(function(){

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
