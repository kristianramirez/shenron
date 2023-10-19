<?php get_header(); ?>

    <div id="page-box">

        <div id="content-box">

            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>

                    <h1 class="page-title"><?php the_title(); ?></h1>
					<div id="page-content">
						<?php the_content(); ?>
					</div>

                <?php endwhile;
            endif; ?>

        </div><!-- #page-content -->
    </div><!-- #page-box -->

<?php get_footer(); ?>