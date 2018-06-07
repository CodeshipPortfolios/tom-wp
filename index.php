<!-- Get header -->
<?php get_header(); ?>

<section class="index">
    <!-- posts -->
    <div class="index-posts is-posts-container">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>
    <?php get_template_part( "content", "page" ); ?>
    <?php endwhile;?>
    </div>
</section>

<!-- Get footer -->
<?php get_footer(); ?>