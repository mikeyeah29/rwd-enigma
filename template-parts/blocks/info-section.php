
<?php

$attributes = $args['attributes'] ?? [];

$background_color_class = RWD_Enigma_GutenbergHelpers::get_background_color_class($attributes);
$text_color_class = RWD_Enigma_GutenbergHelpers::get_text_color_class($attributes);
$padding_class = RWD_Enigma_GutenbergHelpers::get_padding_classes($attributes, 'py-large');
$block_classes = $background_color_class . ' ' . $text_color_class . ' ' . $padding_class;

$subheading = $attributes['subheading'] ?? '';
$heading = $attributes['heading'] ?? 'How Can Therapy Help';
$body = $attributes['body'] ?? 'The aim of therapy is to help you develop... ';

?>

<div class="info-section <?php echo $block_classes; ?>" data-aos="fade-up" data-aos-duration="1000">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 therapy-section">
                <div class="heading-group">
                    <?php if ($subheading) : ?>
                        <p class="font-display"><?php echo $subheading; ?></p>
                    <?php endif; ?>
                    <h2 class="hdln-2"><?php echo $heading; ?></h2>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 offset-1 offset-lg-1">
                <div>
                    <p><?php echo $body; ?></p>
                </div>
            </div>
        </div>
    </div>

</div>