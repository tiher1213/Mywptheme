            
<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    
<?php 

while( have_posts() ) : the_post();

get_template_part('template-parts/content',get_post_type());
 endwhile;
  
  the_post_navigation(
    array(
			'prev_text'          => esc_html__('previous post', 'wpd-basic'),
			'next_text'          =>esc_html__('next post', 'wpd-basic'), 
    )
  );
 


  ?> 
    
  </main><!-- #main -->
    </div><!-- #primary -->
    <?php 
get_sidebar(); 
get_footer();
?>

       
         