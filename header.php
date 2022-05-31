<!DOCTYPE html>
<html <?php  language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
   <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#primary"><?php echo esc_html_e('Skip to content','wpd-basic');?></a>

<?php do_action( 'my_action' ); ?> 

<header id="masthead" class="site-header">
<div class="container">
<div class="site-branding">
<?php
if(has_custom_logo()) {
   the_custom_logo();
}else{
   echo '<h1 class="site-title">'. esc_html(get_bloginfo('name')).' </h1> ';
}
?>
</div>

<button id="menu-toggle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/></svg></button>
<?php 
//<span class="dropdown-menu-toggle">
wp_nav_menu(
array(
   'theme_location'   => 'header-menu',
   'container'       =>  'nav',
   'container_id'    =>  'site-navigation',
   'container_class'    =>  'main-navigation',
   )

          );
           ?> 
            
         </div>
      </header><!-- #masthead -->

      <div id="content" class="site-content">
       <?php if( ! is_page_template('templates/100-width.php')){ ?>
     <div class="container">
     <?php } ?>