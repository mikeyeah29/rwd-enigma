<?php 

use RWD_Enigma\ProtectedPage as ProtectedPage;

include_once( get_template_directory() . '/inc/class-protected-page.php' );

// Instantiate the protection class
$protected = new ProtectedPage();

if($_GET['logout'] && $_GET['logout'] == 'true') {
    $protected->logout();
}

get_header(); ?>

<?php 

$login_failed = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $attempt_login = $protected->attempt_login();
    $login_failed = !$attempt_login;
}

// If a password is required, enforce it
if ($protected->require_access() && !$protected->has_access()) {
    
    get_template_part('template-parts/login-form', null, [
        'login_failed' => $login_failed
    ]);

    get_footer();
    exit;

}

?>

<?php the_content(); ?>

<?php get_footer(); ?>
