<?php get_header(); ?>
    
<div id="page-box">

    <div id="content-box">

        <?php  // Begin The Loop
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                            
                // Print horizontal rule to separate posts of different categories
                $category;
                shnrn_print_category_break( get_the_ID(), $category );
                $category = shnrn_post_category();
                            
                // post content
                get_template_part( 'template-parts/post/content', shnrn_post_category() );

            endwhile; ?>
                
            <!-- pagination navigation -->
            <nav class="pager">
                <!-- next_posts_link() -->
                <ul>
                    <li><?php previous_posts_link( 'Back' ); ?></li>
                    <li> ● </li>
                    <li><?php next_posts_link( 'Next' ); ?></li>
                </ul>
            </nav><!-- .pager -->
            
            <?php wp_reset_postdata(); // clean up after the query and pagination ?>
            
        <?php else : // no posts ?>
        
            <p><strong><?php _e('Sorry, no posts available.'); ?></strong></p>
            
        <?php endif;
        // end THE LOOP ?>

        <?php get_search_form() ?>

    </div><!-- /#page-content -->

</div><!-- /#page-box -->
            
<?php get_footer(); ?>