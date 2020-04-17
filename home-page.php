<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
     <section class="container-fluid aboutbg text-center">
       
         <div class="container">

<!-- placeholder for about me -->
<h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
<p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

             
<div class="blocker"></div>
            
      </div><!--  container-->
    </section>


<section class="container-fluid ">
    <div class="container">
        <div class="row">
            <!--  a row that gives us access to the BS columns-->

            <div class="article-title text-center">
               <h3 class="text-center article-title "><?php the_field('titleforarticles'); ?></h3>
            </div>

            <div class="col-md-4 article-cent">

                <!-- col1 -->
                <img class="img-responsive" alt=“portait” src="<?php the_field('articleimage'); ?>">
                <h4><?php the_field('articletitle'); ?></h4>
                <p><?php the_field('articleexcerpt'); ?> </p>
                <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a
                       
            </div>
            
            <div class="col-md-4 article-cent">
               
                <!-- col2 -->

                
            </div>
            
            <div class="col-md-4 article-cent">
                
                <!-- col1 -->

                
            </div>
            
        </div>
        <!--        row-->
    </div>
    <!--    container-->
</section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>