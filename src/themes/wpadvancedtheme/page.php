<?php
/**
 * Page Template
 * 
 * @package wpadvancedtheme
 * 
 */

 get_header();
?>

<div id="primary">
    <div id="main" class="site-main mt-5 mb-5" role="main">

        <div class="container">

        <!-- <//?php get_template_part( 'template-parts/content-test' ); ?> -->

            <?php if ( have_posts() ) : ?>

                    <?php if ( ! is_front_page() && ! is_page( '15' ) ) : ?>
                        <header class="mb-5">
                            <h1 class="page-title"><?php echo get_the_title(); ?></h1>
                        </header>
                    <?php endif; ?>

                        <?php 
                            // the WP Loop
                            while ( have_posts() ) : the_post(); ?>

                                <?php echo get_the_content(); ?>

                        <?php endwhile; ?>

                    <?php else : ?>
                        <?php get_template_part( 'template-parts/content-none' ); ?>
            <?php endif; ?>

        </div>
        
    </div>
</div>

<?php get_footer(); ?>