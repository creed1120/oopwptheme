<?php
/**
 * Footer file
 * 
 * @package wpadvancedtheme
 * 
 */
?>

    </div>
    <footer class="footer pt-5 pb-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <?php if ( is_active_sidebar( 'sidebar-footer-col-1' ) ) : ?>
                        <aside>
                            <?php dynamic_sidebar( 'sidebar-footer-col-1' ); ?>
                        </aside>
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <?php if ( is_active_sidebar( 'sidebar-footer-col-2' ) ) : ?>
                        <aside>
                            <?php dynamic_sidebar( 'sidebar-footer-col-2' ); ?>
                        </aside>
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <?php if ( is_active_sidebar( 'sidebar-footer-col-3' ) ) : ?>
                        <aside>
                            <?php dynamic_sidebar( 'sidebar-footer-col-3' ); ?>
                        </aside>
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <?php if ( is_active_sidebar( 'sidebar-footer-col-4' ) ) : ?>
                        <aside>
                            <?php dynamic_sidebar( 'sidebar-footer-col-4' ); ?>
                        </aside>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>