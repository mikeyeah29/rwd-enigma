<?php
/**
 * Default Header Template
 */
?>

<style>
    .header-default__menu-mobile-burger {
        background-color: #fff;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .header-default__menu-mobile-burger span {
        width: 10px;
        height: 10px;
        background-color: #000;
        display: block;
    }
    .header-default__menu-mobile-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #fff;
        padding: 20px;
        z-index: 100;
    }
    .header-default__menu-mobile-menu.is-active {
        display: block;
    }
</style>

<header class="header-default <?php echo true ? 'is-sticky' : ''; ?>">

    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center">
            <div class="header-default__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <h1><?php bloginfo('name'); ?></h1>
                    <?php endif; ?>
                </a>
            </div>

            <div>

                <div class="header-default__menu d-none d-md-block">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'header-default__menu-list')); ?>
                </div>

                <div class="header-default__menu-mobile d-md-none">

                    <button class="header-default__menu-mobile-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="header-default__menu-mobile-menu">
                        <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'header-default__menu-list')); ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

</header>


<script>
    window.addEventListener('scroll', function() {
        var header = document.querySelector('.header-default');
        if (window.scrollY > (window.innerHeight - 200)) {
            header.classList.add('has-scrolled');
        } else {
            header.classList.remove('has-scrolled');
        }
    });


    const burger = document.querySelector('.header-default__menu-mobile-burger');
    const menu = document.querySelector('.header-default__menu-mobile-menu');

    burger.addEventListener('click', function() {

        console.log('click');

        menu.classList.toggle('is-active');
        burger.classList.toggle('is-active');
    });

</script>