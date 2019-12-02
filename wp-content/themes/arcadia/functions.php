<?php
  // register custom menus
      function register_my_menus() {
      register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );

  // bulma navwalker
    require_once('navwalker.php');
      register_nav_menus( array(
          'primary' => __( 'Primary Menu', 'menuname' ),
      ) );

  // include custom styles
    function loadMyScripts()
    {
    	wp_register_script( 'theme-scripts', 'js/script.js' );
    	wp_enqueue_script( 'script' );
    }

    add_action( 'wp_enqueue_scripts','loadMyScripts' );

    function my_assets() {
    	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'style' ) );
    	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );

    	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'bulma' ) );
    	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/bulma-0.6.2/css/bulma.css.map' );

      wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/website-scripts.js', array( 'jquery' ), '1.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'my_assets' );

    add_action( 'wp_enqueue_scripts', 'add_my_script' );
    function add_my_script() {
        wp_enqueue_script(
            'script',
            get_template_directory_uri() . '/js/script.js',
            array('jquery')
        );
    }

  // include custom jQuery
    function shapeSpace_include_custom_jquery() {

    	wp_deregister_script('jquery');
    	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

    }
    add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

  add_action( 'init', 'create_tag_taxonomies', 0 );

  //create two taxonomies, genres and tags for the post type "tag"
  function create_tag_taxonomies()
  {
    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
      'name' => _x( 'Tags', 'taxonomy general name' ),
      'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Tags' ),
      'popular_items' => __( 'Popular Tags' ),
      'all_items' => __( 'All Tags' ),
      'parent_item' => null,
      'parent_item_colon' => null,
      'edit_item' => __( 'Edit Tag' ),
      'update_item' => __( 'Update Tag' ),
      'add_new_item' => __( 'Add New Tag' ),
      'new_item_name' => __( 'New Tag Name' ),
      'separate_items_with_commas' => __( 'Separate tags with commas' ),
      'add_or_remove_items' => __( 'Add or remove tags' ),
      'choose_from_most_used' => __( 'Choose from the most used tags' ),
      'menu_name' => __( 'Tags' ),
    );

    register_taxonomy('tag',array(
      'hierarchical' => false,
      'labels' => $labels,
      'show_ui' => true,
      'update_count_callback' => '_update_post_term_count',
      'query_var' => true,
      'rewrite' => array( 'slug' => 'tag' ),
    ));
  }

  function exclude_post_categories($excl='', $spacer=' '){
   $categories = get_the_category($post->ID);
      if(!empty($categories)){
        $exclude=$excl;
        $exclude = explode(",", $exclude);
        $thecount = count(get_the_category()) - count($exclude);
        foreach ($categories as $cat) {
            $html = '';
            if(!in_array($cat->cat_ID, $exclude)) {
                $html .= '<a href="' . get_category_link($cat->cat_ID) . '" ';
                $html .= 'title="' . $cat->cat_name . '">' . $cat->cat_name . '</a>';
                if($thecount>1){
                    $html .= $spacer;
                }
            $thecount--;
            echo $html;
            }
          }
      }
}

 ?>
