<?php
/**
 * Default Header Template
 */
?>

<header class="header-default <?php echo true ? 'is-sticky' : ''; ?>">

    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center">
            <div class="header-default__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <h1><?php bloginfo('name'); ?></h1>
                        <!-- <span class="header-default__logo-subtitle"><?php // bloginfo('description'); ?></span> -->
                    <?php endif; ?>
                </a>
            </div>

            <div class="header-default__menu">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'header-default__menu-list')); ?>
            </div>

        </div>

    </div>

</header>
