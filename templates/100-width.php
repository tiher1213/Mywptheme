<?php          
/*
* Template Name: 100% width

*/

 get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php 
while( have_posts() ) : the_post();

get_template_part('template-parts/content','page');
 
  if(comments_open() || get_comments_number() ){
comments_template();
}
endwhile;
?> 
    </main><!-- #main -->
    </div><!-- #primary -->
    <?php 

get_footer();
?>

       
         