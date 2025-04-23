<?php
/**
 * Default Header Template
 */

$burger_type = get_theme_mod('burger_menu_style', 'collapse');
$header_bg_color = get_theme_mod('header_bg_color', '');
$header_text_color = get_theme_mod('header_text_color', '');
$header_blur_background = get_theme_mod('header_blur_background', false);
$header_bg_on_scroll = get_theme_mod('header_bg_on_scroll', false);

$header_bg_color_class = ($header_bg_color) ? 'has-' . $header_bg_color . '-background-color' : '';
$header_text_color_class = ($header_text_color) ? 'has-' . $header_text_color . '-color' : '';

$apply_blur_background = ($header_blur_background && !$header_bg_on_scroll) ? true : false;

$header_title = get_bloginfo('name');

if(is_singular('demo')) {
    $header_title = get_the_title();
}

?>

<header class="header-default <?php echo true ? 'is-sticky' : ''; ?> <?php echo ( !$header_bg_on_scroll ? $header_bg_color_class : '' ); ?> <?php echo ( $apply_blur_background ? 'blur-background' : '' ); ?>">

    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center">
            <div class="header-default__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <h1 class="<?php echo $header_text_color_class; ?>"><?php echo $header_title; ?></h1>
                    <?php endif; ?>
                </a>
            </div>

            <div>

                <div class="header-default__menu d-none d-md-block">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary', 
                        'container' => false, 
                        'menu_class' => 'header-default__menu-list ' . $header_text_color_class
                    )); 
                    ?>
                </div>

                <div class="header-default__menu-mobile d-md-none">

                    <button class="hamburger hamburger--<?php echo $burger_type; ?> <?php echo $header_text_color_class; ?> position-relative" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>

                    <div class="header-default__menu-mobile-menu <?php echo $header_bg_color_class; ?>">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'primary', 
                            'container' => false, 
                            'menu_class' => 'header-default__menu-list ' . $header_text_color_class
                        )); 
                        ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

</header>


<script>

    var header_background_color_class = '<?php echo $header_bg_color_class; ?>';
    var header_text_color_class = '<?php echo $header_text_color_class; ?>';
    var header_background_color_on_scroll = <?php echo ($header_bg_on_scroll) ? 'true' : 'false'; ?>;
    var header_blur_background = <?php echo ($header_blur_background) ? 'true' : 'false'; ?>;

    window.addEventListener('scroll', function() {
        var header = document.querySelector('.header-default');
        if (window.scrollY > (window.innerHeight - 200)) {
            header.classList.add('has-scrolled');
            console.log('header_background_color_on_scroll', header_background_color_on_scroll);
            if (header_background_color_on_scroll) {
                header.classList.add(header_background_color_class);
            }
            if (header_blur_background) {
                header.classList.add('blur-background');
            }
        } else {
            header.classList.remove('has-scrolled');
            if (header_background_color_on_scroll) {
                header.classList.remove(header_background_color_class);
            }
            if (header_blur_background) {
                header.classList.remove('blur-background');
            }
        }
    });


    const burger = document.querySelector('.hamburger');
    const menu = document.querySelector('.header-default__menu-mobile-menu');

    burger.addEventListener('click', function() {

        console.log('click');

        menu.classList.toggle('is-active');
        burger.classList.toggle('is-active');
    });

</script>