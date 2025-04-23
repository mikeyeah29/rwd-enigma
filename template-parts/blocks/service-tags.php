<?php

$attributes = $args['attributes'] ?? [];

$background_color_class = RWD_Enigma_GutenbergHelpers::get_background_color_class($attributes);
$text_color_class = RWD_Enigma_GutenbergHelpers::get_text_color_class($attributes);
$padding_class = RWD_Enigma_GutenbergHelpers::get_padding_classes($attributes, 'py-large');
$block_classes = $background_color_class . ' ' . $text_color_class . ' ' . $padding_class;

$subheading = $attributes['subheading'] ?? '';
$heading = $attributes['heading'] ?? 'What I can help you with';

$tags = $attributes['tags'] ?? [
    'Relationship issues/conflict',
    'Developing self awareness',
    'Low self esteem',
    'Low self confidence/self worth',
    'Attachment issues',
    'Spectrum disorders',
    'Victims of abuse',
    'Addiction',
    'Grief or loss',
    'Fear/anxiety',
    'Anger',
    'Shame and guilt',
    'Anxiety including General and Social Anxiety',
];

?>

<div class="service-tags <?php echo $block_classes; ?>" data-aos="fade-up" data-aos-duration="1000">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 therapy-section">
                <?php get_template_part('template-parts/components/heading-group', null, array(
                    'subheading' => $subheading,
                    'heading' => $heading
                )); ?>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-10 col-lg-8 offset-lg-1">
                <div class="tag-cloud">
                    <?php foreach ($tags as $tag) : ?>
                        <div class="tag"><?php echo $tag; ?></div>
                    <?php endforeach; ?>
                </div>  
            </div>
        </div>

    </div>
</div>

<!-- <div class="tag-cloud">
                <div class="tag ssa-fade-in ssa-done">Relationship issues/conflict</div>
                <div class="tag ssa-fade-in ssa-done">Developing self awareness</div>
                <div class="tag ssa-fade-in ssa-done">Low self esteem</div>
                <div class="tag ssa-fade-in ssa-done">Low self confidence/self worth</div>
                <div class="tag ssa-fade-in ssa-done">Attachment issues</div>
                <div class="tag ssa-fade-in ssa-done">Spectrum disorders</div>
                <div class="tag ssa-fade-in ssa-done">Victims of abuse</div>
                <div class="tag ssa-fade-in ssa-done">Addiction</div>
                <div class="tag ssa-fade-in ssa-done">Grief or loss</div>
                <div class="tag ssa-fade-in ssa-done">Fear/anxiety</div>
                <div class="tag ssa-fade-in ssa-done">Anger</div>
                <div class="tag ssa-fade-in ssa-done">Shame and guilt</div>
                <div class="tag ssa-fade-in ssa-done">Anxiety including General and Social Anxiety</div>
            </div> -->