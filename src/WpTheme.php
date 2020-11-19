<?php
namespace ManhPhucPro;

class WpTheme extends \ManhPhuc\Wp\ManhPhucBase\Component\WpTheme {
    /**
     * Initialize theme, add hooks to the theme
     */
    public function initialize() {
        // For frontend
        add_action( 'wp_enqueue_scripts', [ $this, 'wp_enqueue_scripts' ] );
        add_filter( 'body_class', [ $this, 'wp_body_classes' ] );
    }

    /**
     * This method called when 'wp_enqueue_scripts' fired
     * For handling javascript and stylesheets
     */
    public function wp_enqueue_scripts() {
        wp_enqueue_style( 'manhphucpro-main', $this->child_base_url . '/assets/dist/css/main.css', [], $this->version, 'all' );

        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'manhphucpro-main', $this->child_base_url . '/assets/dist/js/main.js', [ 'jquery' ], $this->version, true );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }

    /**
     * set main body class
     */
    public function wp_body_classes( $classes ) {
        $classes[] = 'yivic-main';
        return $classes;
    }

}