<div class="post-box">

	<?php get_template_part( 'template-parts/metabox/metadata', 'article' ) ?>	
		
	<div class="content-box">
	
        <h1 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                    
        <div class="content">
                        
            <?php the_content(); ?>
                        
    	</div><!-- /.content -->
    	
    </div><!-- /.content-box -->
    
</div><!-- /.post-box -->