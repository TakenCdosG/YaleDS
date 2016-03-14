<?php
/**
 * Registration
 *
 * Template Name: Registration Template
 *
 *
 * @file           template-registration.php
 * @package        StanleyWP 
 * @author         Carlos Leaño
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

    <div id="ww">
        <div class="container">
            <div class="row content-area">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                                <header>
                                    <h1><?php the_title(); ?></h1>
                                </header>
                                <div class="container">
                                    <?php the_content(); ?>
                                </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- /col-lg-8 -->
            </div><!-- /row .content-area -->
        </div> <!-- /container -->
    </div><!-- /ww -->
<?php get_footer(); ?>