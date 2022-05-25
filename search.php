           
<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    
<?php 
if( have_posts() ) :
?>
<div class="page-header">
<h1 class="page-title">
<?php
printf( __('search results for: %s', 'wpd-basic'),get_search_query());
?>
</h1>
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

       
         