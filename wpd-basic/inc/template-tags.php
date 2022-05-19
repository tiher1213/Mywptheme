<?php
if( ! function_exists('wpd_posted_on') ) :
function wpd_posted_on() {
printf(
    '<span class="posted-on">%1$s<a href="%2$s" rel="bookmark"><time class="entry-date updated published " datetime="%3$s">%4$s</time></a></span>',
     esc_html__(  'posted-on','wpd-basic'),
     esc_url( get_permalink()),
     esc_attr(get_the_date(DATE_W3C)), 
     esc_html( get_the_date() )
    );

}
endif;
if( ! function_exists('wpd_posted_by') ) :
function wpd_posted_by() {
    printf(
        '<span class="byline">%1$s <span class="author vcard"><a class="url fn n" href="%2$s">%3$s</a></span></span>',
       esc_html__('by','wpd-basic'),

      esc_url(  get_author_posts_url(get_the_author_meta('ID') ) ),
           esc_html(get_the_author() )                   
        );
        }
endif;
if(! function_exists('wpd_entry_footer') ) :
function wpd_entry_footer() {

    if('post'=== get_post_type() ) :
        $category_list=get_the_category_list(', ');  
        if( $category_list ) {
        printf( 
        '<span class="cat-links">%1$s %2$s</span>',
  esc_html__('posted in', 'wpd-basic'),
        $category_list
        );
        }
        
    endif;

if(! is_singular() && ! post_password_required() && (comments_open() || get_comments_number())){
echo '<span class="comments_link">';
comments_popup_link(
sprintf(
'%1$s<span class="screen_reader_text">on %2$s </span>',
esc_html__('leave a comment', 'wpd-basic'),
esc_html(get_the_title() ) 
)
);
echo '</span>';
}

edit_post_link(esc_html('edit','wpd-basic'),'<span class="edit-link">','</span>');
            
}
endif;