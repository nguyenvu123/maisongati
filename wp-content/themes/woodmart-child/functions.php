<?php
/**
 * Enqueue script and styles for child theme
 */
function woodmart_child_enqueue_styles()
{
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('woodmart-style'), woodmart_get_theme_info('Version'));
}

add_action('wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010);


define('WC_MAX_LINKED_VARIATIONS', 1000);

function woo_custom_ajax_variation_threshold($qty, $product)
{
    return 50;
}

function default_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('/wp-content/uploads/2020/09/logo-maison-gatti.png');
            height: 160px;
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            padding-bottom: 30px;
        }
    </style>
<?php }

add_action('login_enqueue_scripts', 'default_login_logo');

add_action('woodmart_after_header', 'add_top_title', 9);

function add_top_title()
{
    if (is_product_category()):
        ?>
    <div class="container brc">
        <?php  bcn_display(); ?>
    </div>
    <div class="container">
        <h1 class="title-category-page">La forme historique de Maison Gatti. </h1>
    </div>
    <?php
    endif;
}



