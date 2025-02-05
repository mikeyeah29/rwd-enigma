<?php get_header(); ?>

<div class="hero-default" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-default.jpg') no-repeat center center; background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="hero-default__quote">
                    <p class="hero-default__quote-text">“The only way to make sense out of change is to plunge into it, move with it, and join the dance”</p>
                    <p class="hero-default__quote-author">— Alan Watts</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/blocks/about-me'); ?>

<!-- TV Appearances Section -->
<section class="section" id="media">
    <div class="container text-center">
        <p class="scribble">Media</p>
        <h2>As Seen On</h2>
        <p class="lead">Featured on leading platforms sharing insights on mindfulness, mental wellness, and spiritual growth.</p>
        <div class="row justify-content-center">
            <div class="col-md-3 col-6">
                <img src="https://source.unsplash.com/150x50/?logo,news" class="img-fluid my-2" alt="TV Network 1">
            </div>
            <div class="col-md-3 col-6">
                <img src="https://source.unsplash.com/150x50/?logo,tv" class="img-fluid my-2" alt="TV Network 2">
            </div>
            <div class="col-md-3 col-6">
                <img src="https://source.unsplash.com/150x50/?logo,media" class="img-fluid my-2" alt="TV Network 3">
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/components/svg-curve'); ?>

<?php get_footer(); ?>
