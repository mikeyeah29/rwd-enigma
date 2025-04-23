<?php

// dd($args);

$attributes = $args['attributes'] ?? [];

$imageUrl = $attributes['backgroundImage'] ?? get_template_directory_uri() . '/assets/img/hero-default.jpg';
$useGradientOverlay = $attributes['useGradientOverlay'] ?? true;
$quote = $attributes['quote'] ?? '“The only way to make sense out of change is to plunge into it, move with it, and join the dance”';
$author = $attributes['author'] ?? '— Alan Watts';

?>

<div class="hero-default" style="background: <?php echo $useGradientOverlay ? 'linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), ' : ''; ?>url('<?php echo $imageUrl; ?>') no-repeat center center; background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="hero-default__quote parallax">
                    <p class="hero-default__quote-text"><?php echo $quote; ?></p>
                    <p class="hero-default__quote-author"><?php echo $author; ?></p>
                </div>

                <div class="hero-default__scroll-down">
                    <?php get_template_part('template-parts/svgs/chevron-down', null, ['color' => '#ffffff']); ?>
                </div>

            </div>
        </div>
    </div>
</div>
