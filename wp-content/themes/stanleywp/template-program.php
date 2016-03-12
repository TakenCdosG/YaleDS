<?php
/**
 * Program
 *
 * Template Name: Program
 *
 *
 * @file           template-program.php
 * @package        StanleyWP 
 * @author         Carlos Leaño
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
    $pimage = get_field('program_image');
    $t1title = get_field('t1title');
    $tab1 = get_field('tab1');
    $t2title = get_field('t2title');
    $tab2 = get_field('tab2');
    $t3title = get_field('t3title');
    $tab3 = get_field('tab3');
    $t4title = get_field('t4title');
    $tab4 = get_field('tab4');
    $t5title = get_field('t5title');
    $tab5 = get_field('tab5');
?>
<?php get_header(); ?>

    <div id="ww">
        <div class="main-image" style="background-image: url(<?php echo esc_url( $pimage['url']); ?>); background-size: cover; width: 100%; height: 499px; margin: auto; background-position: center; background-repeat: no-repeat;">

        </div>
        <div class="container">
            <div class="row content-area">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                                <header>
                                    <h1><?php the_title(); ?></h1>
                                </header>
                                <section class="program-text">
                                    <?php the_content(); ?>
                                </section><!-- end of .program-text -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- /col-lg-8 -->
            </div><!-- /row .content-area -->
            <div class="row tabs-area">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><?php echo $t1title; ?></a></li>
                        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><?php echo $t2title; ?></a></li>
                        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><?php echo $t3title; ?></a></li>
                        <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"><?php echo $t4title; ?></a></li>
                        <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab"><?php echo $t5title; ?></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab1"><?php echo $tab1; ?></div>
                        <div role="tabpanel" class="tab-pane" id="tab2"><?php echo $tab2; ?></div>
                        <div role="tabpanel" class="tab-pane" id="tab3"><?php echo $tab3; ?></div>
                        <div role="tabpanel" class="tab-pane" id="tab4"><?php echo $tab4; ?></div>
                        <div role="tabpanel" class="tab-pane" id="tab5"><?php echo $tab5; ?></div>
                    </div>
                </div>
            </div><!-- /row .tabs-area -->
        </div> <!-- /container -->
    </div><!-- /ww -->



<?php get_footer(); ?>