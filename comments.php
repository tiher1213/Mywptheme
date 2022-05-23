<?php 
if(post_password_required()){
return;
}
?>

<div id="comments"class="comments-area">
<?php if( have_comments() ) :?>

<h2 class="comments-title">
<?php  
printf(
_n('%1$s thought on &ldquo;%2$s&rdquo;','%1$s thoughts on &ldquo;%2$s&rdquo;',get_comments_number(),'wpd_basic'),

get_comments_number(),


esc_html(get_the_title())
);
?>
</h2>

<ol class="comment-list">
<?php wp_list_comments(); ?>
</ol>

<?php  
the_comments_navigation();
 endif; //check for have_comments();
 if( !comments_open()) {
     echo '<p class="no_comments"> '. esc_html__('comments are closed') . '</p>';
 }
 comment_form();
  ?>
        

</div><!-- #comments -->