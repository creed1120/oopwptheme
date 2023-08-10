<?php
/**
* Registers Sidebars
* 
* @package wpadvancedtheme
* 
*/

namespace WPADVANCEDTHEME\Includes;

use WPADVANCEDTHEME\Includes\Traits\Singleton;

class Sidebars {
    use Singleton;

    protected function __construct() {
        // loads the class methods below
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Actions
         */
        add_action( 'widgets_init', [ $this, 'register_sidebars' ] );
        add_action( 'widgets_init', [ $this, 'wpat_register_widgets' ] );
    }

    public function register_sidebars() {

        register_sidebar( [
            'name'          => __( 'Single Sidebar', 'wpadvancedtheme' ),
            'id'            => 'sidebar-single',
            'description'   => __( 'Widgets in this area will be shown on single posts and pages.', 'wpadvancedtheme' ),
            'before_widget' => '<div id="%1$s" class="widget single-sidebar %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="sidebarsingle">',
            'after_title'   => '</h2>',
        ] );

        register_sidebar( [
            'name'          => __( 'Footer Sidebar Column 1', 'wpadvancedtheme' ),
            'id'            => 'sidebar-footer-col-1',
            'description'   => __( 'Widgets in this area will be shown in the footer posts and pages.', 'wpadvancedtheme' ),
            'before_widget' => '<div id="%1$s" class="widget footer-sidebar-col-1 cell column %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="sidebarfooter-col-1">',
            'after_title'   => '</h2>',
        ] );

        register_sidebar( [
            'name'          => __( 'Footer Sidebar Column 2', 'wpadvancedtheme' ),
            'id'            => 'sidebar-footer-col-2',
            'description'   => __( 'Widgets in this area will be shown in the footer posts and pages.', 'wpadvancedtheme' ),
            'before_widget' => '<div id="%1$s" class="widget footer-sidebar-col-2 cell column %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="sidebarfooter-col-2">',
            'after_title'   => '</h2>',
        ] );

        register_sidebar( [
            'name'          => __( 'Footer Sidebar Column 3', 'wpadvancedtheme' ),
            'id'            => 'sidebar-footer-col-3',
            'description'   => __( 'Widgets in this area will be shown in the footer posts and pages.', 'wpadvancedtheme' ),
            'before_widget' => '<div id="%1$s" class="widget footer-sidebar-col-3 cell column %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="sidebarfooter-col-3">',
            'after_title'   => '</h2>',
        ] );

        register_sidebar( [
            'name'          => __( 'Footer Sidebar Column 4', 'wpadvancedtheme' ),
            'id'            => 'sidebar-footer-col-4',
            'description'   => __( 'Widgets in this area will be shown in the footer posts and pages.', 'wpadvancedtheme' ),
            'before_widget' => '<div id="%1$s" class="widget footer-sidebar-col-4 cell column %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="sidebarfooter-col-4">',
            'after_title'   => '</h2>',
        ] );

    }

    public function wpat_register_widgets() {
        register_widget( 'WPADVANCEDTHEME\Includes\Clock_Widget' );
    }

}