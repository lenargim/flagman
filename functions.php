<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if (version_compare($GLOBALS['wp_version'], '5.3', '<')) {
  require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('twenty_twenty_one_setup')) {
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   *
   * @return void
   * @since Twenty Twenty-One 1.0
   *
   */
  function twenty_twenty_one_setup()
  {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Twenty Twenty-One, use a find and replace
     * to change 'twentytwentyone' to the name of your theme in all the template files.
     */
    load_theme_textdomain('twentytwentyone', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * This theme does not use a hard-coded <title> tag in the document head,
     * WordPress will provide it for us.
     */
    add_theme_support('title-tag');

    /**
     * Add post-formats support.
     */
    add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1568, 9999);

    register_nav_menus(
        array(
            'primary' => esc_html__('Primary menu', 'twentytwentyone'),
            'footer' => esc_html__('Secondary menu', 'twentytwentyone'),
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
        )
    );

    /*
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    $logo_width = 300;
    $logo_height = 100;

    add_theme_support(
        'custom-logo',
        array(
            'height' => $logo_height,
            'width' => $logo_width,
            'flex-width' => true,
            'flex-height' => true,
            'unlink-homepage-logo' => true,
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for Block Styles.
    //add_theme_support('wp-block-styles');

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for editor styles.
    add_theme_support('editor-styles');
    $background_color = get_theme_mod('background_color', 'D1E4DD');
    if (127 > Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex($background_color)) {
      add_theme_support('dark-editor-style');
    }

    $editor_stylesheet_path = './assets/css/style-editor.css';

    // Note, the is_IE global variable is defined by WordPress and is used
    // to detect if the current browser is internet explorer.
    global $is_IE;
    if ($is_IE) {
      $editor_stylesheet_path = './assets/css/ie-editor.css';
    }

    // Enqueue editor styles.
    add_editor_style($editor_stylesheet_path);

    // Add custom editor font sizes.
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name' => esc_html__('Extra small', 'twentytwentyone'),
                'shortName' => esc_html_x('XS', 'Font size', 'twentytwentyone'),
                'size' => 16,
                'slug' => 'extra-small',
            ),
            array(
                'name' => esc_html__('Small', 'twentytwentyone'),
                'shortName' => esc_html_x('S', 'Font size', 'twentytwentyone'),
                'size' => 18,
                'slug' => 'small',
            ),
            array(
                'name' => esc_html__('Normal', 'twentytwentyone'),
                'shortName' => esc_html_x('M', 'Font size', 'twentytwentyone'),
                'size' => 20,
                'slug' => 'normal',
            ),
            array(
                'name' => esc_html__('Large', 'twentytwentyone'),
                'shortName' => esc_html_x('L', 'Font size', 'twentytwentyone'),
                'size' => 24,
                'slug' => 'large',
            ),
            array(
                'name' => esc_html__('Extra large', 'twentytwentyone'),
                'shortName' => esc_html_x('XL', 'Font size', 'twentytwentyone'),
                'size' => 40,
                'slug' => 'extra-large',
            ),
            array(
                'name' => esc_html__('Huge', 'twentytwentyone'),
                'shortName' => esc_html_x('XXL', 'Font size', 'twentytwentyone'),
                'size' => 96,
                'slug' => 'huge',
            ),
            array(
                'name' => esc_html__('Gigantic', 'twentytwentyone'),
                'shortName' => esc_html_x('XXXL', 'Font size', 'twentytwentyone'),
                'size' => 144,
                'slug' => 'gigantic',
            ),
        )
    );

    // Custom background color.
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'd1e4dd',
        )
    );

    // Editor color palette.
    $black = '#000000';
    $dark_gray = '#28303D';
    $gray = '#39414D';
    $green = '#D1E4DD';
    $blue = '#D1DFE4';
    $purple = '#D1D1E4';
    $red = '#E4D1D1';
    $orange = '#E4DAD1';
    $yellow = '#EEEADD';
    $white = '#FFFFFF';

    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name' => esc_html__('Black', 'twentytwentyone'),
                'slug' => 'black',
                'color' => $black,
            ),
            array(
                'name' => esc_html__('Dark gray', 'twentytwentyone'),
                'slug' => 'dark-gray',
                'color' => $dark_gray,
            ),
            array(
                'name' => esc_html__('Gray', 'twentytwentyone'),
                'slug' => 'gray',
                'color' => $gray,
            ),
            array(
                'name' => esc_html__('Green', 'twentytwentyone'),
                'slug' => 'green',
                'color' => $green,
            ),
            array(
                'name' => esc_html__('Blue', 'twentytwentyone'),
                'slug' => 'blue',
                'color' => $blue,
            ),
            array(
                'name' => esc_html__('Purple', 'twentytwentyone'),
                'slug' => 'purple',
                'color' => $purple,
            ),
            array(
                'name' => esc_html__('Red', 'twentytwentyone'),
                'slug' => 'red',
                'color' => $red,
            ),
            array(
                'name' => esc_html__('Orange', 'twentytwentyone'),
                'slug' => 'orange',
                'color' => $orange,
            ),
            array(
                'name' => esc_html__('Yellow', 'twentytwentyone'),
                'slug' => 'yellow',
                'color' => $yellow,
            ),
            array(
                'name' => esc_html__('White', 'twentytwentyone'),
                'slug' => 'white',
                'color' => $white,
            ),
        )
    );

    add_theme_support(
        'editor-gradient-presets',
        array(
            array(
                'name' => esc_html__('Purple to yellow', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
                'slug' => 'purple-to-yellow',
            ),
            array(
                'name' => esc_html__('Yellow to purple', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
                'slug' => 'yellow-to-purple',
            ),
            array(
                'name' => esc_html__('Green to yellow', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
                'slug' => 'green-to-yellow',
            ),
            array(
                'name' => esc_html__('Yellow to green', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
                'slug' => 'yellow-to-green',
            ),
            array(
                'name' => esc_html__('Red to yellow', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
                'slug' => 'red-to-yellow',
            ),
            array(
                'name' => esc_html__('Yellow to red', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
                'slug' => 'yellow-to-red',
            ),
            array(
                'name' => esc_html__('Purple to red', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
                'slug' => 'purple-to-red',
            ),
            array(
                'name' => esc_html__('Red to purple', 'twentytwentyone'),
                'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
                'slug' => 'red-to-purple',
            ),
        )
    );

    /*
    * Adds starter content to highlight the theme on fresh sites.
    * This is done conditionally to avoid loading the starter content on every
    * page load, as it is a one-off operation only needed once in the customizer.
    */
    if (is_customize_preview()) {
      require get_template_directory() . '/inc/starter-content.php';
      add_theme_support('starter-content', twenty_twenty_one_get_starter_content());
    }

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');

    // Add support for custom line height controls.
    add_theme_support('custom-line-height');

    // Add support for experimental link color control.
    add_theme_support('experimental-link-color');

    // Add support for experimental cover block spacing.
    add_theme_support('custom-spacing');

    // Add support for custom units.
    // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
    add_theme_support('custom-units');

    // Remove feed icon link from legacy RSS widget.
    add_filter('rss_widget_feed_link', '__return_false');
  }
}
add_action('after_setup_theme', 'twenty_twenty_one_setup');

/**
 * Register widget area.
 *
 * @return void
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @since Twenty Twenty-One 1.0
 *
 */
function twenty_twenty_one_widgets_init()
{

  register_sidebar(
      array(
          'name' => esc_html__('Footer', 'twentytwentyone'),
          'id' => 'sidebar-1',
          'description' => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',
      )
  );
}

add_action('widgets_init', 'twenty_twenty_one_widgets_init');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @return void
 * @global int $content_width Content width.
 *
 * @since Twenty Twenty-One 1.0
 *
 */
function twenty_twenty_one_content_width()
{
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters('twenty_twenty_one_content_width', 750);
}

add_action('after_setup_theme', 'twenty_twenty_one_content_width', 0);

/**
 * Enqueue scripts and styles.
 *
 * @return void
 * @since Twenty Twenty-One 1.0
 *
 */
function twenty_twenty_one_scripts()
{
  // Note, the is_IE global variable is defined by WordPress and is used
  // to detect if the current browser is internet explorer.
  global $is_IE, $wp_scripts;


  // RTL styles.
  wp_style_add_data('twenty-twenty-one-style', 'rtl', 'replace');

  // Print styles.
  //wp_enqueue_style('twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get('Version'), 'print');

  // Threaded comment reply styles.
  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  // Register the IE11 polyfill file.
  wp_register_script(
      'twenty-twenty-one-ie11-polyfills-asset',
      get_template_directory_uri() . '/assets/js/polyfills.js',
      array(),
      wp_get_theme()->get('Version'),
      true
  );

  // Register the IE11 polyfill loader.
  wp_register_script(
      'twenty-twenty-one-ie11-polyfills',
      null,
      array(),
      wp_get_theme()->get('Version'),
      true
  );
  wp_add_inline_script(
      'twenty-twenty-one-ie11-polyfills',
      wp_get_script_polyfill(
          $wp_scripts,
          array(
              'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
          )
      )
  );

//  // Main navigation scripts.
//  if (has_nav_menu('primary')) {
//    wp_enqueue_script(
//        'twenty-twenty-one-primary-navigation-script',
//        get_template_directory_uri() . '/assets/js/primary-navigation.js',
//        array('twenty-twenty-one-ie11-polyfills'),
//        wp_get_theme()->get('Version'),
//        true
//    );
//  }

  // Responsive embeds script.
  wp_enqueue_script(
      'twenty-twenty-one-responsive-embeds-script',
      get_template_directory_uri() . '/assets/js/responsive-embeds.js',
      array('twenty-twenty-one-ie11-polyfills'),
      wp_get_theme()->get('Version'),
      true
  );
}

//add_action('wp_enqueue_scripts', 'twenty_twenty_one_scripts');

/**
 * Enqueue block editor script.
 *
 * @return void
 * @since Twenty Twenty-One 1.0
 *
 */
function twentytwentyone_block_editor_script()
{

  wp_enqueue_script('twentytwentyone-editor', get_theme_file_uri('/assets/js/editor.js'), array('wp-blocks', 'wp-dom'), wp_get_theme()->get('Version'), true);
}

add_action('enqueue_block_editor_assets', 'twentytwentyone_block_editor_script');

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://git.io/vWdr2
 */
function twenty_twenty_one_skip_link_focus_fix()
{

  // If SCRIPT_DEBUG is defined and true, print the unminified file.
  if (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
    echo '<script>';
    include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
    echo '</script>';
  } else {
    // The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
    ?>
    <script>
      /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", (function () {
        var t, e = location.hash.substring(1);
        /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
      }), !1);
    </script>
    <?php
  }
}

add_action('wp_print_footer_scripts', 'twenty_twenty_one_skip_link_focus_fix');

/**
 * Enqueue non-latin language styles.
 *
 * @return void
 * @since Twenty Twenty-One 1.0
 *
 */
function twenty_twenty_one_non_latin_languages()
{
  $custom_css = twenty_twenty_one_get_non_latin_css('front-end');

  if ($custom_css) {
    wp_add_inline_style('twenty-twenty-one-style', $custom_css);
  }
}

add_action('wp_enqueue_scripts', 'twenty_twenty_one_non_latin_languages');

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @return void
 * @since Twenty Twenty-One 1.0
 *
 */
function twentytwentyone_customize_preview_init()
{
  wp_enqueue_script(
      'twentytwentyone-customize-helpers',
      get_theme_file_uri('/assets/js/customize-helpers.js'),
      array(),
      wp_get_theme()->get('Version'),
      true
  );

  wp_enqueue_script(
      'twentytwentyone-customize-preview',
      get_theme_file_uri('/assets/js/customize-preview.js'),
      array('customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers'),
      wp_get_theme()->get('Version'),
      true
  );
}

add_action('customize_preview_init', 'twentytwentyone_customize_preview_init');

/**
 * Enqueue scripts for the customizer.
 *
 * @return void
 * @since Twenty Twenty-One 1.0
 *
 */
function twentytwentyone_customize_controls_enqueue_scripts()
{

  wp_enqueue_script(
      'twentytwentyone-customize-helpers',
      get_theme_file_uri('/assets/js/customize-helpers.js'),
      array(),
      wp_get_theme()->get('Version'),
      true
  );
}

add_action('customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts');

/**
 * Calculate classes for the main <html> element.
 *
 * @return void
 * @since Twenty Twenty-One 1.0
 *
 */
function twentytwentyone_the_html_classes()
{
  /**
   * Filters the classes for the main <html> element.
   *
   * @param string The list of classes. Default empty string.
   * @since Twenty Twenty-One 1.0
   *
   */
  $classes = apply_filters('twentytwentyone_html_classes', '');
  if (!$classes) {
    return;
  }
  echo 'class="' . esc_attr($classes) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @return void
 * @since Twenty Twenty-One 1.0
 *
 */
function twentytwentyone_add_ie_class()
{
  ?>
  <script>
    if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
      document.body.classList.add('is-IE');
    }
  </script>
  <?php
}

add_action('wp_footer', 'twentytwentyone_add_ie_class');

remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');


function disable_emojis()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
  add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}

add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  }

  return array();
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array                 Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{

  if ('dns-prefetch' == $relation_type) {

    // Strip out any URLs referencing the WordPress.org emoji location
    $emoji_svg_url_bit = 'https://s.w.org/images/core/emoji/';
    foreach ($urls as $key => $url) {
      if (strpos($url, $emoji_svg_url_bit) !== false) {
        unset($urls[$key]);
      }
    }

  }
  return $urls;
}


add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
function my_theme_enqueue_scripts()
{
  //wp_dequeue_style( 'twenty-twenty-one-style' );
  wp_dequeue_style('wp-block-library-theme');
  wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
  //wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css');

  wp_enqueue_script('main-scripts', get_template_directory_uri() . '/main.min.js', array('jquery'));

  if (
          is_page_template('home.php') ||
          is_singular('services')
  ) {
    wp_enqueue_style('swiper-styles', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
    wp_enqueue_script('swiper-lib', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array('jquery'));
    wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper.js', array('swiper-lib'));
  }

}

add_action('wp_default_scripts', function ($scripts) {
  if (!empty($scripts->registered['jquery'])) {
    $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
  }
});

add_action('admin_menu', 'remove_menus');
function remove_menus()
{
  remove_menu_page('index.php');                # Консоль
  remove_menu_page('edit.php');                 # Записи
  remove_menu_page('edit-comments.php');        # Комментарии
  //remove_menu_page('edit.php?post_type=page');  # Страницы
  //remove_menu_page('upload.php');               # Медиафайлы
  //remove_menu_page('themes.php');               # Внешний вид
  //remove_menu_page('plugins.php');              # Плагины
  remove_menu_page('users.php');                # Пользователи
  remove_menu_page('tools.php');                # Инструменты
  //remove_menu_page('options-general.php');      # Настройки
  //remove_menu_page('edit.php?post_type=acf-field-group'); # ACF
}


add_action('init', 'custom_posts');
function custom_posts()
{
  register_post_type('sale', array(
      'labels' => array(
          'name' => 'Акции', // Основное название типа записи
          'singular_name' => 'Акция', // отдельное название записи типа Book
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новую акцию',
          'edit_item' => 'Редактировать акцию',
          'new_item' => 'Новая акция',
          'view_item' => 'Посмотреть акцию',
          'search_items' => 'Найти акцию',
          'not_found' => 'Акций не найдено',
          'not_found_in_trash' => 'В корзине акций не найдено',
          'parent_item_colon' => '',
          'menu_name' => 'Акции'

      ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => null,
      'menu_icon' => 'dashicons-buddicons-friends',
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
  ));


  register_post_type('services', array(
      'labels' => array(
          'name' => 'Услуги', // Основное название типа записи
          'singular_name' => 'Услуга', // отдельное название записи типа Book
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новую услугу',
          'edit_item' => 'Редактировать услугу',
          'new_item' => 'Новая услуга',
          'view_item' => 'Посмотреть услугу',
          'search_items' => 'Найти услугу',
          'not_found' => 'Услуг не найдено',
          'not_found_in_trash' => 'В корзине услуг не найдено',
          'parent_item_colon' => '',
          'menu_name' => 'Услуги'

      ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => null,
      'menu_icon' => 'dashicons-admin-tools',
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
  ));

  register_post_type('doctors', array(
      'labels' => array(
          'name' => 'Стоматологи', // Основное название типа записи
          'singular_name' => 'Врач', // отдельное название записи типа Book
          'add_new' => 'Добавить врача',
          'add_new_item' => 'Добавить врача',
          'edit_item' => 'Редактировать врача',
          'new_item' => 'Новый врач',
          'view_item' => 'Посмотреть врача',
          'search_items' => 'Найти врача',
          'not_found' => 'Врачей не найдено',
          'not_found_in_trash' => 'В корзине врачей не найдено',
          'parent_item_colon' => '',
          'menu_name' => 'Стоматологи'

      ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => null,
      'menu_icon' => 'dashicons-businessman',
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
  ));


  register_post_type('reviews', array(
      'labels' => array(
          'name' => 'Отзывы', // Основное название типа записи
          'singular_name' => 'Отзыв', // отдельное название записи типа Book
          'add_new' => 'Добавить отзыв',
          'add_new_item' => 'Добавить отзыв',
          'edit_item' => 'Редактировать отзыв',
          'new_item' => 'Новый отзыв',
          'view_item' => 'Посмотреть отзыв',
          'search_items' => 'Найти отзыв',
          'not_found' => 'Отзывов не найдено',
          'not_found_in_trash' => 'В корзине отзывов не найдено',
          'parent_item_colon' => '',
          'menu_name' => 'Отзывы'

      ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => null,
      'menu_icon' => 'dashicons-admin-comments',
      'supports' => array('title', 'editor')
  ));

  register_post_type('examples', array(
      'labels' => array(
          'name' => 'Примеры работ', // Основное название типа записи
          'singular_name' => 'Пример', // отдельное название записи типа Book
          'add_new' => 'Добавить пример',
          'add_new_item' => 'Добавить пример',
          'edit_item' => 'Редактировать пример',
          'new_item' => 'Новый пример',
          'view_item' => 'Посмотреть пример',
          'search_items' => 'Найти пример',
          'not_found' => 'Примеров не найдено',
          'not_found_in_trash' => 'В корзине примеров не найдено',
          'parent_item_colon' => '',
          'menu_name' => 'Примеры работ'

      ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => null,
      'menu_icon' => 'dashicons-tickets-alt',
      'supports' => array('title')
  ));

  register_taxonomy('specialisation', 'doctors', array(
      'hierarchical' => false,
      'labels' => array(
          'name' => _x('Услуги', 'taxonomy general name'),
          'singular_name' => _x('Услуги', 'taxonomy singular name'),
          'search_items' => __('Поиск Услуг'),
          'popular_items' => __('Популярные услуги'),
          'all_items' => __('Все услуги'),
          'parent_item' => null,
          'parent_item_colon' => null,
          'edit_item' => __('Изменить услугу'),
          'update_item' => __('Обновить услугу'),
          'add_new_item' => __('Добавить услугу'),
          'new_item_name' => __('Новая услуга'),
          'separate_items_with_commas' => __('Separate услугу with commas'),
          'add_or_remove_items' => __('Добавить или удалить услугу'),
          'choose_from_most_used' => __('Choose from the most used Услуги'),
          'menu_name' => __('Услуги'),
      ),
      'show_ui' => true,
      'query_var' => true,
    //'rewrite'       => array( 'slug' => 'the_writer' ), // свой слаг в URL
  ));
}

add_filter('wpcf7_form_elements', function ($html) {

  preg_match('~<input([^>]+)type=["\']submit["\']([^>/]+)/?>~i', $html, $match);

  if ($match) {
    $input = $match[0];
    $attr = trim($match[1] . $match[2]);

    preg_match('/value=["\']([^"\']+)/', $input, $mm);
    $button_text = $mm[1];

    $html = str_replace($input, "<button $attr>$button_text</button>", $html);
  }

  return $html;

});

