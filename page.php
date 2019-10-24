<?php get_header(); ?>
<? if(!(is_front_page())) { ?>
<section class="hero-wrap hero-wrap-2 cover">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread"><?php echo get_the_title(); ?></h1>
                </div>

            </div>
        </div>
    </section>
<?php } //end if?>
<?php
        while ( have_posts() ) {
                    the_post();
                    the_content();
        }
    ?>


<?php get_footer(); ?>