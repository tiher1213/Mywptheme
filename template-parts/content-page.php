<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if( ! is_page_template('template/100-width.php')){ ?>

    <div class="entry-header">
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>S

</div><!-- .entry-header -->
<?php } ?>
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