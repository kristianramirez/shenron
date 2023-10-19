<?php get_header(); ?>
	
<div id="page-box">

	<div id="content-box">
	
	<?php get_search_form() ?>

	<h1 class="page-title" id="search-page-title">Search Results for "<?php echo get_search_query() ?>"</h1>
	
	<div id="search-box">
		<?php 
			// Begin The Loop
			if ( have_posts() ) : ?>
				<ul class="search-list"> 
        		<?php while ( have_posts() ) : 
        			the_post(); ?>	
        				
        				<li class="search-item"><h1 class="search-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1></li>
				
				<?php endwhile; ?>
				<ul><!-- /.search-list -->	
				<!-- pagination navigation -->
			
            	<nav class="pager">
        			<!-- next_posts_link() -->
            		<ul>
            			<li><?php previous_posts_link( 'Back' ); ?></li>
                    	<li> ● <li>
                    	<li><?php next_posts_link( 'Next' ); ?></li>
                	</ul>
            	</nav><!-- .pager -->
            
            	<?php wp_reset_postdata(); // clean up after the query and pagination ?>
            
        	<?php else : // no posts ?>
        
        		<p><strong><?php _e('Sorry, no posts available.'); ?></strong></p>
        	
        	<?php endif; 
    		// end THE LOOP ?>

	</div><!-- /#search-box -->
	
</div><!-- /#page-box -->
				
<?php get_footer(); ?>