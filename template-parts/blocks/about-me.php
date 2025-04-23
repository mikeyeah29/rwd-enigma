<?php 

$attributes = $args['attributes'] ?? [];

$background_color_class = RWD_Enigma_GutenbergHelpers::get_background_color_class($attributes);
$text_color_class = RWD_Enigma_GutenbergHelpers::get_text_color_class($attributes);
$padding_class = RWD_Enigma_GutenbergHelpers::get_padding_classes($attributes, 'py-large');

$subheading = $attributes['subheading'] ?? 'About Me';
$heading = $attributes['heading'] ?? 'Meet Your Therapist';

$paragraph1 = $attributes['body1'] ?? 'I am a psychotherapist and personal development coach helping individuals and couples break free from limiting patterns and discover lasting transformation.';
$paragraph2 = $attributes['body2'] ?? 'With a compassionate and holistic approach, I support those who feel traditional therapy has not worked for them.';

$buttonText = $attributes['buttonText'] ?? 'Learn More About My Approach';
$buttonUrl = $attributes['buttonUrl'] ?? '#';

$imageUrl = $attributes['imageUrl'] ?? 'https://emilianasilvestri.com/wp-content/uploads/2022/02/head-shot.jpg';

$listItems = $attributes['listItems'] ?? [
    'Holistic & Practical Approach',
    'Global Clientele – Sessions Worldwide',
    'Personal Development & Psychotherapy',
    'Sex & Relationship Therapy'
];

?>

<section class="section about-section <?php echo $padding_class; ?>" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 text-center">
                <div class="position-relative about-image-wrapper parallax" data-rellax-speed="1" data-rellax-percentage="0.5">

                    <div class="d-lg-none">
                        <?php get_template_part('template-parts/components/heading-group', null, array(
                            'subheading' => $subheading,
                            'heading' => $heading
                        )); ?>
                    </div>

                    <img src="<?php echo $imageUrl; ?>" class="img-fluid" alt="Therapist" data-aos="fade-up" data-aos-duration="1000">

                </div>
            </div>

            <div class="col-lg-6">

                <!-- <div class="d-flex flex-column"> -->

                    <div class="d-none d-lg-block">
                        <?php get_template_part('template-parts/components/heading-group', null, array(
                            'subheading' => $subheading,
                            'heading' => $heading
                        )); ?>
                    </div>

                    <div>
                        <p><?php echo $paragraph1; ?></p>
                    </div>

                    <ul class="list-unstyled">
                        <?php foreach ($listItems as $item) : ?>
                            <li>&check; <?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <a href="<?php echo $buttonUrl; ?>" class="rwd-btn mt-3"><?php echo $buttonText; ?></a>

                <!-- </div> -->
            </div>
            
        </div>
    </div>
</section>

