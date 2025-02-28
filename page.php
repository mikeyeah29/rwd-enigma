<?php get_header(); ?>

<div class="hero-default" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-default.jpg') no-repeat center center; background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="hero-default__quote parallax">
                    <p class="hero-default__quote-text">“The only way to make sense out of change is to plunge into it, move with it, and join the dance”</p>
                    <p class="hero-default__quote-author">— Alan Watts</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/blocks/about-me'); ?>

<?php get_template_part('template-parts/blocks/media-section'); ?>

<style>
    .service-cloud {
        padding: 80px 0;
    }
    .tag-cloud {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .tag {
            background-color: #2c3f50;
    color: white;
    padding: 10px;
    border-radius: 5px;
    font-size: 20px;
    }
    .therapy-section blockquote {
            font-style: italic;
            color: #2c3e50;
            margin: 20px auto;
            max-width: 800px;
        }
</style>

<div class="service-cloud">

    <div class="container">

        <div class="row">
            <div class="col-md-7 therapy-section">
                <div class="heading-group">
                    <p class="font-display">Services</p>
                    <h2 class="hdln-2">How Can Therapy Help</h2>
                </div>
                <p style="font-size: 28px;"><strong>The aim of therapy is to help you develop a level of self-awareness and insight so that you can gain a deeper understanding of yourself and begin to let go of behaviours that may have been holding you back.</strong></p>
                <!-- <blockquote style="font-size: 28px;">
                    "I have had the opportunity to work with Emiliana for over a year now and I am incredibly grateful that we connected. She has been very helpful and I have been able to navigate smoothly and successfully through some very challenging situations as a result of our sessions. I have recommended her to several of my friends."
                </blockquote> -->
                <p>Emiliana provides a warm, relaxed, and safe space for you to share your feelings and thoughts.</p>
                <p>She runs her private practice from her space in the countryside and is also available to work with people via Zoom or telephone, currently working with clients from all over the world. Bespoke courses are available as well as a brand new innovative training programme for the sexual and mental well-being of young athletes and those working in corporate fields.</p>
            </div>

            <div class="col-sm-5">
                <div class="heading-group">
                    <p class="font-display">Services</p>
                    <h2 class="hdln-2">What I can help you with</h2>
                </div>
                <div class="tag-cloud">
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
                </div>
            </div>
        </div>
    </div>

</div>

<?php // get_template_part('template-parts/components/svg-curve'); ?>

<?php // get_template_part('template-parts/blocks/services-section'); ?>

<style>

    .testimonials-section {
        padding: 80px 0;
        background-color: #f8f9fa;
        text-align: center;
        background: linear-gradient(45deg, #d4a373, #e8c872) !important;
        background-size: cover;
    }
    .testimonial-carousel {
        max-width: 800px;
        margin: 0 auto;
    }
    .testimonial-carousel .slick-track {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .testimonial {
        padding: 20px;
    }

    .testimonial p {
        height: 100%;
        color: #2b5b6e;
        font-style: italic;
    }

    .quote-svg {
        width: 60px;
        margin: 0px auto !important;
    }

</style>

<section class="testimonials-section bg-secondary" id="testimonials">
    <div class="container">

        <div class="heading-group">
            <p class="font-display">What Clients Say</p>
            <h2 class="hdln-2">Real stories of transformation and healing.</h2>
        </div>
        
        <div class="testimonial-carousel">
            <div>
                <div class="testimonial">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.svg" alt="Quote" class="quote-svg">
                    <p>Sometimes in sessions I feel Emiliana is so in tune with me that, for a while, she was the only place I could feel safe. Gently she has held a metaphorical mirror up and shown me exactly who I am and how to get me back. I can never repay her for that.</p>
                </div>
            </div>
            <div>
                <div class="testimonial">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.svg" alt="Quote" class="quote-svg">
                    <p>Having tried many different therapists over the last 20 years, I always felt like I was wasting my time and money, until a friend referred me to Emiliana. She provided a different experience, a warm, inviting and safe place for me to talk about my deepest issues and also navigating the daily challenges that life brings. I genuinely believe that my life is better having spent time with her and I look forward to my sessions with her. I recommend her to friends and family without hesitation and whoever may need help you are in good hands with Emiliana.</p>
                </div>
            </div>
            <div>
                <div class="testimonial">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.svg" alt="Quote" class="quote-svg">
                    <p>I’m a 34-year-old man who travels a lot and operates multiple businesses. Along the journey I’ve had several therapists. None have come close to the advancement and transformation I have experienced with Emiliana. Not only is she a phenomenal therapist but also a wonderful human being. Thank you Emiliana, you’re the best!</p>
                </div>
            </div>
            <div>
                <div class="testimonial">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.svg" alt="Quote" class="quote-svg">
                    <p>Thanks to Emiliana, I’m not walking around with a mask. Emiliana helped me understand my behaviours and to understand others' behaviours whilst loving myself for who I truly am and with the ability to be my true self. She’s a true work of art.</p>
                </div>
            </div>
            <div>
                <div class="testimonial">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.svg" alt="Quote" class="quote-svg">
                    <p>I have had the opportunity to work with Emiliana for over a year now and I am incredibly grateful that we connected. She has been very helpful and I have been able to navigate smoothly and successfully through some very challenging situations as a result of our sessions. I have recommended her to several of my friends.</p>
                </div>
            </div>
            <div>
                <div class="testimonial">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.svg" alt="Quote" class="quote-svg">
                    <p>Emiliana has opened my eyes and made me aware of a part of myself I had never tapped into. Her wisdom and intuition are what set her apart from other therapists I’ve seen. I wish I could keep her in my pocket.</p>
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
                adaptiveHeight: false,
                centerMode: false,
            });
        });
    </script>

<?php get_footer(); ?>
