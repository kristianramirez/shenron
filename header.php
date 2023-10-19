<!DOCTYPE html>
<html lang="en">
    <head>
        <?php wp_head() ?>
    </head>
    <body>
        <div id="header">
            <a href="/">
                <img id="header-img" src="<?php echo get_bloginfo( 'template_directory' ); ?>/template-parts/images/header-img.png" alt="dragonami">
            </a>
            
            <div id="site-author">
                by Kristian Ramirez
            </div>
            
            <div id="navbar" class="navigation">
                <nav id="nav-menu" class="navigation">
                    <a href="/archive">Archive</a>
                    <a href="/about">About</a>
                    <a href="/feeds">Feeds</a>
                    <a href="https://twitter.com/kristianramirez">Twitter</a>
                </nav>
            </div><!-- /#nav-bar -->
                
        </div><!-- /#header -->