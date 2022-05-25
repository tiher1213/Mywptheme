           
<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
<div class="error-404 not-found">
 
  <div class="page-header">
<h1 class="page-title">
<?php esc_html_e("Oops! that page can&rsquo;t be found.", 'wpd-basic')?>
</h1>
</div> 
<div class="page-content">
  <p> <?php esc_html_e('It looks like nothig was found at this location. Maybe try a search.'); ?> </p>
  <?php get_search_form(); ?>
</div>
</div>
</main><!-- #main -->
    </div><!-- #primary -->
    <?php 
get_sidebar(); 
get_footer();
?>

       
         