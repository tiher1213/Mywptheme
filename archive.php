h            
<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    
<?php 
if( have_posts() ) :
?>
<div class="page-header">

<?php
the_archive_title( '<h1 class="page-title>','</h1>');
the_archive_description( '<div class="archive-descriotion">','</div>');
?>

</div>
<?php
  while( have_posts() ) : the_post();

get_template_part('template-parts/content',get_post_type());
 endwhile;
  
  the_posts_pagination();
  else :

    get_template_part( 'template-parts/content', 'none');

  endif;
  ?> 
    
  </main><!-- #main -->
    </div><!-- #primary -->
    <?php 
get_sidebar(); 
get_footer();
?>

       
         