<?php get_header(); ?>  

<div id="page-box">

	<div id="content-box">

		<?php 
        	if ( have_posts() ) : 
        		while ( have_posts() ) : the_post();
                        
            		get_template_part( 'template-parts/post/content', shnrn_get_format().'-single' );
                	
				endwhile; 
			endif; ?>       
	</div><!-- #page-content -->
</div><!-- #page-box -->

<?php get_footer(); ?>
