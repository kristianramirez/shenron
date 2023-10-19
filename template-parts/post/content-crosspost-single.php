<div class="post-box">

    <?php get_template_part( 'template-parts/metabox/metadata', 'crosspost' ) ?>

    <div class="content-box">
        <h1 class="crosspost-title"><a href="<?php echo shnrn_the_external_link() ?>"><?php the_title(); ?></a></h1>

        <div class="content">

            <?php the_content(); ?>

            <a href="<?php echo shnrn_the_external_link() ?>"><p>Read more at <?php echo shnrn_the_crosspost_source() ?>  →</p></a>

        </div><!-- /.content -->

    </div><!-- /.content-box -->

</div><!-- /.post-box -->