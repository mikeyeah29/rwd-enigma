<?php

$attributes = $args['attributes'] ?? [];

$background_color_class = RWD_Enigma_GutenbergHelpers::get_background_color_class($attributes);
$text_color_class = RWD_Enigma_GutenbergHelpers::get_text_color_class($attributes);
$padding_class = RWD_Enigma_GutenbergHelpers::get_padding_classes($attributes, 'py-large');
$block_classes = $background_color_class . ' ' . $text_color_class . ' ' . $padding_class;

$subheading = $attributes['subheading'] ?? 'Contact Me';
$heading = $attributes['heading'] ?? 'Get in Touch';

$supportingText = $attributes['supportingText'] ?? 'Let’s connect. I work with clients worldwide in private, judgment-free containers.';

$backgroundImage = $attributes['backgroundImage'] ?? 'https://placehold.co/600x400';

// $style = '';
// if (!empty($backgroundImage)) {
//     // $style = 'background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(' . $backgroundImage . ') no-repeat center right !important; background-size: 50% !important;';
//     $style = 'background-image: url(' . $backgroundImage . ') !important; background-size: 50% !important; background-position: center right !important; background-repeat: no-repeat !important;';
// }

?>

<div class="contact-section position-relative <?php echo $block_classes; ?>" style="<?php echo $style; ?>">

    <div class="contact-section-background-image" style="background-image: url('<?php echo $backgroundImage; ?>');"></div>

    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-6">

                <?php get_template_part('template-parts/components/heading-group', null, array(
                    'subheading' => $subheading,
                    'heading' => $heading
                )); ?>

                <p><?php echo $supportingText; ?></p>

                <form id="contact-form" class="contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="rwd-btn">Send Message</button>
                </form>
            </div>

            <div class="col-md-6 align-items-center justify-content-center p-5 d-none d-md-flex">
                <div class="quote-container">
                    <p class="txt-light" style="font-weight: 300; color: #fff;">“Some changes look negative on the surface but you will soon realize that space is being created in your life for something new to emerge.”</p>
                    <p class="quote-author txt-light" style="font-size: 20px; color: #fff;">― Eckhart Tolle</p>
                </div>
            </div>
        </div>
    </div>
    
</div>


                
