<?php

/**
 * Custom School details widget using info from ACF options page
 * http://codex.wordpress.org/Widgets_API
 */

class school_widget extends WP_Widget {

  /**
   * Setup widget name & description
   */
  public function __construct() {
    $widget_ops = array(
      'classname' => 'school_widget',
      'description' => 'Displays ACF global school details',
    );
    parent::__construct( 'school_widget', 'School details', $widget_ops );
  }

  /**
   * Outputs widget content
   */
  public function widget( $args, $instance ) {
    echo '<h2>' , _e( 'School details', 'ysgoltrewen' ) , '</h2>';
    echo the_field('address', 'option');
    echo '<dl class="deflist">';
    echo '<dt>' , _e( 'Telephone', 'ysgoltrewen' )  , ':</dt>';
    echo '<dd><a href="tel:', the_field('tel_no', 'option') , '">' , the_field('tel_display', 'option') , '</a></dd><br>';
    echo '<dt>' , _e( 'Email', 'ysgoltrewen' ) , ':</dt>';
    echo '<dd><a href="mailto:', the_field('email', 'option') , '">' , the_field('email', 'option') , '</a></dd><br>';
    echo '<dt>' , _e( 'Headteacher', 'ysgoltrewen' ) , ':</dt>';
    echo '<dd>' , the_field('head_teacher', 'option') , '</dd><br>';
    echo '<dt>' , _e( 'Language', 'ysgoltrewen' ) , ':</dt>';
    echo '<dd>' , the_field('language', 'option') , '</dd><br>';
    echo '<dt>' , _e( 'Age range', 'ysgoltrewen' ) , ':</dt>';
    echo '<dd>' , the_field('age_range', 'option') , '</dd><br>';
    echo '<dt>' , _e( 'Number of pupils', 'ysgoltrewen' ) , ': </dt>';
    echo '<dd>' , the_field('number_pupils', 'option') , '</dd><br>';
    echo '</dl>';
  }
}

add_action( 'widgets_init', function(){
  register_widget( 'school_widget' );
});

?>
