
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                     <div class="entry-header">
                     <?php  
                      if(is_single() ){
                        the_title('<h1 class="entry-title">', '</h1>' ); 
                      }else{
                      the_title('<h2 class="entry-title"><a href="'.get_permalink().'" rel="bookmark">', '</a></h2>' ); 
                      }
                      ?> 
                        <div class="entry-meta">
                       <?php 
                       printf(
                        '<span class="posted-on">%1$s<a href="%2$s" rel="bookmark"><time class="entry-date updated published " datetime="%3$s">%4$s</time></a></span>',
                           'posted-on',
                           get_permalink(),
                          get_the_date(DATE_W3C), 
                          get_the_date() 
                       );
                       printf(
                        '<span class="byline">%1$s <span class="author vcard"><a class="url fn n" href="%2$s">%3$s</a></span></span>',
                        'by',

                        get_author_posts_url(get_the_author_meta('ID') ),
                           get_the_author()                    
                        );
                                             
                       ?>    
                      </div>
                    
                     </div><!-- .entry-header -->

                     <div class="entry-content">
                       <?php 
                       if(is_single()){
                       the_content();
                       
                       wp_link_pages();
                     } else {

                        the_excerpt();  
                     }
                    ?>
                       </div><!-- .entry-content -->

                     <div class="entry-footer">
                     <?php 
                     $category_list=get_the_category_list(', ');  
                     if( $category_list ) {
                       printf( 
                        '<span class="cat-links">%1$s %2$s</span>',
                       'posted in',
                       $category_list
                     );
                     }
                     
                     if(! is_singular() && ! post_password_required() && (comments_open() || get_comments_number())){
                        echo '<span class="comments_link">';
                     comments_popup_link(
                     sprintf(
                        '%1$s<span class="screen_reader_text">on %2$s </span>',
                     'leave a comment',
                      get_the_title()  
                     )
                     );
                    echo '</span>';
                  }

                  edit_post_link('edit','<span class="edit-link">','</span')
                     ?>
                    </div><!-- .entry-footer -->
                  </article>