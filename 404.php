<?php get_header(); ?>

<div id="page-box">

    <div id="content-box">

        <section class="error-404 not-found">

            <header class="page-header">
                <h1 class="error-title"><?php _e( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
            </header><!-- .page-header -->

            <div class="error-message">
                <p><?php _e( 'It looks like nothing was found at this location.' ); ?></p>
            </div><!-- /.error-message -->

        </section><!-- /.error-404 -->

    </div><!-- #page-content -->
    
</div><!-- #page-box -->

<?php get_footer(); ?>