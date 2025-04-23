<?php

$attributes = $args['attributes'] ?? [];

$background_color_class = RWD_Enigma_GutenbergHelpers::get_background_color_class($attributes);
$text_color_class = RWD_Enigma_GutenbergHelpers::get_text_color_class($attributes);
$padding_class = RWD_Enigma_GutenbergHelpers::get_padding_classes($attributes, 'py-large');
$block_classes = $background_color_class . ' ' . $text_color_class . ' ' . $padding_class;

$subheading = $attributes['subheading'] ?? 'Media';
$heading = $attributes['heading'] ?? 'As Seen On';
$body = $attributes['body'] ?? 'Emiliana is a best selling author, psychotherapist, and Tv personality who regularly appears on television and radio giving advice, debating about love, sex and the trials and tribulations of being in a relationship.';
$iframeUrl = $attributes['iframeUrl'] ?? 'https://www.youtube.com/embed/YG2gJeZJiT4?si=vVP3pGjyZ2M_VRm-';
$buttons = $attributes['buttons'] ?? [];
$logos = $attributes['logos'] ?? [];

// dd($buttons);

?>

<section class="media-section <?php echo $block_classes; ?>">

    <div class="container" data-aos="fade-up" data-aos-duration="1000">

        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="heading-group">
                    <?php if ($subheading) : ?>
                        <p class="font-display text-white"><?php echo $subheading; ?></p>
                    <?php endif; ?>
                    <h2 class="hdln-2 text-white"><?php echo $heading; ?></h2>
                </div>
                <?php if ($body) : ?>
                    <p class="text-white"><?php echo $body; ?></p>
                <?php endif; ?>
                <!-- <p class="text-white">Emiliana is a best selling author, psychotherapist, and Tv personality who regularly appears on television and radio giving advice, debating about love, sex and the trials and tribulations of being in a relationship.</p>
                <p class="text-white">Emiliana has made countless appearances on live television and radio, as well as being featured in numerous newspapers, magazines, and online articles including her own newspaper column on love and dating.</p>
                <p class="text-white">She made her debut television appearance on ITV’s This Morning show and more recent years, Good Morning Britain. Emiliana is the international go to expert for any matters that deal with love, relationships, and sex.</p> -->
            </div>
            <div class="col-lg-6">

                <div class="parallax" data-rellax-speed="1" data-rellax-percentage="0.5">

                    <div class="iframe-wrapper">
                        <iframe src="<?php echo $iframeUrl; ?>" frameborder="0" allowfullscreen></iframe>
                    </div>


                </div>

                <div class="d-flex flex-wrap">
                    <a href="media.html" class="rwd-btn rwd-btn--accent mt-3 mr-3" style="margin-right: 10px;">Watch on ITV</a>
                    <a href="media.html" class="rwd-btn rwd-btn--accent mt-3 mr-3" style="margin-right: 10px;">Listen on BBC Radio</a>
                    <a href="media.html" class="rwd-btn rwd-btn--accent mt-3 mr-3" style="margin-right: 10px;">Other Media</a>
                </div>

            </div>
        </div>


        <div class="media-logos">
            <div class="row">
                <div class="logo-slider">
                    <div class="container">
                        <div class="logo-carousel">
                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-1.png" alt="Logo 1"></div>
                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-2.png" alt="Logo 2"></div>
                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-3.png" alt="Logo 3"></div>
                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-4.png" alt="Logo 4"></div>
                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-5.png" alt="Logo 5"></div>
                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-6.png" alt="Logo 6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    jQuery(document).ready(function($) {
        $('.logo-carousel').slick({
            centerMode: true,
            slidesToShow: 4,
            focusOnSelect: true,
            pauseOnHover: false,
            autoplay: true, // Enable automatic scrolling
            autoplaySpeed: 0,
            speed: 10000,
            cssEase: "linear",
            infinite: true,
            arrows: false,
            dots: false,
            variableWidth: true
        });
    });
</script>