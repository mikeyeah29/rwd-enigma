<?php

$attributes = $args['attributes'] ?? [];

$background_color_class = RWD_Enigma_GutenbergHelpers::get_background_color_class($attributes);
$text_color_class = RWD_Enigma_GutenbergHelpers::get_text_color_class($attributes);
$padding_class = RWD_Enigma_GutenbergHelpers::get_padding_classes($attributes, 'py-large');
$block_classes = $background_color_class . ' ' . $text_color_class . ' ' . $padding_class;

$subheading = $attributes['subheading'] ?? 'Client Experiences';
$heading = $attributes['heading'] ?? 'From Those I\'ve Worked With';

$backgroundImage = $attributes['backgroundImage'] ?? '';
$limit = $attributes['limit'] ?? 8;

$testimonials = array(
    array(
        'quote' => 'Sometimes in sessions I feel Emiliana is so in tune with me that, for a while, she was the only place I could feel safe. Gently she has held a metaphorical mirror up and shown me exactly who I am and how to get me back. I can never repay her for that.',
        'name' => 'Anonymous'
    ),
    array(  
        'quote' => 'Having tried many different therapists over the last 20 years, I always felt like I was wasting my time and money, until a friend referred me to Emiliana. She provided a different experience, a warm, inviting and safe place for me to talk about my deepest issues and also navigating the daily challenges that life brings. I genuinely believe that my life is better having spent time with her and I look forward to my sessions with her. I recommend her to friends and family without hesitation and whoever may need help you are in good hands with Emiliana.',
        'name' => 'Anonymous'
    ),
    array(
        'quote' => 'I’m a 34-year-old man who travels a lot and operates multiple businesses. Along the journey I’ve had several therapists. None have come close to the advancement and transformation I have experienced with Emiliana. Not only is she a phenomenal therapist but also a wonderful human being. Thank you Emiliana, you’re the best!',
        'name' => 'Anonymous'
    ),
    array(
        'quote' => 'Thanks to Emiliana, I’m not walking around with a mask. Emiliana helped me understand my behaviours and to understand others\' behaviours whilst loving myself for who I truly am and with the ability to be my true self. She’s a true work of art.',
        'name' => 'Anonymous'
    ),
    array(
        'quote' => 'I have had the opportunity to work with Emiliana for over a year now and I am incredibly grateful that we connected. She has been very helpful and I have been able to navigate smoothly and successfully through some very challenging situations as a result of our sessions. I have recommended her to several of my friends.',
        'name' => 'Anonymous'
    ),
    array(
        'quote' => 'Emiliana has opened my eyes and made me aware of a part of myself I had never tapped into. Her wisdom and intuition are what set her apart from other therapists I’ve seen. I wish I could keep her in my pocket.',
        'name' => 'Anonymous'
    )
);  

$style = '';
if (!empty($backgroundImage)) {
    $style = 'background: linear-gradient(45deg,rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.4)), url(' . $backgroundImage . ') no-repeat center center !important; background-size: cover !important;';
}

?>

<section class="testimonials-section <?php echo $block_classes; ?>" style="<?php echo $style; ?>">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">

        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php get_template_part('template-parts/components/heading-group', null, array(
                    'subheading' => $subheading,
                    'heading' => $heading
                )); ?>
                
                <div class="testimonial-carousel">
                    <?php foreach ($testimonials as $testimonial) : ?>
                        <div>
                            <div class="testimonial d-flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.svg" alt="Quote" class="quote-svg">
                                <p><?php echo $testimonial['quote']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>

    </div>
</section>

<script>
        jQuery(document).ready(function($){
            $('.testimonial-carousel').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                arrows: false,
                dots: true,
                adaptiveHeight: true,
                centerMode: false,
            });
        });
    </script>