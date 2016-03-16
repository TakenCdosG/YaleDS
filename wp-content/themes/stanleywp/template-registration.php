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
$file = get_field('upload_application');
?>
<?php get_header(); ?>

    <div id="ww">
        <div class="container wholeform">
            <div class="content-area">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                                <header>
                                    <h1><?php the_title(); ?></h1>
                                </header>
                                    <div class="row form-area">
                                        <?php the_content(); ?>
                                        <div class="appform row form-area">
                                            <?php
                                            if( $file ): ?>
                                                <a href="<?php echo $file['url']; ?>" class="appformlink">Download the Application for Physician Observers</a>
                                                <br/><span class="directions">Please fill out, sign and fax or email to us</span>
                                            <?php  else:?>
                                                <a href="#" class="appformlink">Download the Application for Physician Observers</a>
                                                <br/><span class="directions">Please fill out, sign and fax or email to us</span>
                                            <?php endif;?>
                                        </div>
                                    </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- /col-lg-8 -->
            </div><!-- /row .content-area -->
        </div> <!-- /container -->
    </div><!-- /ww -->
<?php get_footer(); ?>