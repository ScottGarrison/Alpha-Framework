<?php
/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @package Starter
 */
 
function starter_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'starter' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
}

add_action( 'widgets_init', 'starter_widgets_init' );