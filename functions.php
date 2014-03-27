<?php 
/* MENUS */ 

function register_menus() {
  register_nav_menus(
  	array(
  	  'main_nav' => 'Main Menu'
  	)
  );
}

add_action( 'init', 'register_menus' );

function arphabet_widgets_init() {

  register_sidebar( array(
    'name' => 'Home right sidebar',
    'id' => 'home_right_1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/* SHORTCODE */ 
function hr_shortcode() {
    return '<div class="hr"></div>';
}
add_shortcode('hr','hr_shortcode');

/*BREADCRUMBS */

function the_breadcrumb() {
    echo '<ul id="crumbs">';
  if (!is_home()) {
    echo '<li><a href="';
    echo get_option('home');
    echo '">';
    echo 'Home';
    echo "</a></li>";
    if (is_category() || is_single()) {
      echo '<li>';
      the_category(' </li><li> ');
      if (is_single()) {
        echo "</li><li>";
        the_title();
        echo '</li>';
      }
    } elseif (is_page()) {
      echo '<li>';
      echo the_title();
      echo '</li>';
    }
  }
  elseif (is_tag()) {single_tag_title();}
  elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
  elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
  elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
  elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
  elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
  elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
  echo '</ul>';
}

/*SMOOTH SCROLL*/
wp_enqueue_script( 'smoothup', get_template_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), '',  true );
?>