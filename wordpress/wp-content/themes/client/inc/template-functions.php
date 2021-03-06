<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package client
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function client_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'client_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function client_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'client_pingback_header' );


// A Custom function for get an option
if ( ! function_exists( 'prefix_get_option' ) ) {
  function prefix_get_option( $option = '', $default = null ) {
    $options = get_option( 'my_framework' ); // Attention: Set your unique id of the framework
    return ( isset( $options[$option] ) ) ? $options[$option] : $default;
  }
}
//  to include in functions.php
function the_breadcrumb()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = ' / '; // delimiter between crumbs
    $home = 'Trang chủ'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    global $post;
    $homeLink = get_bloginfo('url');
    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
    if (is_category()) {
        $thisCat = get_category(get_query_var('cat'), false);
        if ($thisCat->parent != 0) {
            echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
        }
        echo $before . single_cat_title('', false) . $after;
    } elseif (is_search()) {
        echo $before . get_search_query() . $after;
    } elseif (is_day()) {
        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('d') . $after;
    } elseif (is_month()) {
        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('F') . $after;
    } elseif (is_year()) {
        echo $before . get_the_time('Y') . $after;
    } elseif (is_single() && !is_attachment()) {
        if (get_post_type() != 'post') {
            $post_type = get_post_type_object(get_post_type());
            $slug = $post_type->rewrite;
            echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } else {
            $cat = get_the_category();
            $cat = $cat[0];
            $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
            if ($showCurrent == 0) {
                $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
            }
            echo $cats;
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        }
    } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
        $post_type = get_post_type_object(get_post_type());
        echo $before . $post_type->labels->singular_name . $after;
    } elseif (is_attachment()) {
        $parent = get_post($post->post_parent);
        $cat = get_the_category($parent->ID);
        $cat = $cat[0];
        echo get_category_parents($cat, true, ' ' . $delimiter . ' ');
        echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
        if ($showCurrent == 1) {
            echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
        }
    } elseif (is_page() && !$post->post_parent) {
        if ($showCurrent == 1) {
            echo $before . get_the_title() . $after;
        }
    } elseif (is_page() && $post->post_parent) {
        $parent_id  = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
            $parent_id  = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
            echo $breadcrumbs[$i];
            if ($i != count($breadcrumbs)-1) {
                echo ' ' . $delimiter . ' ';
            }
        }
        if ($showCurrent == 1) {
            echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
        }
    } elseif (is_tag()) {
        echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
    } elseif (is_author()) {
        global $author;
        $userdata = get_userdata($author);
        echo $before . 'Articles posted by ' . $userdata->display_name . $after;
    } elseif (is_404()) {
        echo $before . 'Error 404' . $after;
    }
    echo '</div>';
} // end the_breadcrumb()

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Khách hàng', 'Post Type General Name', 'client' ),
        'singular_name'       => _x( 'Bài viết', 'Post Type Singular Name', 'client' ),
        'menu_name'           => __( 'Khách hàng', 'client' ),
        'parent_item_colon'   => __( 'Parent Customers', 'client' ),
        'all_items'           => __( 'Tất cả Khách hàng', 'client' ),
        'view_item'           => __( 'Xem', 'client' ),
        'add_new_item'        => __( 'Thêm mới', 'client' ),
        'add_new'             => __( 'Thêm mới', 'client' ),
        'edit_item'           => __( 'Chỉnh sửa', 'client' ),
        'update_item'         => __( 'Cập nhật Khách hàng', 'client' ),
        'search_items'        => __( 'Tìm kiếm Khách hàng', 'client' ),
        'not_found'           => __( 'Not Found', 'client' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'client' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'architect', 'client' ),
        'description'         => __( 'Đánh giá của khách hàng', 'client' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'excerpt', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'architects', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );


/**
 * Check if given term has child terms
 *
 * @param Integer $term_id
 * @param String $taxonomy
 *
 * @return Boolean
 */
function category_has_children( $term_id = 0, $taxonomy = 'category' ) {
    $children = get_categories( array( 
        'child_of'      => $term_id,
        'taxonomy'      => $taxonomy,
        'hide_empty'    => false,
        'fields'        => 'ids',
    ) );
    return (is_array($children) && count($children));
}




/**
 * Retrieves the navigation to next/previous post, when applicable.
 *
 * @since 4.1.0
 * @since 4.4.0 Introduced the `in_same_term`, `excluded_terms`, and `taxonomy` arguments.
 * @since 5.3.0 Added the `aria_label` parameter.
 * @since 5.5.0 Added the `class` parameter.
 *
 * @param array $args {
 *     Optional. Default post navigation arguments. Default empty array.
 *
 *     @type string       $prev_text          Anchor text to display in the previous post link. Default '%title'.
 *     @type string       $next_text          Anchor text to display in the next post link. Default '%title'.
 *     @type bool         $in_same_term       Whether link should be in a same taxonomy term. Default false.
 *     @type int[]|string $excluded_terms     Array or comma-separated list of excluded term IDs. Default empty.
 *     @type string       $taxonomy           Taxonomy, if `$in_same_term` is true. Default 'category'.
 *     @type string       $screen_reader_text Screen reader text for the nav element. Default 'Post navigation'.
 *     @type string       $aria_label         ARIA label text for the nav element. Default 'Posts'.
 *     @type string       $class              Custom class for the nav element. Default 'post-navigation'.
 * }
 * @return string Markup for post links.
 */
function my_get_the_post_navigation( $args = array() ) {
    // Make sure the nav element has an aria-label attribute: fallback to the screen reader text.

    $args = wp_parse_args(
        $args,
        array(
            'prev_text'          => '%title',
            'next_text'          => '%title',
            'in_same_term'       => false,
            'excluded_terms'     => '',
            'taxonomy'           => 'category',
            'screen_reader_text' => __( 'Post navigation' ),
            'aria_label'         => __( 'Posts' ),
            'class'              => 'post-navigation',
        )
    );

    $navigation = '';

    $previous = get_previous_post_link(
        '<div class="nav-previous">%link</div>',
        $args['prev_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );

    $next = get_next_post_link(
        '<div class="nav-next">%link</div>',
        $args['next_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );

    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {
        $navigation = _navigation_markup( $previous . $next, $args['class'], $args['screen_reader_text'], $args['aria_label'] );
    }

    return $navigation;
}

if(!function_exists('my_get_the_category_navigation')) {
    function my_get_the_category_navigation()
    {
        // Pagniation
        global $wp_query;

        $big = 999999999; // need an unlikely integer
        echo '<nav id="pagination" class="col-sm-12">';
        echo '<span>Page '. max( 1, get_query_var('paged') ) .' / '. $wp_query->max_num_pages .'</span>';
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '/page/%#%',
            'end_size' => 0,
            'mid_size' => 4,
            'type' => 'plain',
            'current' => max( 1, get_query_var('paged') ),
            'prev_text'    => __('&laquo; Previous', 'client'),
            'next_text'    => __('Next &raquo;', 'client'),
            'total' => $wp_query->max_num_pages
        ) );
        echo '</nav>';
    }
}



if(!function_exists('dd')) {
    function dd($input)
    {
        echo '<pre>';
        var_dump($input);
        echo '</pre>';
        die;
    }
}