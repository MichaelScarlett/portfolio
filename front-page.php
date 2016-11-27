<?php 
    $heroImage = get_field('hero_image');
?>

<?php get_header();  ?>

<header class="hero" style="background-image:linear-gradient(to top, rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url(<?php echo $heroImage['url'] ?>)">

  <!-- <input type="checkbox" id="toggle" name="toggle">

  <div class="nav">
    <label for="toggle">☰ Menu</label>
  </div> -->
  <div class="menuHam">
    <div id="menuIcon" class="fa fa-bars fa-2x"></div>
  </div>
  <div class="menu" id="home">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
  </div>
      <!-- <div class="overlay"></div>   -->
        
    <?php // Start the loop ?>
    <?php if ( have_rows('header_logo') ) while ( have_rows('header_logo') ) : the_row(); ?>

    <section class="home__specials--box">
        <?php $image = get_sub_field('logo_image');
       if( !empty($image)):?>


          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <h1>
            <span class="typing"></span>
            <span class="typed-cursor"></span>
          </h1>
          <h2 class="animated fadeIn" id="sub_title">
            <?php the_field('sub_title') ?>
          </h2>  
          <?php endif; ?>
        <div class="overlay"></div>
    </section>



      <?php the_content(); ?>

    <?php endwhile; // end the loop?>



    
    
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'secondary'
    )); ?>
  

    <!-- <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
    </span> -->
    <div class="chevron" id="about_chev">  
      <a href="#about"><?php the_field('arrow_down'); ?></a>
    </div>  
  <span id="about"></span>

</header><!--/.header-->

    <!-- <div class="invisible" id="invisible">
      <a href="#invisible"></a>
    </div> -->

  
<div class="main">
    <div class="headShot">
        <?php the_post_thumbnail('medium'); ?>
    </div>

      
  <section class="about container">
    <div class="aboutMe">
      <h2><?php the_field('about_title'); ?></h2>
      <p><?php the_field('about_text'); ?></p>
    </div>
  </section>



  <div class="container" id="skills_container">

    <div class="content-container" id="contact_info">
          <h3><?php the_field('my_contact') ?></h3>
        <?php // Start the loop ?>
        <?php if ( have_rows('contact_info') ) while ( have_rows('contact_info') ) : the_row(); ?>
    <div class="contact_mobile">
      <div class="contactInfo">
          
          <p><?php the_sub_field('left_text') ?></p>
          <p><?php the_sub_field('right_text') ?></p>  
      </div>
    </div>  

          <?php the_content(); ?>

        <?php endwhile; // end the loop?>

      <div class="resumeButton"> 
        <a class="button" href="<?php the_field('resume_button') ?> " target="_blank">
          <?php the_field('resume_title') ?>  
        </a>
      </div>

      
      </div> <!-- /.container -->

    <div class="container">
          <div class="skill_title" id="skill_title">
            <h3><?php the_field('skills_title'); ?></h3>
          </div>
      <div class="skill_set" id="skill_set">
      
          <?php // Start the loop ?>
          <?php if ( have_rows('skills') ) while ( have_rows('skills') ) : the_row(); ?>
        

        
          <div class="mySkills">
            <?php the_sub_field('social_logo'); ?>
          </div>

          <?php the_content(); ?>
          <?php endwhile; // end the loop?>
      </div>
  <div class="chevron" id="chevron_portfolio">  
      <a href="#portfolio"><?php the_field('arrow_down'); ?></a>
  </div> 
    </div>
    

  </div>
</div> <!-- /.main -->
<section class="myPortfolio" id="portfolio">
<div class="working">
    <div class="portfolioTitle">
      <h2><?php the_field('portfolio_title') ?></h2>
    </div>
    <div class="portfolio">

      <?php // Start the loop ?>
      <?php if ( have_rows('works') ) while ( have_rows('works') ) : the_row(); ?>
    <div class="myWorks">

      <div class="image_works" id="my_images">
         <?php $image = get_sub_field('works_image');
        if( !empty($image)):?>
           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
      </div>


      <div class="my_project"> 
        <div class="project_title">
          <h2><?php the_sub_field('works_title'); ?></h2>
        </div>
        <div class="project_description">
          <p><?php the_sub_field('works_description'); ?></p>
        </div> 
        <div class="view_live">
          <p><?php the_sub_field('view_live'); ?></p>
        </div> 
        <div class="project_skills">
          <?php if ( have_rows('work_skills')) while ( have_rows('work_skills')) : the_row(); ?>
          
          <?php the_sub_field('skills_icon') ?>

          <?php endwhile; ?>
        </div>
      </div> 
  </div>  

    <?php the_content(); ?>
    <?php endwhile; ?>

    <div class="chevron container" id="chevron_contact">  
        <a href="#contact"><?php the_field('arrow_down'); ?></a>
    </div>

  </div>
     <!-- /,content -->
</div>    
</section> 

<section class="contact container" id="contact">

  <div class="contactTitle">
    <h2><?php the_field('contact_title') ?></h2>
  </div>
  <div class="my_contact">
    <div class="contact_options">
      <?php // Start the loop ?>
      <?php if ( have_rows('contact_me') ) while ( have_rows('contact_me') ) : the_row(); ?>

    <div class="myDetails">
      <?php the_sub_field('contact_image') ?>
      <div class="details">
        <h4 class="detailsTitle"><?php the_sub_field('contact_headline') ?></h4>
        <p><?php the_sub_field('contact_details') ?></p>
      </div>
    </div>

    <?php the_content(); ?>
    <?php endwhile; ?>
    
    </div>

    <div class="contactForm">

    <div class="contact_form">
      <?php echo do_shortcode('[contact-form-7 id="79" title="Contact form 1"]') ?>
    </div>
  </div>

    <!-- <div class="googleMap map">
      
    </div> -->
  </div>

</section> 

  <section class="map" onclick="document.getElementById('iframe').style.pointerEvents= 'auto'">
  
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7207.123738528176!2d-79.38695887305094!3d43.65432174766764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1479157181767" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  
  </section>

<section class="footer">
  
  
  <?php get_footer(); ?>


</section>

