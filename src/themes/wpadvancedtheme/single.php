<?php
/**
 * Single Page Template File.
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
 
                <div class="row">
                    
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <?php get_sidebar( 'sidebar-single' ); ?>
                    </div>
                
                    <?php if ( is_home() && ! is_front_page() ) ?>
                    <!-- <header class="mb-5">
                        <h1 class="page-title"><//?php single_post_title(); ?></h1>
                    </header> -->

                    <?php 
                        // the WP Loop
                        while ( have_posts() ) : the_post(); ?>

                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <?php get_template_part( 'template-parts/content' ); ?>

                                <div class="pagination d-flex justify-content-between">
                                    <span class="prev-btn"><?php previous_post_link(); ?></span>
                                    <span class="next-btn"><?php next_post_link(); ?></span>
                                </div>
                            </div>

                    <?php endwhile; ?>

                    <?php else : ?>
                        <?php get_template_part( 'template-parts/content-none' ); ?>
                    <?php endif; ?>

                </div>

         </div>
         
     </div>
 </div>
 
 <?php get_footer(); ?>