<?php get_header(); ?>

<section>
    
    <div class="main">
      

        <?php while(have_posts()) : the_post() ?>
          <?php the_content() ?>
        <?php endwhile ?>  

    </div>  
              
    </section>
   
<?php get_footer(); ?>