<!--<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>-->

<!-- personal.jpg -->
<div class="row text-center">
  <div class="col-md-6">
    <div class="photo">
      <img src="<?=get_stylesheet_directory_uri();?>/dist/images/personal.jpg">
    </div>
<!-- Name -->
    <div class="name">
      <div style="text-align: center;"><strong>Jaron Call</strong></div>
    </div>
  </div>

<!-- Description Text -->
  <div class="col-md-6">
    <div class="about-copy text-center">
      <div style="text-align: center;"><em>"I am a <strong>motion graphics</strong> and <strong>website designer</em></strong>,</div>
      <div style="text-aling: center;"><em>based out of <strong>Salt Lake City, Utah.</strong></em></div>
      <div style="text-aling: center;"><em>I've worked with a variety of companies,</em></div>
      <div style="text-aling: center;"><em>ranging from <strong>Adobe Systems </strong>to small start-ups</em>.</div>
      <div style="text-align: center;"><em>I do <strong>creative design</strong> for <strong>Jackalope Media</strong>.</em></div>
      <div style="text-align: center;">
        <div><em>And am the Founder of <strong>Brake The Cycle</strong>, a local Utah Organization,</em></div>
        <div><em>in support of suicide awareness".</em></div>
      </div>
    </div>
  </div>
</div>

<!-- Praises SVG -->
<div class="praises text-center">
  <svg class="praises img-responsive" width="670" height="316"><?php get_template_part( 'assets/svg/inline', 'praises.svg' ); ?></svg>
</div>

<!-- Price Sheet Text -->
<div class="about-copy-2">
  <div style="text-align: center;">In need of an Animated Video?</div>
  <div style="text-align: center; font-size: 20px;"><em>Have a look at my competitive prices below!</em></div>
</div>

<!-- pricing.svg  -->
<div class="pricing text-center">
  <svg class="pricing img-responsive" width="626" height="420"><?php get_template_part( 'assets/svg/inline', 'pricing.svg' ); ?></svg>
</div>


<div class="about-copy-3">
  <div style="text-align: center;">Check out the Projects Page to view my work!</div>
  <div style="text-align: center; font-size: 20px;"><em>Animations, Vlogs, Social Videos and more!</em></div>
</div>

<!-- Bottom Text -->
<div class="about-inquire">
<div style="text-align: center;"><h4>For project inquiries, please fill out the form on the Contact Page</h4></div>
</div>
