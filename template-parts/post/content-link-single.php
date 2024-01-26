<div class="post-box">
       
	<?php get_template_part( 'template-parts/metabox/metadata', 'link' ) ?>
    				
	<div class="content-box">
	
        <h1 class="linked-title"><a href="<?php echo shnrn_the_external_link() ?>"><?php the_title() ?><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/template-parts/images/link-out-img.svg"></a></h1>
                    
        <div class="content">
                        
            <?php the_content(); ?>
                        
    	</div><!-- /.content -->
    	
    </div><!-- /.content-box -->
    
</div><!-- /.post-box -->
