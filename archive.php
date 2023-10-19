<?php /* Template Name: Archive */ ?>

<?php get_header(); ?>     

<div id="page-box">

	<div id="content-box">
	
	<?php get_search_form(); ?>  

		<h1 class="page-title" id="archive-page-title">From The Archives</h1>
	
     	<div id="archive-box">
     
        	<?php 
            	// Variable Assignments		
            	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            	$args =  array( 
                            	'category_name'     => 'article',
                            	'orderby'           => 'date',
                            	'order'             => 'DESC',
								'posts_per_page'    => 500,
                            	'paged'             => $paged
                    	);
            	$archive_query = new WP_Query( $args );
            	$lastDate = "January 2001";
        	?>
                
        	<!-- The Loop -->
        	<?php if ( $archive_query->have_posts() ) : ?>
        
            	<ul id="archive-list">
            
                	<?php 
                		while ( $archive_query->have_posts() ) : $archive_query->the_post();                                     
                    	$currentDate = get_the_date( 'F Y' );
                    	$lastDate = shnrn_display_archive_month( $currentDate, $lastDate );
                	?>
                
                	<li><h1 class="archive-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1></li>
                
                	<?php endwhile; ?>
                
            	</ul>

        	<?php else : // no posts?>
        
            	<p><?php _e('Sorry, no posts available.'); ?></p>
            
        	<?php endif; // end The Loop ?>
        
     </div><!-- /#content-box -->
     
</div><!-- /#page-box -->

<?php get_footer(); ?>
