<?php get_header(); ?>

<?php

include_once get_stylesheet_directory() . '/inc/class-demo.php';

$demo = new RWD_Enigma\Demo();
$colors = $demo->get_colors();

// dd($colors);

?>

<?php if ($colors['primary']) : ?>

<style>
    
    .header-default.has-scrolled {
        background-color: <?php echo $colors['primary']; ?>;
    }

    .heading-group .hdln-2 {
        color: <?php echo $colors['dark']; ?>;
    }

    .rwd-btn {
        background-color: <?php echo $colors['dark']; ?>;
        color: <?php echo $colors['light']; ?>;
    }

    .rwd-btn:hover {
        background-color: <?php echo $colors['primary']; ?>;
    }

</style>

<?php endif; ?>

<?php 

// $protected = new ProtectedPage();

// $login_failed = false;

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $attempt_login = $protected->attempt_login();
//     $login_failed = !$attempt_login;
// }

// // If a password is required, enforce it
// if ($protected->require_access() && !$protected->has_access()) {
    
//     get_template_part('template-parts/login-form', null, [
//         'login_failed' => $login_failed
//     ]);

//     get_footer();
//     exit;

// }

?>

<?php the_content(); ?>

<?php get_footer(); ?>
