<?php
add_action('wp_enqueue_scripts', 'twentytwentyonechild_enqueue_styles');
add_action('widgets_init', 'twentytwentyonechild_widgets_init');

function twentytwentyonechild_enqueue_styles(){
	wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() .'/style.css');
	wp_enqueue_style('twenty-twenty-one-child-style', get_stylesheet_uri());
}


function twentytwentyonechild_widgets_init() {
  register_sidebar(
    array(
      'name' => 'Home content',
      'id' => 'home_content_1',
      'before_widget' => '<section class="widget">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    )
  );
  register_widget('RecentWork_Widget');
}

//WIDGET STUFF
class RecentWork_Widget extends WP_Widget {
  function __construct() {
    parent::__construct(
      'recentwork_widget',
      'Most Recent Work',
      array(
        'description' => __( 'Display most recent work', 'text_domain' )
      )
    );
  }

  public function widget( $args, $instance ) {
    echo $args['before_widget']; 
	echo '<div class=project-widget">';
	
    if (!empty( $instance['title'] )) {
      echo $args ['before_title'] . apply_filters('widget_title', $instance['title']) .
	  $args ['after_title'] ;
    }
   
    $params = array(
      'posts_per_page' => 3,
      'offset' => 0,
      'category_name' => 'work',
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'post',
      'post_status' => 'publish'
    );
    $work = get_posts($params);
    foreach ($work as $w) {
      setup_postdata($w);
      echo '<div class="project">';
	   echo '<div class="project-thumbnail">';
	   echo get_the_post_thumbnail ($w, 'full');
	   echo '</div>';
	   echo '<h3 class="project-title">' . apply_filters('the_title', $w->post_title) . '</h3>';
	   echo '</div>'; 
    }
	wp_reset_postdata();
	echo '</div>';
    echo $args ['after_widget'];
	}
	public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
        $title = $instance[ 'title' ];
    }
    else {
        $title = __( 'New title', 'text_domain' );
    }
    ?>
    <div>
        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </div>
    <?php
	}
	public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
	}
}



