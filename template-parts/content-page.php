<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-header">
<?php  
the_title('<h1 class="entry-title">', '</h1>'); 
?> 

</div><!-- .entry-header -->

<div class="entry-content">
<?php 

the_content();

wp_link_pages();

?>
</div><!-- .entry-content -->

<div class="entry-footer">
<?php wpd_entry_footer(); ?>
</div><!-- .entry-footer -->
</article>