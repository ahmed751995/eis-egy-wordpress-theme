<?php get_header(); ?>
<div class="container">

    <?php
        while ( have_posts() ) {
                    the_post();
                    the_content();
        }
    ?>
</div>
<?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php get_footer(); ?>
