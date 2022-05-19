
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                     <div class="entry-header">
                     <?php  
                      if(is_single() ){
                        the_title('<h1 class="entry-title">', '</h1>' ); 
                      }else{
                      the_title('<h2 class="entry-title"><a href="'.esc_html(get_permalink()).'" rel="bookmark">', '</a></h2>' ); 
                      }
                      ?> 
                        <div class="entry-meta">
                       <?php 
                       wpd_posted_on();
                       wpd_posted_by();                
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
                     <?php  wpd_entry_footer();?>
                    </div><!-- .entry-footer -->
                  </article>